<aside class="main-sidebar">
    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar" id="app">
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
            <li><router-link :to="{ name: 'listUser' }"><i class="fa fa-users"></i> Người dùng</router-link></li>
            <li><router-link :to="{ name: 'listPost' }"><i class="fa fa-paste"></i> Bài viết</router-link></li>
            <li>
                <a href="{{ route('logout') }}" onclick="event.preventDefault();
                    document.getElementById('logout-form').submit();">
                    <i class="fa fa-power-off"></i> <span>Đăng xuất</span>
                
                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                        @csrf
                    </form>
                </a>
            </li>

            <!--<li class="header">LABELS</li>
             <li><a href="#"><i class="fa fa-circle-o text-red"></i> <span>Important</span></a></li> -->
        </ul>
    </section>
    <!-- /.sidebar -->
</aside>
