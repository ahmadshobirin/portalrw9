@extends('adminlte::layouts.app')

@section('htmlheader_title')
	Footer Trash
@endsection

@section('contentheader_title', 'Footer Trash')

@section('main-content')

<link rel="stylesheet" href="{{URL::asset('css/datatables.min.css')}}">

<div class="">
    <a href="{{url('/admin/footer/create')}}" class="btn btn-success btn-md">
        <i class="fa fa-plus"></i> Tambah Data
    </a>
    <a href="{{url('/admin/footer')}}" class="btn btn-info btn-md">
        <i class="fa fa-th-large"></i> Lihat Data 
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
            <?php $i=1;?>
                @foreach($trash as $list)
                    <tr>
                        <td>{{$i++}}</td>
                        <td>{{$list->judul}}</td>
                        <td>{{$list->content}}</td>
                        <td>
                            <a href="{{url('/admin/footer/restore/'.$list->id)}}" class="btn btn-success btn-md">
                            Kembalikan Data
                            </a>
                            <a href="{{url('/admin/footer/permanent/delete/'.$list->id)}}" class="btn btn-danger btn-md" onclick="return confirm('Hapus Footer Selamanya ?')">
                            Hapus Permanen
                            </a>
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