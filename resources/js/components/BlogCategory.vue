<script setup>
    import {
        ref
    } from "vue";
</script>

<template>
    <div>
        <div class="form-group">
            <h3>New Category</h3>
        </div>
        <div class="form-group">
            <label for="name_en">Category Name English</label>
            <input type="text" class="form-control" v-model="new_name_en" id="name_en" />
        </div>

        <div class="form-group">
            <label for="name_zh">Category Name chinese</label>
            <input type="text" class="form-control" v-model="new_name_zh" id="name_zh" />
        </div>

        <button @click="axiosAddNew()" class="btn bg-vr" :disabled="!new_name_en || !new_name_zh">Submit</button>


        <hr class="my-4" />
        <h3>Category List</h3>
        <table class="table table-striped">
            <thead>
                <tr>
                    <th scope="col">English</th>
                    <th scope="col">Chinese</th>
                    <th scope="col">Handle</th>
                </tr>
            </thead>
            <tbody>
                <tr v-for="item in post_data" :key="item.id">
                    <td>{{ item . name_en }}</td>
                    <td>{{ item . name_zh }}</td>
                    <td>
                        <button type="button" class="btn btn-primary" data-bs-toggle="modal"
                            data-bs-target="#exampleModal" @click="emptyDataEdit(item)">
                            <i class="bi bi-pen"></i>  Edit
                        </button>

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

        <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">
                            Update Data
                        </h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">


                        <div class="form-group">
                            <label for="edit_name_en">Category Name English</label>
                            <input type="text" class="form-control" v-model="edit_name_en" id="edit_name_en" />
                        </div>

                        <div class="form-group">
                            <label for="edit_name_zh">Category Name chinese</label>
                            <input type="text" class="form-control" v-model="edit_name_zh" id="edit_name_zh" />
                        </div>

                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">
                            Close
                        </button>
                        <button type="button" class="btn btn-primary" @click="axiosUpdate()">
                            Save changes
                        </button>
                    </div>
                </div>
            </div>
        </div>
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
            emptyDataEdit(item) {
                this.edit_id = item.id;
                this.edit_name_en = item.name_en;
                this.edit_name_zh = item.name_zh;
            },
            changePage(page) {
                if (page >= 1 && page <= this.pagination.total) {
                    this.pagination.current = page;
                    this.axiosList();
                }
            },
            axiosList() {
                const url =
                    window.location.origin +
                    "/vr/postcategory/all?page=" +
                    this.pagination.current;

                axios.defaults.withCredentials = true;
                axios.post(url).then((response) => {
                    this.post_data = response.data.data;
                    this.pagination.current = response.data.current_page;
                    this.pagination.total = response.data.last_page;
                });
            },
            axiosAddNew() {
                const url = window.location.origin + "/vr/postcategory";
                var data = {
                    name_en: this.new_name_en,
                    name_zh: this.new_name_zh,
                };
                axios.defaults.withCredentials = true;
                axios.post(url, data).then((response) => {
                    alert("Successfully Done");
                    this.new_name_en = null;
                    this.new_name_zh = null;
                    this.axiosList();
                });
            },
            axiosUpdate() {
                const url = window.location.origin + "/vr/postcategory/" + this.edit_id;
                var data = {
                    id: this.edit_id,
                    name_en: this.edit_name_en,
                    name_zh: this.edit_name_zh,
                };
                axios.defaults.withCredentials = true;
                axios.put(url, data).then((response) => {
                    alert("Successfully Done");
                    this.axiosList();
                });
            },
            axiosDelete(item) {
                if (confirm('Are you sure you want to Delete '+item.name_en+" ?")) {
                    const url = window.location.origin + "/vr/postcategory/" + item.id;
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
