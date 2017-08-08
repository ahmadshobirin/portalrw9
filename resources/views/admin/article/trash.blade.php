@extends('adminlte::layouts.app')

@section('htmlheader_title')
	{{ trans('adminlte_lang::message.home') }}
@endsection

@section('contentheader_title', 'Trash')

@section('main-content')

<link rel="stylesheet" href="{{URL::asset('css/datatables.min.css')}}">

<br>    

    <table class="table table-striped table-hover table-responsive" id="table">
        <thead>
            <tr>
                <th>No.</th>
                <th>Judul</th>
                <th>Sampul</th>
                <th>Kategori</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
        <?php $i=1 ?>
            @foreach($item as $list)
                <tr>
                    <td>{{ $i++ }}</td>
                    <td>{{$list->title}}</td>
                    <td><img src="/storage/{{$list->images}}" style="max-width:100px"></td>
                    <td>{{$list->category}}</td>
                    <td>
                        <a href="{{url('/admin/article/restore/'.$list->id)}}" class="btn btn-success btn-md">
                            Kembalikan Data
                        </a>
                        <a href="{{url('/admin/article/permanent/delete/'.$list->id)}}" class="btn btn-danger btn-md">
                            Hapus
                        </a>
                    </td>
                </tr>
                @endforeach
        </tbody>
    </table>

@ckeditor('content')

<script type="text/javascript" src="{{URL::asset('/js/jquery.js')}}"></script>
<script type="text/javascript" src="{{URL::asset('/js/bootstrap.min.js')}}"></script>
<script type="text/javascript" src="{{URL::asset('/js/jquery.dataTables.min.js')}}"></script>
<script type="text/javascript" src="{{URL::asset('/js/datatables.bootstrap.min.js')}}"></script>

<script>
    $('#table').DataTable({
      'paging'      : true,
      'lengthChange': false,
      'searching'   : false,
      'ordering'    : true,
      'info'        : true,
      'autoWidth'   : false
    });
</script>

@endsection