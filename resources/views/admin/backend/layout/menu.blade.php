<!-- Left side column. contains the logo and sidebar -->
<aside class="main-sidebar">
    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">
        <!-- Sidebar user panel -->
        <div class="user-panel">
            <div class="pull-left image">
                <img src="{!! gravatarUrl(Auth::user()->email) !!}" class="img-circle" alt="User Image" />

            </div>
            <div class="pull-left info">
                <p>{{ Auth::user()->first_name . ' ' . Auth::user()->last_name }}</p>

                <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
            </div>
        </div>
        <!-- search form -->
        <form action="#" method="get" class="sidebar-form">
            <div class="input-group">
                <input type="text" name="q" class="form-control" placeholder="Buscar..."/>
              <span class="input-group-btn">
                <button type='submit' name='search' id='search-btn' class="btn btn-flat"><i class="fa fa-search"></i></button>
              </span>
            </div>
        </form>
        <!-- /.search form -->
        <!-- sidebar menu: : style can be found in sidebar.less -->
        <ul class="sidebar-menu">
            <li><a href="{{ url('/admin') }}"> <i class="fa fa-dashboard"></i> <span>Panel de Control</span>
                </a></li>
            <li><a href="{{ url( '/admin/menu') }}"> <i class="fa fa-bars"></i> <span>Menu</span> </a>
            </li>

            

            <li class="treeview"><a href="#"> <i class="fa fa-book"></i> <span>Blog</span>
                    <i class="fa fa-angle-left pull-right"></i> </a>
                <ul class="treeview-menu">
                    <li><a href="{{ url('/admin/article') }}"><i class="fa fa-archive"></i>Articulos</a>
                    </li>
                    <li>
                        <a href="{{ url('/admin/article/create') }}"><i class="fa fa-plus-square"></i> Agregar Articulo</a>
                    </li>
                </ul>
            </li>
            <li class="treeview"><a href="#"> <i class="fa fa-star"></i> <span>Productos</span>
                    <i class="fa fa-angle-left pull-right"></i> </a>
                <ul class="treeview-menu">
                    <li><a href="{{ url('/admin/product') }}"><i class="fa fa-archive"></i> Lista de Productos</a>
                    </li>
                    <li>
                        <a href="{{ url('/admin/product/create') }}"><i class="fa fa-plus-square"></i> Agregar Producto</a>
                    </li>
                </ul>
            </li>
            <li class="treeview"><a href="#"> <i class="fa fa-circle"></i> <span>Marcas</span>
                    <i class="fa fa-angle-left pull-right"></i> </a>
                <ul class="treeview-menu">
                    <li><a href="{{ url('/admin/marca') }}"><i class="fa fa-archive"></i> Lista de Marcas</a>
                    </li>
                    <li>
                        <a href="{{ url('/admin/marca/create') }}"><i class="fa fa-plus-square"></i> Agregar Marca</a>
                    </li>
                </ul>
            </li>
            <li class="treeview"><a href="#"> <i class="fa fa-plus"></i> <span>Historias de Exito</span>
                    <i class="fa fa-angle-left pull-right"></i> </a>
                <ul class="treeview-menu">
                    <li><a href="{{ url('/admin/historia') }}"><i class="fa fa-archive"></i> Lista de Historias</a>
                    </li>
                    <li>
                        <a href="{{ url('/admin/historia/create') }}"><i class="fa fa-plus-square"></i> Agregar Historia</a>
                    </li>
                </ul>
            </li>
            <li class="treeview"><a href="#"> <i class="fa fa-minus"></i> <span>Linea de Tiempo</span>
                    <i class="fa fa-angle-left pull-right"></i> </a>
                <ul class="treeview-menu">
                    <li><a href="{{ url('/admin/linea') }}"><i class="fa fa-archive"></i> Lista de Años</a>
                    </li>
                    <li>
                        <a href="{{ url('/admin/linea/create') }}"><i class="fa fa-plus-square"></i> Agregar Año</a>
                    </li>
                </ul>
          

            
            <li class="treeview"><a href="#"> <i class="fa fa-user"></i> <span>Users</span>
                    <i class="fa fa-angle-left pull-right"></i> </a>
                <ul class="treeview-menu">
                    <li><a href="{{ url('/admin/user') }}"><i class="fa fa-user"></i> All Users</a>
                    </li>
                    <li><a href="{{ url('/admin/role') }}"><i class="fa fa-group"></i> Add Role</a>
                    </li>
                </ul>
            </li>
          
            <li class="treeview"><a href="#"> <i class="fa fa-gear"></i> <span>Configuracion</span>
                <i class="fa fa-angle-left pull-right"></i> </a>
            <ul class="treeview-menu">
                <li><a href="{{ url('/admin/settings') }}"><i class="fa fa-gear"></i> General</a></li>
                <li>
                    <a href="{{ url('/admin/footer') }}"><i class="fa fa-gear"></i> Footer</a>
                </li>
            </ul>
        </li>

            <li >
                <a href="{{ url('/admin/logout') }}"> <i class="fa fa-sign-out"></i> <span>Logout</span> </a>
            </li>
        </ul>
    </section>
    <!-- /.sidebar -->
</aside>
