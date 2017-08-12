@extends('adminlte::layouts.app')

@section('htmlheader_title')
	{{ trans('adminlte_lang::message.home') }}
@endsection


@section('contentheader_title', 'Trash Artikel')

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
      'aoColumnDefs': [{
        'bSortable': false,
        'aTargets': ['nosort']
        }]
    });
</script>
@stop