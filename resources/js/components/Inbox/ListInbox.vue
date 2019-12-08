<template>
    <div class="content-wrapper h-1000">
        <section class="content-header">
            <h1><i class="fa fa-book"></i> Hộp thư</h1>
            <ol class="breadcrumb">
                <li>
                    <a href="#"><i class="fa fa-dashboard"></i> Trang chủ</a>
                </li>
                <li class="active">Danh sách tin nhắnc</li>
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
                                    <input type="text" class="form-control" placeholder="Tên tin nhắn">
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
                        <div class="box-body table-responsive">
                            <table class="table table-bordered table-striped table-hover">
                                <tbody>
                                    <tr>
                                        <td style="max-width: 30px">
                                            <div>
                                                <label class="checkbox-success">
                                                    <input type="checkbox" id="dansu" name=""> <span></span>
                                                </label> 
                                            </div>
                                        </td>

                                        <td style="min-width: 130px">
                                            <p>Nguyễn Văn A</p>
                                        </td>

                                        <td style="min-width: 500px">
                                            <p>
                                                Porta lorem rem viverra repellendus deserunt auctor sodales ante lacus? Quidem earum, adipisci nisl quaerat expedita sollicitudin eius distinctio taciti, rutrum fermentum eveniet ornare?
                                            </p>
                                        </td>

                                        <td style="min-width: 130px">
                                            <p>15:05 06/12/2019</p>
                                        </td>

                                        <td style="min-width: 100px">
                                            <label class="label label-warning">Chưa trả lời</label>
                                        </td>

                                        <td class="text-right" style="min-width: 130px">
                                            <button class="btn btn-sm btn-primary">
                                                <i class="fa fa-edit"></i>
                                            </button>
                                            <button class="btn btn-sm btn-danger">
                                                <i class="fa fa-times"></i>
                                            </button>
                                        </td>
                                    </tr>

                                    <tr>
                                        <td style="max-width: 30px">
                                            <div>
                                                <label class="checkbox-success">
                                                    <input type="checkbox" id="dansu" name=""> <span></span>
                                                </label> 
                                            </div>
                                        </td>

                                        <td style="min-width: 130px">
                                            <p>Nguyễn Văn A</p>
                                        </td>

                                        <td style="max-width: 500px">
                                            <p>
                                                Porta lorem rem viverra repellendus deserunt auctor sodales ante lacus? Quidem earum, adipisci nisl quaerat expedita sollicitudin eius distinctio taciti, rutrum fermentum eveniet ornare?
                                            </p>
                                        </td>

                                        <td style="min-width: 130px">
                                            <p>15:05 06/12/2019</p>
                                        </td>

                                        <td style="min-width: 100px">
                                            <label class="label label-success">Đã trả lời</label>
                                        </td>

                                        <td class="text-right" style="min-width: 130px">
                                            <button class="btn btn-sm btn-primary">
                                                <i class="fa fa-edit"></i>
                                            </button>
                                            <button class="btn btn-sm btn-danger">
                                                <i class="fa fa-times"></i>
                                            </button>
                                        </td>
                                    </tr>

                                    <tr>
                                        <td style="max-width: 30px">
                                            <div>
                                                <label class="checkbox-success">
                                                    <input type="checkbox" id="dansu" name=""> <span></span>
                                                </label> 
                                            </div>
                                        </td>

                                        <td style="min-width: 130px">
                                            <p>Nguyễn Văn A</p>
                                        </td>

                                        <td style="min-width: 500px">
                                            <p>
                                                Porta lorem rem viverra repellendus deserunt auctor sodales ante lacus? Quidem earum, adipisci nisl quaerat expedita sollicitudin eius distinctio taciti, rutrum fermentum eveniet ornare?
                                            </p>
                                        </td>

                                        <td style="min-width: 130px">
                                            <p>15:05 06/12/2019</p>
                                        </td>

                                        <td style="min-width: 100px">
                                            <label class="label label-warning">Chưa trả lời</label>
                                        </td>

                                        <td class="text-right" style="min-width: 130px">
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
        name: 'ListInbox',
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
