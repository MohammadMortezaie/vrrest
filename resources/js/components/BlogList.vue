<script setup>
    import {
        ref
    } from "vue";
</script>

<template>
    <div>
        <div class="form-group">
            <h3>Blog</h3>
        </div>


        <a class="btn bg-vr text-white" href="/vr/post/create"> <i class="bi bi-plus"></i> Add New Post</a>


        <hr class="my-4" />
        <h3>Blog List</h3>
        <table class="table table-striped">
            <thead>
                <tr>
                    <th scope="col">Title</th>
                    <th scope="col">Subtitle</th>
                    <th scope="col">Handle</th>
                </tr>
            </thead>
            <tbody>
                <tr v-for="item in post_data" :key="item.id">
                    <td>{{ item . title }}</td>
                    <td>{{ item . subtitle }}</td>
                    <td>
                        <a type="button" class="btn btn-primary" :href="'/vr/post/' + item.id + '/edit'">
                            <i class="bi bi-pen"></i> Edit
                        </a>

                        <button type="button" class="btn btn-danger mx-2" @click="axiosDelete(item)">
                            <i class="bi bi-trash"></i> Delete
                        </button>
                    </td>
                </tr>
            </tbody>
        </table>

        <nav aria-label="Page navigation">
            <ul class="pagination">
                <li class="page-item" :class="{ disabled: pagination.current === 1 }">
                    <a class="page-link" href="#" @click.prevent="changePage(pagination.current - 1)">Previous</a>
                </li>
                <li class="page-item" v-for="page in pagination.total" :key="page"
                    :class="{ active: pagination.current === page }">
                    <a class="page-link" href="#" @click.prevent="changePage(page)">{{ page }}</a>
                </li>
                <li class="page-item" :class="{ disabled: pagination.current === pagination.total }">
                    <a class="page-link" href="#" @click.prevent="changePage(pagination.current + 1)">Next</a>
                </li>
            </ul>
        </nav>

    </div>
</template>
<script>
    export default {
        data: () => ({
            url_main: window.location.origin,
            post_data: {},
            pagination: {
                current: 1,
                total: 0,
            },
        }),
        created() {
            this.axiosList();
        },
        methods: {
            changePage(page) {
                if (page >= 1 && page <= this.pagination.total) {
                    this.pagination.current = page;
                    this.axiosList();
                }
            },
            axiosList() {
                const url =
                    window.location.origin +
                    "/vr/post/all?page=" +
                    this.pagination.current;

                axios.defaults.withCredentials = true;
                axios.post(url).then((response) => {
                    this.post_data = response.data.data;
                    this.pagination.current = response.data.current_page;
                    this.pagination.total = response.data.last_page;
                });
            },
            axiosDelete(item) {
                if (confirm('Are you sure you want to Delete ' + item.title + " ?")) {
                    const url = window.location.origin + "/vr/post/" + item.id;
                    axios.defaults.withCredentials = true;
                    axios.delete(url).then((response) => {
                        alert("Successfully Deleted");
                        this.axiosList();
                    });
                }
            },


        },
        watch: {
            "pagination.current"(newValue) {
                this.axiosList();
            },
        },
    };
</script>
