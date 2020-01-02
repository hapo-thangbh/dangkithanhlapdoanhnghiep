<template>
    <div class="content-wrapper h-1400">
        <section class="content-header">
            <h1><i class="fa fa-dashboard"></i> Trang chủ</h1>
            <ol class="breadcrumb">
                <li><a href="#"><i class="fa fa-dashboard"></i> Trang chủ</a></li>
            </ol>
        </section>
        <section class="content">
            <div class="row">
                <div class="col-lg-3 col-xs-6">
                    <div class="small-box bg-aqua">
                        <div class="inner">
                            <h3>0</h3>
                            <p>Bài viết mới</p>
                        </div>
                        <div class="icon"><i class="fa fa-newspaper-o"></i></div>
                        <a href="#" class="small-box-footer">Thêm thông tin <i class="fa fa-arrow-circle-right"></i></a>
                    </div>
                </div>
                <div class="col-lg-3 col-xs-6">
                    <div class="small-box bg-green">
                        <div class="inner">
                            <h3>{{ countPost }}</h3>
                            <p>Lượt truy cập bài viết</p>
                        </div>
                        <div class="icon">
                            <i class="fa fa-signal"></i>
                        </div>
                        <a href="#" class="small-box-footer">Thêm thông tin <i class="fa fa-arrow-circle-right"></i></a>
                    </div>
                </div>
                <div class="col-lg-3 col-xs-6">
                    <div class="small-box bg-yellow">
                        <div class="inner">
                            <h3>{{ countUser }}</h3>
                            <p>Thời gian truy cập</p>
                        </div>
                        <div class="icon">
                            <i class="fa fa-user-plus"></i>
                        </div>
                        <router-link :to="{ name: 'listUser' }" class="small-box-footer">
                            Thêm thông tin <i class="fa fa-arrow-circle-right"></i>
                        </router-link>
                    </div>
                </div>
                <div class="col-lg-3 col-xs-6">
                    <div class="small-box bg-red">
                        <div class="inner">
                            <h3>0</h3>
                            <p>Khách truy cập</p>
                        </div>
                        <div class="icon">
                            <i class="fa fa-pie-chart"></i>
                        </div>
                        <a href="#" class="small-box-footer">Thêm thông tin <i class="fa fa-arrow-circle-right"></i></a>
                    </div>
                </div>
            </div>
        </section>

        <section>
            <div class="col-md-12">
                <div class="row">
                  <div class="col-md-7">
                      <div class="box box-primary post">
                        <div class="box-header ui-sortable-handle">
                            <div class="row row-custom-5">
                                <div class="col-md-3 form-group form-custom-group-10">
                                    <i class="fa fa-paste"></i>
                                    <h3 class="box-title">Bài viết</h3>
                                </div>
                                <div class="col-md-2 col-custom-5 form-group form-custom-group-10">
                                    <input type="text" class="form-control form-sm" placeholder="Tài khoản">
                                </div>
                                <div class="col-md-2 col-custom-5 form-group form-custom-group-10">
                                    <input type="text" class="form-control form-sm" placeholder="Danh mục">
                                </div>
                                <div class="col-md-2 col-custom-5 form-group form-custom-group-10">
                                    <input type="date" class="form-control form-sm" placeholder="Từ ngày">
                                </div>
                                <div class="col-md-2 col-custom-5 form-group form-custom-group-10">
                                    <input type="date" class="form-control form-sm" placeholder="Đến ngày">
                                </div>
                                <div class="col-md-1 form-group text-center form-custom-group-10">
                                    <button class="btn btn-xs btn-primary">
                                        <i class="fa fa-search"></i>
                                    </button>
                                </div>
                            </div>
                        </div>
                        <div class="box-body">
                          <table class="table table-striped tabel hover">
                            <tr>
                                <th>STT</th>
                                <th>Bài viết</th>
                                <th>Tài khoản</th>
                                <th>Lượt xem</th>
                                <th class="text-center">Thời gian truy cập (phút)</th>
                            </tr>

                            <tr v-for="post in posts" :key="post.id">
                                <td>{{ post.id }}</td>
                                <td>{{ post.title }}</td>
                                <td>{{ post.user.name }}</td>
                                <td>{{ post.view }}</td>
                                <td class="text-center">
                                    <span class="mr-2">10</span>

                                    <a @click="linkPost(post.id)" style="color: #000; cursor: pointer" class="mr-2">
                                        <i class="fa fa-eye"></i>
                                    </a>

                                    <a data-toggle="modal" data-target="#updateFastPost" style="color: #4450b7; cursor: pointer">
                                        <i class="fa fa-edit"></i>
                                    </a>
                                </td>
                            </tr>
                          </table>
                        </div>
                      </div>

                      <div class="box box-success chat">
                        <div class="box-header ui-sortable-handle">
                            <i class="fa fa-comments-o"></i>
                            <h3 class="box-title">Bình luận bài viết</h3>
                        </div>
                        <div class="slimScrollDiv"
                            style="position: relative; overflow: hidden; width: auto; height: 250px;">
                            <div class="box-body chat" id="chat-box"
                                style="overflow: hidden; width: auto; height: 250px;">
                                <div class="item">
                                    <img src="https://adminlte.io/themes/AdminLTE/dist/img/user3-128x128.jpg"
                                        alt="user image" class="online">

                                    <p class="message">
                                        <a href="#" class="name">
                                            <small class="text-muted pull-right"><i class="fa fa-clock-o"></i>
                                                2:15</small>
                                            Ngọc Linh
                                        </a>
                                        Anh Thắng ơi gửi em tài liệu với
                                    </p>
                                    <div class="attachment">
                                        <h4>Tài liệu đính kèm:</h4>

                                        <p class="filename">
                                            Tailieu.zip
                                        </p>

                                        <div class="pull-right">
                                            <button type="button"
                                                class="btn btn-primary btn-sm btn-flat">Tải xuống</button>
                                        </div>
                                    </div>
                                </div>
                                <div class="item">
                                    <img src="https://adminlte.io/themes/AdminLTE/dist/img/user1-128x128.jpg"
                                        alt="user image" class="offline">

                                    <p class="message">
                                        <a href="#" class="name">
                                            <small class="text-muted pull-right"><i class="fa fa-clock-o"></i>
                                                5:15</small>
                                            Bùi Nam
                                        </a>
                                        Thế có đi xuống không?
                                    </p>
                                </div>
                            </div>
                            <div class="slimScrollBar"
                                style="background: rgb(0, 0, 0); width: 7px; position: absolute; top: 0px; opacity: 0.4; display: none; border-radius: 7px; z-index: 99; right: 1px; height: 184.911px;">
                            </div>
                            <div class="slimScrollRail"
                                style="width: 7px; height: 100%; position: absolute; top: 0px; display: none; border-radius: 7px; background: rgb(51, 51, 51); opacity: 0.2; z-index: 90; right: 1px;">
                            </div>
                        </div>
                        <div class="box-footer">
                            <div class="input-group">
                                <input class="form-control" placeholder="Type message...">

                                <div class="input-group-btn">
                                    <button type="button" class="btn btn-success"><i
                                            class="fa fa-plus"></i></button>
                                </div>
                            </div>
                        </div>
                      </div>

                      <div class="box box-primary question">
                        <div class="box-header ui-sortable-handle">
                            <i class="fa fa-list"></i>
                            <h3 class="box-title">Câu hỏi chưa trả lời</h3>
                        </div>
                        <div class="box-body">
                          <table class="table table-striped table-hover">
                            <tr>
                                <td style="width: 20px">
                                    <label class="checkbox-success">
                                        <input type="checkbox" id="check" name="remember">
                                        <span></span>
                                    </label>
                                </td>
                                <td style="min-width: 20px">01</td>
                                <td style="min-width: 550px">Những cách chụp ảnh đẹp cùng bạn bè</td>
                                <td>
                                    <a href="#">
                                        <i class="fa fa-edit"></i>
                                    </a>
                                </td>
                            </tr>

                            <tr>
                                <td style="width: 20px">
                                    <label class="checkbox-success">
                                        <input type="checkbox" id="check" name="remember">
                                        <span></span>
                                    </label>
                                </td>
                                <td style="min-width: 20px">02</td>
                                <td style="min-width: 550px">Chấm chấm chấm chấm chấm chấm</td>
                                <td>
                                    <a href="#">
                                        <i class="fa fa-edit"></i>
                                    </a>
                                </td>
                            </tr>
                          </table>
                        </div>
                      </div>

                      <div class="box box-primary todo">
                        <div class="box-header ui-sortable-handle">
                            <i class="fa fa-list"></i>
                            <h3 class="box-title">Những việc cần làm</h3>
                        </div>
                        <div class="box-body">
                          <table class="table table-striped table-hover">
                            <tr>
                                <td style="width: 20px">
                                    <label class="checkbox-success">
                                        <input type="checkbox" id="check" name="remember">
                                        <span></span>
                                    </label>
                                </td>
                                <td style="min-width: 20px">01</td>
                                <td style="min-width: 550px">Việc làm đầu tiên là đi chơi</td>
                                <td>
                                    <a href="#">
                                        <i class="fa fa-edit"></i>
                                    </a>
                                </td>
                            </tr>

                            <tr>
                                <td style="width: 20px">
                                    <label class="checkbox-success">
                                        <input type="checkbox" id="check" name="remember">
                                        <span></span>
                                    </label>
                                </td>
                                <td style="min-width: 20px">02</td>
                                <td style="min-width: 550px">Việc làm thứ hai là nằm xem film</td>
                                <td>
                                    <a href="#">
                                        <i class="fa fa-edit"></i>
                                    </a>
                                </td>
                            </tr>
                          </table>
                        </div>
                      </div>
                  </div>

                  <div class="col-md-5">
                    <div class="box box-primary users">
                      <div class="box-header ui-sortable-handle">
                          <div class="row row-custom-5">
                                <div class="col-md-3 form-group form-custom-group-10">
                                    <i class="fa fa-user"></i>
                                    <h3 class="box-title">Tài khoản</h3>
                                </div>
                                <div class="col-md-3 col-custom-5 form-group form-custom-group-10">
                                    <input type="text" class="form-control form-sm" placeholder="Tài khoản">
                                </div>
                                <div class="col-md-2 col-custom-5 form-group form-custom-group-10">
                                    <input type="date" class="form-control form-sm" placeholder="Từ ngày">
                                </div>
                                <div class="col-md-3 col-custom-5 form-group form-custom-group-10">
                                    <input type="date" class="form-control form-sm" placeholder="Đến ngày">
                                </div>
                                <div class="col-md-1 form-group text-center form-custom-group-10">
                                    <button class="btn btn-xs btn-primary">
                                        <i class="fa fa-search"></i>
                                    </button>
                                </div>
                          </div>
                      </div>
                      <!-- /.box-header -->
                      <div class="box-body">
                          <table class="table table-hover table-striped text-center">
                              <tr>
                                  <th>STT</th>
                                  <th>Tài khoản</th>
                                  <th>Bài viết</th>
                                  <th>Lượt xem</th>
                                  <th>Thời gian truy cập (phút)</th>
                              </tr>

                              <tr>
                                  <td>1</td>
                                  <td>Supper admin</td>
                                  <td>100</td>
                                  <td>3000</td>
                                  <td>10</td>
                              </tr>

                              <tr>
                                  <td>2</td>
                                  <td>dangthang</td>
                                  <td>50</td>
                                  <td>3000</td>
                                  <td>5</td>
                              </tr>
                          </table>
                      </div>
                    </div>

                    <div class="box box-primary file">
                      <div class="box-header ui-sortable-handle">
                        <div class="row row-custom-5">
                            <div class="col-md-5 form-group form-custom-group-10">
                                <i class="fa fa-file"></i>
                                <h3 class="box-title">Hồ sơ</h3>
                            </div>
                            <div class="col-md-3 col-custom-5 form-group form-custom-group-10">
                                <input type="date" class="form-control form-sm" placeholder="Từ ngày">
                            </div>
                            <div class="col-md-3 col-custom-5 form-group form-custom-group-10">
                                <input type="date" class="form-control form-sm" placeholder="Đến ngày">
                            </div>
                            <div class="col-md-1 form-group text-center form-custom-group-10">
                                <button class="btn btn-xs btn-primary">
                                    <i class="fa fa-search"></i>
                                </button>
                            </div>
                        </div>
                      </div>
                      <!-- /.box-header -->
                      <div class="box-body">
                          <table class="table table-hover table-striped text-center">
                                <div class="row">
                                    <div class="col-md-6">
                                        <table class="table table-responsive border-none table-color"> 
                                            <tr>
                                                <td style="vertical-align: middle">Doanh thu</td>
                                                <td>
                                                    <table>
                                                        <tr>
                                                            <td>Đã tiếp nhận</td>
                                                        </tr>
                                                        <tr>
                                                            <td>Chờ kết quả</td>
                                                        </tr>
                                                        <tr>
                                                            <td>Hoàn thành</td>
                                                        </tr>
                                                        <tr>
                                                            <td>Huỷ</td>
                                                        </tr>
                                                    </table>
                                                </td>
                                                <td>
                                                    <table>
                                                        <tr>
                                                            <td>1000</td>
                                                        </tr>
                                                        <tr>
                                                            <td>500</td>
                                                        </tr>
                                                        <tr>
                                                            <td>400</td>
                                                        </tr>
                                                        <tr>
                                                            <td>100</td>
                                                        </tr>
                                                    </table>
                                                </td>
                                            </tr>
                                        </table>
                                    </div>

                                    <div class="col-md-6">
                                        <table class="table table-responsive border-none table-color">
                                            <tr>
                                                <td style="vertical-align: middle">Hồ sơ</td>
                                                <td>
                                                    <table>
                                                        <tr>
                                                            <td>Đã tiếp nhận</td>
                                                        </tr>
                                                        <tr>
                                                            <td>Chờ kết quả</td>
                                                        </tr>
                                                        <tr>
                                                            <td>Hoàn thành</td>
                                                        </tr>
                                                        <tr>
                                                            <td>Huỷ</td>
                                                        </tr>
                                                    </table>
                                                </td>
                                                <td>
                                                    <table>
                                                        <tr>
                                                            <td>1000</td>
                                                        </tr>
                                                        <tr>
                                                            <td>500</td>
                                                        </tr>
                                                        <tr>
                                                            <td>400</td>
                                                        </tr>
                                                        <tr>
                                                            <td>100</td>
                                                        </tr>
                                                    </table>
                                                </td>
                                            </tr>
                                        </table>
                                    </div>
                                </div>
                          </table>
                      </div>
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
    name: 'Dashboard',
    data() {
        return {

        }
    },
    components: {
        
    },
    mounted() {
        this.getCountPost()
        this.getCountUser()
        this.getPosts()
        this.getCategories()
    },
    computed: {
        ...mapState('dashboard', ['countPost', 'countUser']),
        ...mapState('post',['posts']),
        ...mapState('category',['categories']),
    },
    methods: {
        ...mapActions('dashboard', ['getCountPost', 'getCountUser']),
        ...mapActions('post',['getPosts']),
        ...mapActions('category',['getCategories']),
    }
}
</script>
