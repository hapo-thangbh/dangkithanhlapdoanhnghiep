<template>
    <div class="content-wrapper h-700">
        <section class="content-header">
            <h1><i class="fa fa-user-plus"></i> Thêm người dùng</h1>
            <ol class="breadcrumb">
                <li>
                    <a href="#"><i class="fa fa-dashboard"></i> Trang chủ</a>
                </li>
                <li class="active">Thêm người dùng</li>
            </ol>
        </section>
        <section class="content">
            <div class="row">
                <div class="col-md-12">
                    <div class="box">
                        <div class="row">
                            <div class="col-md-12">
                                <router-link :to="{ name:'listUser' }" class="txt-white">
                                    <button class="btn btn-primary pull-right mr-3 mt-3">
                                            <i class="fa fa-backward"></i> Trở về
                                    </button>
                                </router-link>
                            </div>
                        </div>
                        <div class="box-body">
                            <form action="" class="pb-5">
                                <div class="row form-group">
                                    <label for="name" class="col-md-3 text-md-right">Tên đăng nhập</label>
                                    <div class="col-md-6">
                                        <input type="text" class="form-control">
                                    </div>
                                </div>

                                <div class="row form-group">
                                    <label for="name" class="col-md-3 text-md-right">Email</label>
                                    <div class="col-md-6">
                                        <input type="email" class="form-control">
                                    </div>
                                </div>

                                <div class="row form-group">
                                    <label for="name" class="col-md-3 text-md-right">Avatar</label>
                                    <div class="col-md-6">
                                        <input type="file">
                                    </div>
                                </div>

                                <div class="row form-group">
                                    <label for="name" class="col-md-3 text-md-right">Mật khẩu</label>
                                    <div class="col-md-6">
                                        <input type="password" class="form-control">
                                    </div>
                                </div>

                                <div class="row form-group">
                                    <label for="name" class="col-md-3 text-md-right">Xác nhận mật khẩu</label>
                                    <div class="col-md-6">
                                        <input type="confirm_password" class="form-control">
                                    </div>
                                </div>

                                <div class="row form-group">
                                    <div class="col-md-12 text-center">
                                        <button type="reset" class="btn btn-sm btn-default">
                                            <i class="fa fa-refresh"></i> Làm mới
                                        </button>
                                        <button type="submit" class="btn btn-sm btn-success">
                                            <i class="fa fa-check"></i> Xác nhận
                                        </button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>
</template>

<script>
    export default {
        name: 'CreateUser'
    }

</script>
