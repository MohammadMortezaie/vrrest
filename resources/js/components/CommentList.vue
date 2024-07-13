<script setup>
    import {
        ref
    } from "vue";
</script>

<template>
    <div class="table-responsive">
        <h3>Comment List</h3>
        <table class="table table-striped">
            <thead>
                <tr>
                    <th scope="col">Name</th>
                    <th scope="col">Email</th>
                    <th scope="col">Comment</th>
                    <th scope="col">Status</th>
                    <th scope="col">Handle</th>
                </tr>
            </thead>
            <tbody>
                <tr v-for="item in post_data" :key="item.id">
                    <td>{{ item . name }}</td>
                    <td>{{ item . email }}</td>
                    <td>{{ item . comment }}</td>
                    <td v-if="item.is_active == 1">
                        <span class=" badge bg-success">
                            <i class="bi bi-check-circle"></i> Active
                        </span>
                    </td>
                    <td v-if="item.is_active == 0">
                        <span class=" badge bg-danger">
                            <i class="bi bi-triangle-fill"></i> Inactive
                        </span>
                    </td>
                    <td>
                        <button type="button" class="btn btn-success mx-2">
                            Show Post <i class="bi bi-arrow-up-right-circle"></i>

                        </button>

                        <button type="button" class="btn btn-warning mx-2" @click="axiosUpdate(item)">
                            Change Status <i class="bi bi-arrow-repeat"></i>

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
                    "/vr/comment/all?page=" +
                    this.pagination.current;

                axios.defaults.withCredentials = true;
                axios.post(url).then((response) => {
                    this.post_data = response.data.data;
                    this.pagination.current = response.data.current_page;
                    this.pagination.total = response.data.last_page;
                });
            },
            axiosUpdate(item) {
                const url = window.location.origin + "/vr/comment/" + item.id;
                var data = {
                    is_active: !item.is_active,
                };
                axios.defaults.withCredentials = true;
                axios.put(url, data).then((response) => {
                    alert("Successfully Done");
                    this.axiosList();
                });
            },

        },
        watch: {
            "pagination.current"(newValue) {
                this.axiosList();
            },
        },
    };
</script>
