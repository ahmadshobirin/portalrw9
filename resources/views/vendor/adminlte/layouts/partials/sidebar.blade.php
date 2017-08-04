<!-- Left side column. contains the logo and sidebar -->
<aside class="main-sidebar">

    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">
        <!-- Sidebar Menu -->
        <ul class="sidebar-menu">
        
            <li class="treeview">
                <a href="#"><i class='fa fa-th-list'></i> <span>Artikel</span> <i class="fa fa-angle-left pull-right"></i></a>
                <ul class="treeview-menu">
                    <li style="padding-left: 20px;"><a href="{{url('/admin/article')}}"><i class='fa fa-file-text-o'></i>Semua Artikel</a></li>
                    <li style="padding-left: 20px;"><a href="{{url('/admin/article/create')}}"><i class='fa fa-pencil'></i>Tambah Baru</a></li>
                </ul>
            </li>

            <li class="treeview">
                <a href="#"><i class='fa fa-tag'></i> <span>Kategori</span> <i class="fa fa-angle-left pull-right"></i></a>
                <ul class="treeview-menu">
                    <li style="padding-left: 20px;"><a href="{{ url('/admin/category') }}"><i class='fa fa-tags'></i>Kategori Artikel</a></li>
                    <li style="padding-left: 20px;"><a href="{{url('/admin/category/create')}}"><i class='fa fa-pencil'></i>Tambah Baru</a></li>
                </ul>
            </li>
            
            <li class="treeview">
                <a href="#"><i class='fa fa-address-book'></i> <span>Kartu Keluarga</span> <i class="fa fa-angle-left pull-right"></i></a>
                <ul class="treeview-menu">
                    <li style="padding-left: 20px;"><a href="{{url('/admin/warga')}}"><i class='fa fa-files-o'></i>Semua KK</a></li>
                    <li style="padding-left: 20px;"><a href="{{url('/admin/warga/create')}}"><i class='fa fa-pencil'></i>Tambah Baru</a></li>
                </ul>
            </li>
             <li><a href="{{url('admin/detailkk/create')}}"><i class='fa fa-address-card'></i> <span>Tambah Detail KK</span></a></li> 
        </ul><!-- /.sidebar-menu -->
    </section>
    <!-- /.sidebar -->
</aside>
