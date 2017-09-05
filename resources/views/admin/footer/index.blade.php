@extends('adminlte::layouts.app')

@section('htmlheader_title')
	Footer
@endsection

@section('contentheader_title', 'Footer')

@section('main-content')

<link rel="stylesheet" href="{{URL::asset('css/datatables.min.css')}}">

<div class="">
    <a href="{{url('/admin/footer/create')}}" class="btn btn-success btn-md">
        <i class="fa fa-plus"></i> Tambah Data
    </a>
    <a href="{{url('/admin/footertrash')}}" class="btn btn-danger btn-md">
        <i class="fa fa-trash"></i> Lihat Data Sampah
    </a>
</div>
<br>    

    <table class="table table-striped table-hover table-responsive" id="table">
        <thead>
            <tr>
                <th>No.</th>
                <th>Judul</th>
                <th>Isi</th>
                <th class="nosort">Aksi</th>
            </tr>
        </thead>
        <tbody>
        <?php $i=1 ?>
            @foreach($footers as $footer)
                <tr>
                    <td>{{$i++}}</td>
                    <td>{{$footer->judul}}</td>
                    <td>{{str_limit($footer->content,160,'...')}}</td>
                    <td>
                        <form method="post" action="{{url('admin/footer/'.$footer->id)}}">
                            {{csrf_field()}}
                            {{method_field('DELETE')}}
                            <button class="btn btn-danger pull-left btn-sm">
                                <span class="fa fa-trash"> Hapus</span>
                            </button>
                        </form>
                        <a class="btn btn-warning pull-left btn-sm" href="{{url('admin/footer/'.$footer->id.'/edit')}}"><span class="fa fa-pencil"> Ubah</span></a>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>

@stop
@section('scripts')

<script type="text/javascript" src="{{URL::asset('/js/jquery.dataTables.min.js')}}"></script>
<script type="text/javascript" src="{{URL::asset('/js/datatables.bootstrap.min.js')}}"></script>

<script>
    $('#table').DataTable({
      'paging'      : true,
      'lengthChange': true,
      'searching'   : true,
      'ordering'    : true,
      'info'        : true,
      'autoWidth'   : false,
      "language": {
        "emptyTable"    : "Data Kosong",
        "info"          : "Menampilkan _START_ sampai _END_ dari _TOTAL_ data",
        "infoEmpty"     : "Menampilkan 0 sampai 0 dari 0 data",
        "infoFiltered"  : "(disaring dari _MAX_ total data)",
        "search"        : "Cari:",
        "lengthMenu"    : "Tampilkan _MENU_ Data",
        "zeroRecords"   : "Tidak Ada Data yang Ditampilkan",
        "oPaginate"     : {
                            "sFirst":    "Awal",
                            "sLast":    "Akhir",
                            "sNext":    "Selanjutnya",
                            "sPrevious": "Sebelumnya"
                         },
                },
      'aoColumnDefs': [{
        'bSortable': false,
        'aTargets': ['nosort']
        }]
    });
</script>
@stop