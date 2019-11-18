<template>
    <div class="content-wrapper h-800">
        <section class="content-header">
            <h1><i class="fa fa-indent"></i> Bài viết</h1>
            <ol class="breadcrumb">
                <li>
                    <a href="#"><i class="fa fa-dashboard"></i> Trang chủ</a>
                </li>
                <li class="active">Danh sách bài viết</li>
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
                                    <input type="text" class="form-control" placeholder="Tiêu đề">
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
                        <router-link :to="{ name:'addPost' }">
                            <button class="btn btn-success pull-right mb-3 mr-3">
                                <i class="fa fa-plus"></i> Tạo mới
                            </button>
                        </router-link>
                        <table class="table table-bordered table-striped table-hover">
                            <thead>
                                <tr>
                                    <th style="width: 20px">ID</th>
                                    <th style="width: 100px">Tiêu đề</th>
                                    <th>Nội dung</th>
                                    <th style="width: 50px">Trạng thái</th>
                                    <th style="width: 50px">Ngày tạo</th>
                                    <th class="text-center" style="width: 100px">Hành động</th>
                                </tr>
                            </thead>

                            <tbody>
                                <tr>
                                    <td>1</td>
                                    <td>Bài viết 1</td>
                                    <td>
                                        <p>Omnis ornare interdum sem porro consectetuer, rem! Quae quisquam dicta,
                                            reprehenderit nostra! Venenatis penatibus accusantium ipsum inventore diam?
                                            Iure consequat, ultricies cumque tristique vulputate, aliquip eligendi
                                            facere eget sociosqu vestibulum, officia sociis hac per parturient
                                            repudiandae? Fringilla quod, cumque, ultrices, ornare dolorem! Officiis
                                            deleniti facilisi, ullamco similique porta, curabitur scelerisque nulla
                                            convallis! Vero adipisicing? Dictumst cras quos ducimus. Quas proident nihil
                                            alias venenatis. Venenatis? Egestas, earum? Hic temporibus consectetuer,
                                            perspiciatis, dictum molestias? Occaecati duis iure condimentum fringilla.
                                            Placerat ridiculus sequi blanditiis, libero porttitor officia, occaecati!
                                            Necessitatibus esse hendrerit optio per sapiente, iaculis eaque? Ac
                                            blanditiis tellus deleniti aut incidunt. Asperiores.
                                        </p>
                                    </td>
                                    <td>
                                        <label class="label label-warning">Công khai</label>
                                    </td>
                                    <td>18/11/2019</td>
                                    <td class="text-center">
                                        <router-link :to="{ name:'editPost' }">
                                            <button class="btn btn-sm btn-primary">
                                                <i class="fa fa-edit"></i>
                                            </button>
                                        </router-link>

                                        <button @click="deletePost()" class="btn btn-sm btn-danger">
                                            <i class="fa fa-times"></i>
                                        </button>
                                    </td>
                                </tr>

                                <tr>
                                    <td>2</td>
                                    <td>Bài viết 2</td>
                                    <td>
                                        <p>Omnis ornare interdum sem porro consectetuer, rem! Quae quisquam dicta,
                                            reprehenderit nostra! Venenatis penatibus accusantium ipsum inventore diam?
                                            Iure consequat, ultricies cumque tristique vulputate, aliquip eligendi
                                            facere eget sociosqu vestibulum, officia sociis hac per parturient
                                            repudiandae? Fringilla quod, cumque, ultrices, ornare dolorem! Officiis
                                            deleniti facilisi, ullamco similique porta, curabitur scelerisque nulla
                                            convallis! Vero adipisicing? Dictumst cras quos ducimus. Quas proident nihil
                                            alias venenatis. Venenatis? Egestas, earum? Hic temporibus consectetuer,
                                            perspiciatis, dictum molestias? Occaecati duis iure condimentum fringilla.
                                            Placerat ridiculus sequi blanditiis, libero porttitor officia, occaecati!
                                            Necessitatibus esse hendrerit optio per sapiente, iaculis eaque? Ac
                                            blanditiis tellus deleniti aut incidunt. Asperiores.
                                        </p>
                                    </td>
                                    <td>
                                        <label class="label label-warning">Riêng tư</label>
                                    </td>
                                    <td>18/11/2019</td>
                                    <td class="text-center">
                                        <router-link :to="{ name:'editPost' }">
                                            <button class="btn btn-sm btn-primary">
                                                <i class="fa fa-edit"></i>
                                            </button>
                                        </router-link>

                                        <button @click="deletePost()" class="btn btn-sm btn-danger">
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
        name: 'ListPost',
        methods: {
          editPost() {
            return alert('Edit Post')
          },
          deletePost() {
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
