<aside class="main-sidebar">
    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">
        <!-- Sidebar user panel -->
        <div class="user-panel">
            <div class="pull-left image">
                <img src="{{ asset('images/default.jpg') }}" class="img-circle" alt="User Image">
            </div>
            <div class="pull-left info">
                <p>Supper admin</p>
            </div>
        </div>
        <!-- sidebar menu: : style can be found in sidebar.less -->
        <ul class="sidebar-menu" data-widget="tree">
            <li class="header">ADMIN</li>
            <li class="treeview">
                <router-link :to="{ name: 'dashboard' }">
                    <i class="fa fa-dashboard"></i> <span>Trang chủ</span>
                </router-link>
            </li>
            <li><router-link :to="{ name: 'listPost' }"><i class="fa fa-paste"></i> Bài viết</router-link></li>
            <li><router-link :to="{ name: 'listCategory' }"><i class="fa fa-book"></i> Danh mục</router-link></li>
            <li><router-link :to="{ name: 'comment' }"><i class="fa fa-comment-o"></i> Bình luận</router-link></li>
            <li><router-link :to="{ name: 'listInbox' }"><i class="fa fa-envelope"></i> Hộp thư</router-link></li>
            @can('admin')
            <li><router-link :to="{ name:'listProfile' }"><i class="fa fa-info-circle"></i> Hồ sơ</router-link></li>
            @endcan
            <li><router-link :to="{ name: 'listSocialAccount' }"><i class="fa fa-user"></i> Tài khoản xã hội</router-link></li>
            <li><router-link :to="{ name: 'listAdsPosition' }"><i class="fa fa-map-marker"></i> Vị trí quảng cáo</router-link></li>
            <li><router-link :to="{ name: 'listDocument' }"><i class="fa fa-file"></i> Tài liệu</router-link></li>

            @can('admin')
            <li><router-link :to="{ name: 'listUser' }"><i class="fa fa-users"></i> Tài khoản</router-link></li>
            @endcan
            <!-- <li>
                <a href="{{ route('admin.logout') }}" id="logout">
                    <i class="fa fa-power-off"></i> <span>Đăng xuất</span>
                </a>
            </li> -->

            <!--<li class="header">LABELS</li>
             <li><a href="#"><i class="fa fa-circle-o text-red"></i> <span>Important</span></a></li> -->
        </ul>
    </section>
    <!-- /.sidebar -->
</aside>
