<!-- Left side column. contains the logo and sidebar -->
<aside class="main-sidebar">
    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">
        <!-- Sidebar user panel -->
        <div class="user-panel">
            <div class="pull-left image">
                <img src="{!! gravatarUrl(Sentinel::getUser()->email) !!}" class="img-circle" alt="User Image" />

            </div>
            <div class="pull-left info">
                <p>{{ Sentinel::getUser()->first_name . ' ' . Sentinel::getUser()->last_name }}</p>

                <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
            </div>
        </div>
        <!-- search form -->
        <form action="#" method="get" class="sidebar-form">
            <div class="input-group">
                <input type="text" name="q" class="form-control" placeholder="Search..."/>
              <span class="input-group-btn">
                <button type='submit' name='search' id='search-btn' class="btn btn-flat"><i class="fa fa-search"></i></button>
              </span>
            </div>
        </form>
        <!-- /.search form -->
        <!-- sidebar menu: : style can be found in sidebar.less -->
        <ul class="sidebar-menu">
            <li class="{{ URL::route('admin') }}"><a href="{{ url('/admin') }}"> <i class="fa fa-dashboard"></i> <span>Dashboard</span>
                </a></li>
            <li class="{{ URL::route('admin/menu*') }}"><a href="{{ url( '/admin/menu') }}"> <i class="fa fa-bars"></i> <span>Menu</span> </a>
            </li>
            <li class="treeview {{ URL::route('admin/news*') }}"><a href="#"> <i class="fa fa-th"></i> <span>News</span>
                    <i class="fa fa-angle-left pull-right"></i> </a>
                <ul class="treeview-menu">
                    <li><a href="{{ url('/admin/news') }}"><i class="fa fa-calendar"></i> All News</a>
                    </li>
                    <li><a href="{{ url('/admin/news/create') }}"><i class="fa fa-plus-square"></i> Add News</a>
                    </li>
                </ul>
            </li>
            <li class="treeview {{ URL::route('admin/page*') }}"><a href="#"> <i class="fa fa-bookmark"></i> <span>Pages</span>
                    <i class="fa fa-angle-left pull-right"></i> </a>
                <ul class="treeview-menu">
                    <li><a href="{{ url('/admin/page') }}"><i class="fa fa-folder"></i> All Pages</a>
                    </li>
                    <li><a href="{{url('/admin/page/create') }}"><i class="fa fa-plus-square"></i> Add Page</a>
                    </li>
                </ul>
            </li>
            <li class="treeview {{ URL::route(['admin/photo-gallery*', 'admin/video*']) }}"><a href="#"> <i class="fa fa-picture-o"></i> <span>Galleries</span>
                    <i class="fa fa-angle-left pull-right"></i> </a>
                <ul class="treeview-menu">
                    <li>
                        <a href="{{ url('/admin/photo-gallery') }}"><i class="fa fa-camera"></i> Photo Galleries</a>
                    </li>
                    <li>
                        <a href="{{ url('/admin/video') }}"><i class="fa fa-play-circle-o"></i> Video Galleries</a>
                    </li>

                </ul>
            </li>
            <li class="treeview {{ URL::route('admin/article*') }}"><a href="#"> <i class="fa fa-book"></i> <span>Articles</span>
                    <i class="fa fa-angle-left pull-right"></i> </a>
                <ul class="treeview-menu">
                    <li><a href="{{ url('/admin/article') }}"><i class="fa fa-archive"></i> All Articles</a>
                    </li>
                    <li>
                        <a href="{{ url('/admin/article/create') }}"><i class="fa fa-plus-square"></i> Add Article</a>
                    </li>
                </ul>
            </li>
            <li class="treeview {{ URL::route('admin/product*') }}"><a href="#"> <i class="fa fa-star"></i> <span>Productos</span>
                    <i class="fa fa-angle-left pull-right"></i> </a>
                <ul class="treeview-menu">
                    <li><a href="{{ url('/admin/product') }}"><i class="fa fa-archive"></i> Lista de Productos</a>
                    </li>
                    <li>
                        <a href="{{ url('/admin/article/create') }}"><i class="fa fa-plus-square"></i> Agregar Producto</a>
                    </li>
                </ul>
            </li>
            <li class="treeview {{ URL::route('admin/slider*') }}"><a href="#"> <i class="fa fa-tint"></i> <span>Plugins</span>
                    <i class="fa fa-angle-left pull-right"></i> </a>
                <ul class="treeview-menu">
                    <li><a href="{{ url('/admin/slider') }}"><i class="fa fa-toggle-up"></i> Sliders</a>
                    </li>
                </ul>
            </li>
            <li class="treeview {{ URL::route('admin/project*') }}"><a href="#"> <i class="fa fa-gears"></i> <span>Projects</span>
                    <i class="fa fa-angle-left pull-right"></i> </a>
                <ul class="treeview-menu">
                    <li><a href="{{ url('/admin/project') }}"><i class="fa fa-gear"></i> All Projects</a>
                    </li>
                    <li>
                        <a href="{{ url('/admin/project/create') }}"><i class="fa fa-plus-square"></i> Add Project</a>
                    </li>
                </ul>
            </li>
            <li class="treeview {{ URL::route('admin/faq*') }}"><a href="#"> <i class="fa fa-question"></i> <span>Faqs</span>
                    <i class="fa fa-angle-left pull-right"></i> </a>
                <ul class="treeview-menu">
                    <li><a href="{{ url('/admin/faq') }}"><i class="fa fa-question-circle"></i> All Faq</a></li>
                    <li>
                        <a href="{{ url('/admin/faq/create') }}"><i class="fa fa-plus-square"></i> Add Faq</a>
                    </li>
                </ul>
            </li>
            <li class="treeview {{ URL::route(['admin/user*', 'admin/group*']) }}"><a href="#"> <i class="fa fa-user"></i> <span>Users</span>
                    <i class="fa fa-angle-left pull-right"></i> </a>
                <ul class="treeview-menu">
                    <li><a href="{{ url('/admin/user') }}"><i class="fa fa-user"></i> All Users</a>
                    </li>
                    <li><a href="{{ url('/admin/role') }}"><i class="fa fa-group"></i> Add Role</a>
                    </li>
                </ul>
            </li>
            <li class="treeview {{ URL::route(['admin/logs*', 'admin/form-post']) }}"><a href="#"> <i class="fa fa-thumb-tack"></i> <span>Records</span>
                    <i class="fa fa-angle-left pull-right"></i> </a>
                <ul class="treeview-menu">
                    <li><a target="_blank" href="{{ url('/admin/logs') }}"><i class="fa fa-save"></i> Log</a></li>
                    <li>
                        <a href="{{ url('/admin/form-post') }}"><i class="fa fa-envelope"></i> Form Post</a>
                    </li>
                </ul>
            </li>
            <li class="{{ URL::route('admin/settings*') }}">
                <a href="{{ url('/admin/settings') }}"> <i class="fa fa-gear"></i> <span>Settings</span> </a>
            </li>
            <li class="{{ URL::route('admin/logout*') }}">
                <a href="{{ url('/admin/logout') }}"> <i class="fa fa-sign-out"></i> <span>Logout</span> </a>
            </li>
        </ul>
    </section>
    <!-- /.sidebar -->
</aside>
