<template>
    <div class="content-wrapper h-700">
        <section class="content-header">
            <h1><i class="fa fa-paste"></i> Thêm bài viết</h1>
            <ol class="breadcrumb">
                <li>
                    <a href="#"><i class="fa fa-dashboard"></i> Trang chủ</a>
                </li>
                <li class="active">Thêm bài viết</li>
            </ol>
        </section>
        <section class="content">
            <div class="row">
                <div class="col-md-12">
                    <div class="box">
                        <div class="row">
                            <div class="col-md-12">
                                <router-link :to="{ name:'listPost' }">
                                    <button class="btn btn-primary pull-right mr-3 mt-3">
                                            <i class="fa fa-backward"></i> Trở về
                                    </button>
                                </router-link>
                            </div>
                        </div>
                        <div class="box-body">
                            <form action="" class="pb-5">
                                <div class="row form-group">
                                    <label for="title" class="col-md-3 text-md-right">Tiêu đề</label>
                                    <div class="col-md-6">
                                        <input type="text" class="form-control">
                                    </div>
                                </div>

                                <div class="row form-group">
                                    <label for="tag" class="col-md-3 text-md-right">Tag</label>
                                    <div class="col-md-6">
                                        <input type="text" class="form-control">
                                    </div>
                                </div>

                                <div class="row form-group">
                                    <label for="description" class="col-md-3 text-md-right">Nội dung</label>
                                    <div class="col-md-6">
                                        <textarea cols="30" rows="10" class="form-control"></textarea>
                                    </div>
                                </div>

                                <div class="row form-group">
                                    <label for="status" class="col-md-3 text-md-right">Trạng thái</label>
                                    <div class="col-md-6">
                                        <input type="checkbox" id="switch" class="toggle-ios toggle-primary"/>
                                        <label for="switch" class="tgl-checkbox tgl-primary"></label>
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
        name: 'AddPost'
    }

</script>
