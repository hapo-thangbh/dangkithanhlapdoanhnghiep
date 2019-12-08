<template>
    <div class="content-wrapper h-1000">
        <section class="content-header">
            <h1><i class="fa fa-book"></i> Tài liệu</h1>
            <ol class="breadcrumb">
                <li>
                    <a href="#"><i class="fa fa-dashboard"></i> Trang chủ</a>
                </li>
                <li class="active">Danh sách tài liệu</li>
            </ol>
        </section>
        <section class="content">
            <div class="row">
                <div class="col-md-12">
                    <div class="box">
                        <div class="box-body">
                            <div class="row">
                                <div class="col-md-2 form-group">
                                    <input type="text" class="form-control" placeholder="Tên tài liệu">
                                </div>

                                <div class="col-md-2 form-group">
                                    <input type="text" class="form-control" placeholder="Tên người đăng">
                                </div>

                                <div class="col-md-3 form-group">
                                    <input type="date" class="form-control">
                                </div>

                                <div class="col-md-3 form-group">
                                    <input type="date" class="form-control">
                                </div>

                                <div class="col-md-2 form-group">
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
                        <button class="btn btn-success pull-right mb-3 mr-3">
                            <i class="fa fa-plus"></i> Tạo mới
                        </button>
                        <div class="box-body table-responsive">
                            <table class="table table-bordered table-striped table-hover">
                                <thead>
                                    <tr>
                                        <th style="width: 20px">STT</th>
                                        <th style="width: 300px">Tên tài liệu</th>
                                        <th style="min-width: 130px">Liên kết ngoài</th>
                                        <th style="min-width: 130px">Liên kết trong</th>
                                        <th style="min-width: 130px">Người đăng</th>
                                        <th style="width: 50px">Ngày đăng</th>
                                        <th class="text-center" style="width: 100px">Hành động</th>
                                    </tr>
                                </thead>

                                <tbody>
                                    <tr>
                                        <td>01</td>
                                        <td>Tài liệu 01</td>
                                        <td>google.com/driver/abcd</td>
                                        <td>iris.vn/abcd</td>
                                        <td>Nguyễn Văn A</td>
                                        <td>06/12/2019</td>
                                        <td class="text-center">
                                            <button class="btn btn-sm btn-primary" data-toggle="modal" data-target="#exampleModal">
                                                <i class="fa fa-edit"></i>
                                            </button>

                                            <button class="btn btn-sm btn-danger">
                                                <i class="fa fa-times"></i>
                                            </button>
                                        </td>
                                    </tr>

                                    <tr>
                                        <td>02</td>
                                        <td>Tài liệu 02</td>
                                        <td>google.com/driver/abcd</td>
                                        <td>iris.vn/abcd</td>
                                        <td>Nguyễn Văn A</td>
                                        <td>06/12/2019</td>
                                        <td class="text-center">
                                            <button class="btn btn-sm btn-primary" data-toggle="modal" data-target="#exampleModal">
                                                <i class="fa fa-edit"></i>
                                            </button>

                                            <button class="btn btn-sm btn-danger">
                                                <i class="fa fa-times"></i>
                                            </button>
                                        </td>
                                    </tr>

                                    <tr>
                                        <td>03</td>
                                        <td>Tài liệu 03</td>
                                        <td>google.com/driver/abcd</td>
                                        <td>iris.vn/abcd</td>
                                        <td>Nguyễn Văn A</td>
                                        <td>06/12/2019</td>
                                        <td class="text-center">
                                            <button class="btn btn-sm btn-primary" data-toggle="modal" data-target="#exampleModal">
                                                <i class="fa fa-edit"></i>
                                            </button>

                                            <button class="btn btn-sm btn-danger">
                                                <i class="fa fa-times"></i>
                                            </button>
                                        </td>
                                    </tr>

                                    <tr>
                                        <td>04</td>
                                        <td>Tài liệu 04</td>
                                        <td>google.com/driver/abcd</td>
                                        <td>iris.vn/abcd</td>
                                        <td>Nguyễn Văn A</td>
                                        <td>06/12/2019</td>
                                        <td class="text-center">
                                            <button class="btn btn-sm btn-primary" data-toggle="modal" data-target="#exampleModal">
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

        <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header text-left">
                        <h5 class="modal-title" id="exampleModalLabel">Chỉnh sửa tài liệu</h5>
                    </div>
                    <div class="modal-body">
                        <form action="">
                            <div class="row form-group">
                                <label class="col-md-3">Tên tài liệu</label>
                                <input type="text" class="col-md-8 form-control" value="Tài liệu 01">
                            </div>
                            <div class="row form-group">
                                <label class="col-md-3">Liên kết</label>
                                <input type="text" class="col-md-8 form-control" value="google.com/driver/abcd">
                            </div>
                            <div class="row form-group">
                                <label class="col-md-3">Đăng tài liệu</label>
                                <input type="file">
                            </div>
                        </form>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Huỷ</button>
                        <button type="button" class="btn btn-primary">Lưu</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</template>

<script>
import { mapState, mapActions } from 'vuex'
export default {
    name: 'ListDocument',
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
