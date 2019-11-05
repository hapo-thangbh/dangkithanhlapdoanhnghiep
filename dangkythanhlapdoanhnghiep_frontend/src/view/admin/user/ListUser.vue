<template>
    <div>
        <div class="row">
            <div class="col-md-12 grid-margin stretch-card">
                <div class="card">
                    <div class="card-body">
                        <form action="">
                                <div class="row d-flex justify-content-center">
                                    <div class="col-lg-3 col-md-3">
                                        <div class="form-group">
                                            <input type="text" class="form-control" placeholder="Enter Username">
                                        </div>
                                    </div>

                                    <div class="col-lg-3 col-md-3">
                                        <div class="form-group">
                                            <input type="text" class="form-control" placeholder="Enter Name">
                                        </div>
                                    </div>

                                    <div class="col-lg-3 col-md-3">
                                        <div class="form-group">
                                            <select name="" id="" class="form-control">
                                                <option>Status</option>
                                                <option>Active</option>
                                                <option>Inactive</option>
                                            </select>
                                        </div>
                                    </div>

                                    <div class="col-lg-1 col-md-1 text-sm-center">
                                        <div class="form-group">
                                            <button class="btn btn-gradient-primary">
                                                Search
                                            </button>
                                        </div>
                                    </div>
                                </div>
                            </form>
                    </div>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-md-12 grid-margin stretch-card">
                <div class="card">
                    <div class="card-body">
                        <div class="card-title d-flex justify-content-between">
                            <h4>List User</h4>
                            <router-link :to="{name: 'addUser'}">
                                <button class="btn btn-sm btn-success"><i class="mdi mdi-plus-one"></i> Add New</button>
                            </router-link>
                        </div>
                        <Datatable :items="items" :fields="fields"></Datatable>
                    </div>
                </div>
            </div>
        </div>
    </div>
</template>

<script>
import Datatable from '@/components/Datatable'
export default {
    data(){
        return {
            items: [
                { id: '1', username: 'admin', name: 'Administrator', email: 'admin@gmail.com', status: '1' },
                { id: '2', username: 'dangthang', name: 'Phạm Đăng Thắng', email: 'dangthang@gmail.com', status: '1' },
            ],
            fields: [
                { label: "ID", key: "id", sortable: true, tdClass: "id"},
                { label: "Username", key: "username", sortable: true, tdClass: "username" },
                { label: "Name", key: "name", sortable: true, tdClass: "name" },
                { label: "Email", key: "email", sortable: true },
                { label: "Status", key: "status", sortable: true, tdClass: "status" },
                { label: "Actions", key: "actions", sortable: true, tdClass: "actions" }
            ]
        }
    },
    components: {
        Datatable
    }
}
</script>