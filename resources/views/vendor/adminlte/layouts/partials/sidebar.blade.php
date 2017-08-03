<!-- Left side column. contains the logo and sidebar -->
<aside class="main-sidebar">

    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">
        <!-- Sidebar Menu -->
        <ul class="sidebar-menu">
        
            <li class="treeview">
                <a href="#"><i class='fa fa-link'></i> <span>Artikel</span> <i class="fa fa-angle-left pull-right"></i></a>
                <ul class="treeview-menu">
                    <li><a href="{{url('/admin/article')}}">List</a></li>
                    <li><a href="{{url('/admin/article/create')}}">Tambah Baru</a></li>
                </ul>
            </li>

            <li class="treeview">
                <a href="{{ url('admin/category') }}"><i class='fa fa-tags'></i> <span>Category</span></a>
            </li>
            
            <li class="treeview">
                <a href="#"><i class='fa fa-link'></i> <span>Kartu Keluarga</span> <i class="fa fa-angle-left pull-right"></i></a>
                <ul class="treeview-menu">
                    <li><a href="{{url('/admin/warga')}}">List</a></li>
                </ul>
            </li>
            <li><a href="#"><i class='fa fa-link'></i> <span>{{ trans('adminlte_lang::message.anotherlink') }}</span></a></li>
        </ul><!-- /.sidebar-menu -->
    </section>
    <!-- /.sidebar -->
</aside>
