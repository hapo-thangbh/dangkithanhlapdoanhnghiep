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
            <li class="header">MAIN NAVIGATION</li>
            <li class="treeview">
                {{-- <a href="/dashboard">
                    <i class="fa fa-dashboard"></i> <span>Dashboard</span>
                </a> --}}
                <router-link :to="{ name: 'dashboard' }">
                    <i class="fa fa-dashboard" style="color:rgb(230, 186, 16);"></i> <span>Trang chủ</span>
                </router-link>
            </li>
            <li class="treeview">
                <a href="#">
                    <i class="fa fa-cog" style="color:#209219"></i>
                    <span>Quản lý người dùng</span>
                    <span class="pull-right-container">
                        <i class="fa fa-angle-left pull-right"></i>
                    </span>
                </a>
                <ul class="treeview-menu" style="display: none;">
                    <li><router-link :to="{ name: 'listUser' }"><i class="fa fa-users"></i> Danh sách người dùng</router-link></li>
                    <li>
                        <router-link :to="{ name:'profile' }"><i class="fa fa-user" style="color:#ff8000;"></i> <span>Cập nhật thông tin</span></router-link>
                    </li>
                </ul>
                <li>
                    <a href="{{ route('logout') }}" onclick="event.preventDefault();
                        document.getElementById('logout-form').submit();">
                        <i class="fa fa-power-off text-red"></i> <span>Đăng xuất</span>
                    
                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                            @csrf
                        </form>
                    </a>
                </li>
            </li>

            <!--<li class="header">LABELS</li>
             <li><a href="#"><i class="fa fa-circle-o text-red"></i> <span>Important</span></a></li> -->
        </ul>
    </section>
    <!-- /.sidebar -->
</aside>
