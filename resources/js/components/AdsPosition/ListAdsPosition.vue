<template>
    <div class="content-wrapper h-1000">
        <section class="content-header">
            <h1><i class="fa fa-map-marker"></i> Vị trí quảng cáo</h1>
            <ol class="breadcrumb">
                <li>
                    <a href="#"><i class="fa fa-dashboard"></i> Trang chủ</a>
                </li>
                <li class="active">Danh sách vị trí quảng cáo</li>
            </ol>
        </section>
        <section class="content">
            <div class="row">
                <div class="col-md-12">
                    <div class="box">
                        <div class="box-body">
                            <div class="row">
                                <div class="col-md-3 form-group">
                                    <input type="text" class="form-control" placeholder="ID">
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
                        <div class="box-body table-responsive">
                            <table class="table table-bordered table-striped table-hover">
                                <tbody>
                                    <tr>
                                        <th>STT</th>
                                        <th  style="min-width: 150px">Vị trí quảng cáo</th>
                                        <th>Hình ảnh 1</th>
                                        <th>Hình ảnh 2</th>
                                        <th>Hình ảnh 3</th>
                                        <th>Code</th>
                                        <th style="min-width: 100px">Hành động</th>
                                    </tr>

                                    <tr>
                                        <td>01</td>
                                        <td>Quảng cáo top</td>
                                        <td>
                                            <img src="https://adminlte.io/themes/AdminLTE/dist/img/user1-128x128.jpg"
                                            alt="user image" class="online">
                                        </td>
                                        <td>
                                            <img src="https://adminlte.io/themes/AdminLTE/dist/img/user3-128x128.jpg"
                                            alt="user image" class="online">
                                        </td>
                                        <td>abc</td>
                                        <td>
                                            https://api/post/getAll/6gh645543gjg5
                                        </td>
                                        <td>
                                            <button class="btn btn-sm btn-primary">
                                                <i class="fa fa-edit"></i>
                                            </button>
                                            <button class="btn btn-sm btn-danger">
                                                <i class="fa fa-times"></i>
                                            </button>
                                        </td>
                                    </tr>

                                    <tr>
                                        <td>02</td>
                                        <td>Quảng cáo bên trái</td>
                                        <td>
                                            <img src="https://adminlte.io/themes/AdminLTE/dist/img/user1-128x128.jpg"
                                            alt="user image" class="online">
                                        </td>
                                        <td>
                                            <img src="https://adminlte.io/themes/AdminLTE/dist/img/user3-128x128.jpg"
                                            alt="user image" class="online">
                                        </td>
                                        <td>abc</td>
                                        <td>
                                            https://api/post/getAll/6gh645543gjg5
                                        </td>
                                        <td>
                                            <button class="btn btn-sm btn-primary">
                                                <i class="fa fa-edit"></i>
                                            </button>
                                            <button class="btn btn-sm btn-danger">
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
    import {
        mapState,
        mapActions
    } from 'vuex'
    export default {
        name: 'ListAdsPosition',
        computed: {

        },
        mounted() {

        },
        methods: {
            // destroyCategory(id) {
            //     swal.fire({
            //         title: '',
            //         text: "Bạn có chắc chắn muốn xóa?",
            //         icon: 'warning',
            //         showCancelButton: true,
            //         confirmButtonColor: '#3085d6',
            //         cancelButtonColor: '#d33',
            //         confirmButtonText: 'Đồng ý',
            //         cancelButtonText: 'Hủy bỏ'
            //     })
            //     .then((result) => {
            //         if (result.value) {
            //             this.deleteCategory(id)
            //         }
            //     })
            //     .catch(() => {
            //         swal.fire(
            //             'Thất bại',
            //             'Xóa không thành công',
            //             'warning'
            //         )
            //     })
            // },
            // formartDate (date) {
            //     return moment(date).format('DD/MM/YYYY')
            // },
            // refresh () {
            //     this.getPosts()
            // }
        }
    }

</script>
