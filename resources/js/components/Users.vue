<template>
    <div class="content-wrapper">
        <section class="content-header">
            <h1>List User</h1>
            <ol class="breadcrumb">
                <li>
                    <a href="#"><i class="fa fa-dashboard"></i> Trang chủ</a>
                </li>
                <li class="active">Danh sách người dùng</li>
            </ol>
        </section>
        <section class="content">
            <div class="row">
                <div class="col-xs-12">
                    <!-- <button class="btn btn-success pull-right" data-toggle="modal" data-target="#add_member">
                        <i class="fa fa-user-plus"></i>
                    </button> -->
                    <button class="btn btn-success pull-right">
                        <i class="fa fa-user-plus"></i>
                    </button>
                    <table class="table table-bordered table-striped table-hover">
                        <thead class="thead-dark">
                            <tr>
                                <th>ID</th>
                                <th>Name</th>
                                <th>Email</th>
                                <th>Type</th>
                                <th class="text-center">Action</th>
                            </tr>
                        </thead>

                        <tbody>
                            <tr>
                                <td>1</td>
                                <td>dangthang</td>
                                <td>dangthang@gmail.com</td>
                                <td>admin</td>
                                <td class="text-center">
                                    <button @click="editUser()" class="btn btn-sm btn-primary">
                                        <i class="fa fa-edit"></i>
                                    </button>

                                    <button @click="deleteUser()" class="btn btn-sm btn-danger">
                                        <i class="fa fa-times"></i>
                                    </button>
                                </td>
                            </tr>

                            <tr>
                                <td>2</td>
                                <td>administrator</td>
                                <td>admin@gmail.com</td>
                                <td>admin</td>
                                <td class="text-center">
                                    <button @click="editUser()" class="btn btn-sm btn-primary">
                                        <i class="fa fa-edit"></i>
                                    </button>

                                    <button @click="deleteUser()" class="btn btn-sm btn-danger">
                                        <i class="fa fa-times"></i>
                                    </button>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </section>
    </div>
</template>

<script>
    export default {
        name: 'ListUser',
        methods:{
            editUser () {
                return alert('Edit User')
            },
            deleteUser () {
                swal.fire({
                    title: 'Are you sure?',
                    text: "You won't be able to revert this!",
                    icon: 'warning',
                    showCancelButton: true,
                    confirmButtonColor: '#3085d6',
                    cancelButtonColor: '#d33',
                    confirmButtonText: 'Yes, delete it!'
                })
                .then((result) => {
                    if (result.value) {
                        swal.fire(
                            'Deleted!',
                            'Your file has been deleted.',
                            'success'
                        )
                    }
                })
                .catch(()=>{
                    swal.fire(
                    'Failed!',
                    'Delete user failed.',
                    'warning'
                    )
                })
            }
        }
    }

</script>
