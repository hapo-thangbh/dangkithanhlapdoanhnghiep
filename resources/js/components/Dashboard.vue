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
                            <p>New Orders</p>
                        </div>
                        <div class="icon"><i class="fa fa-shopping-cart"></i></div>
                        <a href="#" class="small-box-footer">Xem thêm <i class="fa fa-arrow-circle-right"></i></a>
                    </div>
                </div>
                <div class="col-lg-3 col-xs-6">
                    <div class="small-box bg-green">
                        <div class="inner">
                            <h3>{{ countPost }}</h3>
                            <p>Bài viết</p>
                        </div>
                        <div class="icon">
                            <i class="fa fa-newspaper-o"></i>
                        </div>
                        <a href="#" class="small-box-footer">Xem thêm <i class="fa fa-arrow-circle-right"></i></a>
                    </div>
                </div>
                <div class="col-lg-3 col-xs-6">
                    <div class="small-box bg-yellow">
                        <div class="inner">
                            <h3>{{ countUser }}</h3>
                            <p>Tài khoản</p>
                        </div>
                        <div class="icon">
                            <i class="fa fa-user-plus"></i>
                        </div>
                        <router-link :to="{ name: 'listUser' }" class="small-box-footer">
                            Xem thêm <i class="fa fa-arrow-circle-right"></i>
                        </router-link>
                    </div>
                </div>
                <div class="col-lg-3 col-xs-6">
                    <div class="small-box bg-red">
                        <div class="inner">
                            <h3>0</h3>
                            <p>Unique Visitors</p>
                        </div>
                        <div class="icon">
                            <i class="fa fa-pie-chart"></i>
                        </div>
                        <a href="#" class="small-box-footer">Xem thêm <i class="fa fa-arrow-circle-right"></i></a>
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
                            <i class="fa fa-paste"></i>
                            <h3 class="box-title">Bài viết</h3>
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

                            <tr>
                              <td>01</td>
                              <td>Bài viết 01</td>
                              <td>user01</td>
                              <td>100,000</td>
                              <td class="text-center">3</td>
                            </tr>

                            <tr>
                              <td>02</td>
                              <td>Bài viết 02</td>
                              <td>user02</td>
                              <td>50,000</td>
                              <td class="text-center">4</td>
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
                                            Mike Doe
                                        </a>
                                        I would like to meet you to discuss the latest news about
                                        the arrival of the new theme. They say it is going to be one the
                                        best themes on the market
                                    </p>
                                    <div class="attachment">
                                        <h4>Attachments:</h4>

                                        <p class="filename">
                                            Theme-thumbnail-image.jpg
                                        </p>

                                        <div class="pull-right">
                                            <button type="button"
                                                class="btn btn-primary btn-sm btn-flat">Open</button>
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
                                            Alexander Pierce
                                        </a>
                                        I would like to meet you to discuss the latest news about
                                        the arrival of the new theme. They say it is going to be one the
                                        best themes on the market
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
                              <th>STT</th>
                              <th style="width: 550px">Bài viết</th>
                              <th>Hành động</th>
                            </tr>

                            <tr>
                              <td>01</td>
                              <td>Bài viết 01</td>
                              <td>
                                <button class="btn btn-default">
                                  <i class="fa fa-edit"></i>
                                </button>
                              </td>
                            </tr>

                            <tr>
                              <td>02</td>
                              <td>Bài viết 02</td>
                              <td>
                                <button class="btn btn-default">
                                  <i class="fa fa-edit"></i>
                                </button>
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
                              <th>STT</th>
                              <th style="width: 550px">Bài viết</th>
                              <th>Hành động</th>
                            </tr>

                            <tr>
                              <td>01</td>
                              <td>Bài viết 01</td>
                              <td>
                                <button class="btn btn-default">
                                  <i class="fa fa-edit"></i>
                                </button>
                              </td>
                            </tr>

                            <tr>
                              <td>02</td>
                              <td>Bài viết 02</td>
                              <td>
                                <button class="btn btn-default">
                                  <i class="fa fa-edit"></i>
                                </button>
                              </td>
                            </tr>
                          </table>
                        </div>
                      </div>
                  </div>

                  <div class="col-md-5">
                    <div class="box box-primary users">
                      <div class="box-header ui-sortable-handle">
                          <i class="fa fa-user"></i>
                          <h3 class="box-title">Tài khoản</h3>
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
                          <i class="fa fa-file"></i>
                          <h3 class="box-title">Hồ sơ</h3>
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
    mounted() {
        this.getCountPost()
        this.getCountUser()
    },
    computed: {
        ...mapState('dashboard', ['countPost', 'countUser']),
    },
    methods: {
        ...mapActions('dashboard', ['getCountPost', 'getCountUser']),
    }
}
</script>
