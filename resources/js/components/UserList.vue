<script setup>
    import {
        ref
    } from "vue";
</script>

<template>
    <div>
        <h3>Users List</h3>
        <table class="table table-striped">
            <thead>
                <tr>
                    <th scope="col">name</th>
                    <th scope="col">email</th>
                    <th scope="col">Status</th>
                    <th scope="col">Is Admin</th>
                    <th scope="col">Handle</th>
                </tr>
            </thead>
            <tbody>
                <tr v-for="item in post_data" :key="item.id">
                    <td>{{ item . name }}</td>
                    <td>{{ item . email }} </td>
                    <td v-if="item.is_active == 1">
                        <span class=" badge bg-success">
                            <i class="bi bi-check-circle"></i> Active
                        </span>
                    </td>
                    <td v-else-if="item.is_active == 0">
                        <span class=" badge bg-danger">
                            <i class="bi bi-triangle-fill"></i> Inactive
                        </span>
                    </td>
                    <td v-if="item.is_admin == 1">
                        <span class=" badge bg-success">
                            <i class="bi bi-person-bounding-box"></i> Admin
                        </span>
                    </td>
                    <td v-else-if="item.is_admin == 0">
                        <span class=" badge bg-danger">
                            <i class="bi bi-person"></i> User
                        </span>
                    </td>
                    <td>
                        <button type="button" class="btn btn-primary" data-bs-toggle="modal"
                            data-bs-target="#exampleModal" @click="emptyDataEdit(item)">
                            <i class="bi bi-pen"></i> Edit
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
                            <h4>{{user_select.name}} </h4>
                            <hr />
                          <label for="is_active"> <i class="bi bi-check-circle"></i> Active </label>
                          <select class="form-control" v-model="is_active" id="is_active">
                            <option value="1">Yes</option>
                            <option value="0">No</option>
                          </select>
                        </div>

                        <div class="form-group">
                          <label for="is_admin"> <i class="bi bi-person-bounding-box"></i> Admin</label>
                          <select class="form-control" v-model="is_admin" id="is_admin">
                            <option value="1">Yes</option>
                            <option value="0">No</option>
                          </select>
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
            email: '',
            edit_id: 0,
            is_admin: false,
            is_active: false,
            user_select: {},
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
                this.user_select = item;
                this.edit_id = item.id;
                this.is_admin = item.is_admin;
                this.is_active = item.is_active;
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
                    "/vr/adminuser/all?page=" +
                    this.pagination.current;

                axios.defaults.withCredentials = true;
                axios.post(url).then((response) => {
                    this.post_data = response.data.data;
                    this.pagination.current = response.data.current_page;
                    this.pagination.total = response.data.last_page;
                });
            },
            axiosUpdate() {
                const url = window.location.origin + "/vr/adminuser/" + this.user_select.id;
                var data = {
                    is_admin: this.is_admin,
                    is_active: this.is_active,
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
