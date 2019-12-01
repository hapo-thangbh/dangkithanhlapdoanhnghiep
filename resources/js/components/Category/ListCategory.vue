<template>
    <div class="content-wrapper h-900">
        <section class="content-header">
            <h1><i class="fa fa-book"></i> Chuyên mục</h1>
            <ol class="breadcrumb">
                <li>
                    <a href="#"><i class="fa fa-dashboard"></i> Trang chủ</a>
                </li>
                <li class="active">Danh sách chuyên mục</li>
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
                                    <input type="text" class="form-control" placeholder="Tên chuyên mục">
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
                        <router-link :to="{ name:'addCategory' }">
                            <button class="btn btn-success pull-right mb-3 mr-3">
                                <i class="fa fa-plus"></i> Tạo mới
                            </button>
                        </router-link>
                        <table class="table table-bordered table-striped table-hover">
                            <thead>
                                <tr>
                                    <th style="width: 20px">ID</th>
                                    <th style="width: 300px">Tên chuyên mục</th>
                                    <th style="width: 50px">Trạng thái</th>
                                    <th style="width: 50px">Ngày tạo</th>
                                    <th class="text-center" style="width: 100px">Hành động</th>
                                </tr>
                            </thead>

                            <tbody>
                                <tr>
                                    <td>1</td>
                                    <td>Chuyên mục 1</td>
                                    <td>
                                        <label class="label label-success">Công khai</label>
                                    </td>
                                    <td>18/11/2019</td>
                                    <td class="text-center">
                                        <router-link :to="{ name:'editCategory' }">
                                            <button class="btn btn-sm btn-primary">
                                                <i class="fa fa-edit"></i>
                                            </button>
                                        </router-link>

                                        <button @click="deleteCategory()" class="btn btn-sm btn-danger">
                                            <i class="fa fa-times"></i>
                                        </button>
                                    </td>
                                </tr>

                                <tr>
                                    <td>2</td>
                                    <td>Chuyên mục 2</td>
                                    <td>
                                        <label class="label label-danger">Riêng tư</label>
                                    </td>
                                    <td>18/11/2019</td>
                                    <td class="text-center">
                                        <router-link :to="{ name:'editCategory' }">
                                            <button class="btn btn-sm btn-primary">
                                                <i class="fa fa-edit"></i>
                                            </button>
                                        </router-link>

                                        <button @click="deleteCategory()" class="btn btn-sm btn-danger">
                                            <i class="fa fa-times"></i>
                                        </button>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </section>
    </div>
</template>

<script>
    export default {
        name: 'ListCategory',
        methods: {
          deleteCategory() {
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
                    swal.fire(
                      'Thành công',
                      'Bạn đã xóa thành công',
                      'success'
                    )
                }
            })
            .catch(() => {
                swal.fire(
                  'Thất bại',
                  'Xóa không thành công',
                  'warning'
                )
            })
          }
        }
    }

</script>
