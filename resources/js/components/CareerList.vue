<script setup>
    import {
        ref
    } from "vue";
</script>

<template>
    <div>

        <a class="btn bg-vr text-white" href="/vr/career/create"> <i class="bi bi-plus"></i> Add New Job</a>

        <hr class="my-4" />
        <h3>Career List</h3>
        <table class="table table-striped">
            <thead>
                <tr>
                    <th scope="col">title</th>
                    <th scope="col">Date</th>
                    <th scope="col">Status</th>
                    <th scope="col">Handle</th>
                </tr>
            </thead>
            <tbody>
                <tr v-for="item in post_data" :key="item.id">
                    <td>{{ item . title }}</td>
                    <td>{{ item . created_at }}</td>
                    <td v-if="item.is_active == 1">
                        <span class=" badge bg-success">
                            <i class="bi bi-check-circle"></i> Published
                        </span>
                    </td>
                    <td v-if="item.is_active == 0">
                        <span class=" badge bg-danger">
                            <i class="bi bi-triangle-fill"></i> Draft
                        </span>
                    </td>
                    <td>
                        <a class="btn btn-primary" :href="'/vr/career/' + item.id + '/edit'">
                            <i class="bi bi-pen"></i> Edit
                        </a>

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
            new_name_en: null,
            new_name_zh: null,
            edit_id: null,
            edit_name_en: null,
            edit_name_zh: null,
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
                    "/vr/career/all?page=" +
                    this.pagination.current;

                axios.defaults.withCredentials = true;
                axios.post(url).then((response) => {
                    this.post_data = response.data.data;
                    this.pagination.current = response.data.current_page;
                    this.pagination.total = response.data.last_page;
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
