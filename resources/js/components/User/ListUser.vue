<template>
    <div class="content-wrapper h-900">
        <section class="content-header">
            <h1><i class="fa fa-users"></i> Người dùng</h1>
            <ol class="breadcrumb">
                <li>
                    <a href="#"><i class="fa fa-dashboard"></i> Trang chủ</a>
                </li>
                <li class="active">Danh sách người dùng</li>
            </ol>
        </section>
        <section class="content">
            <div class="row">
                <div class="col-md-12">
                    <div class="box">
                        <div class="box-body">
                            <div class="row">
                                <div class="col-md-3 form-group">
                                    <input type="text" class="form-control" placeholder="Tên tài khoản">
                                </div>

                                <div class="col-md-3 form-group">
                                    <input type="text" class="form-control" placeholder="Email">
                                </div>

                                <div class="col-md-3 form-group">
                                    <input type="text" class="form-control">
                                </div>

                                <div class="col-md-3 form-group">
                                    <button class="btn btn-primary">
                                        <i class="fa fa-search"></i> Tìm kiếm
                                    </button>
                                </div>
                            </div>
                        </div>
                        <hr>
                        <button class="btn btn-primary ml-3">
                            <i class="fa fa-refresh"></i> Làm mới
                        </button>
                        <router-link :to="{ name:'addUser' }">
                            <button class="btn btn-success pull-right mb-3 mr-3">
                                    <i class="fa fa-plus"></i> Tạo mới
                            </button>
                        </router-link>
                        <div class="box-body table-responsive">
                            <table class="table table-bordered table-striped table-hover">
                                <thead>
                                    <tr>
                                        <th style="width: 20px">ID</th>
                                        <th>Tên tài khoản</th>
                                        <th>Email</th>
                                        <th>Quyền người dùng</th>
                                        <th>Ngày tạo</th>
                                        <th class="text-center">Hành động</th>
                                    </tr>
                                </thead>

                                <tbody>
                                    <tr v-for="user in users" :key="user.id">
                                        <td>{{ user.id }}</td>
                                        <td>{{ user.username }}</td>
                                        <td>{{ user.email }}</td>
                                        <td>
                                            <label class="label label-warning" v-if="user.level === 1">Quản trị viên</label>
                                            <label class="label label-primary" v-else>Người dùng</label>
                                        </td>
                                        <td>{{ formatDate(user.created_at) }}</td>
                                        <td class="text-center">
                                            <router-link :to="{ path: '/admin/user/edit/' + user.id }" class="txt-white">
                                                <button class="btn btn-sm btn-primary">
                                                    <i class="fa fa-edit"></i>
                                                </button>
                                            </router-link>

                                            <button @click="destroyUser(user.id)" class="btn btn-sm btn-danger">
                                                <i class="fa fa-times"></i>
                                            </button>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>
</template>

<script>
import { mapState, mapActions } from 'vuex'

export default {
    name: 'ListUser',
    mounted() {
        this.getUsers()
    },
    computed: {
        ...mapState('user', ['users'])
    },
    methods: {
        ...mapActions('user', ['getUsers', 'deleteUser']),
        destroyUser(id) {
            swal.fire({
                title: '',
                text: "Bạn có chắc chắn muốn xóa?",
                icon: 'warning',
                showCancelButton: true,
                confirmButtonColor: '#3085d6',
                cancelButtonColor: '#d33',
                confirmButtonText: 'Đồng ý',
                cancelButtonText: 'Hủy bỏ'
            })
            .then((result) => {
                if (result.value) {
                    this.deleteUser(id)
                }
            })
            .catch(() => {
                swal.fire(
                  'Thất bại',
                  'Xóa tài khoản không thành công',
                  'warning'
                )
            })
        },
        formatDate (date) {
            return moment(date).format('DD/MM/YYYY')
        }
    }
}

</script>
