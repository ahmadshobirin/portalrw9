@extends('adminlte::layouts.app')

@section('htmlheader_title')
	{{ trans('adminlte_lang::message.home') }}
@endsection


@section('contentheader_title', 'Sampah Kategori')

@section('main-content')
	<link rel="stylesheet" href="{{URL::asset('css/datatables.min.css')}}">

<br>    
<div class="">
    <table class="table table-striped table-hover table-responsive" id="table">
        <thead>
            <tr>
                <th>No</th>
                <th>Kategori</th>
                <th class="nosort">Aksi</th>
            </tr>
        </thead>

        <tbody>
            <?php $i=1 ?>
            @foreach($item as $list)
            <tr>
                <td>{{$i++ }}</td>
                <td>{{$list->category}}</td>
                <td>
                    <a href="{{url('/admin/category/restore/'.$list->id)}}" class="btn btn-success btn-md">
                        Kembalikan Data
                    </a>
                    <a href="{{url('/admin/category/permanent/delete/'.$list->id)}}" class="btn btn-danger btn-md">
                        Hapus Permanen
                    </a>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
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
        "emptyTable":     "Data Kosong",
        "info":           "Menampilkan _START_ sampai _END_ dari _TOTAL_ data",
        "infoEmpty":      "Menampilkan 0 sampai 0 dari 0 data",
        "search":         "Cari:",
        "lengthMenu":     "Tampilkan _MENU_ Data",
        "oPaginate": {
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