@extends('adminlte::layouts.app')

@section('htmlheader_title')
	{{ trans('adminlte_lang::message.home') }}
@endsection


@section('contentheader_title', 'Kategori Artikel')

@section('main-content')
	<link rel="stylesheet" href="{{URL::asset('css/datatables.min.css')}}">

<button type="button" class="btn btn-primary"><i class="fa fa-plus"></i> Tambah data</button> 
<br>
<br>

<div class="col-lg-6">
<table class="table table-striped table-hover table-responsive" id="table">
            <thead>
                <tr>
                    <th>No</th>
    		            <th>Kategori</th>
    		            <th>Aksi</th>
                </tr>
            </thead>

            <tbody>
                @foreach($category as $list)
                <tr>
                    <td></td>
                    <td>{{$list->category}}</td>
                    <td>
                    	<form method="post" action="/admin/category/{{$list->id}}">
			                {{csrf_field()}}
			                {{method_field('DELETE')}}
			                <button class="btn btn-danger pull-left">
			                    <span class="fa fa-trash"> Hapus</span>
			                </button>
			            </form>
			                <a class="btn btn-warning pull-left" href="/admin/category/{{$list->id}}/edit"><span class="fa fa-pencil"> Ubah</span></a>
                    </td>
                </tr>
                @endforeach
            </tbody>
</table>
</div>

@ckeditor('content')

<script src="//code.jquery.com/jquery.js"></script>
       <!-- DataTables -->
<script src="//cdn.datatables.net/1.10.7/js/jquery.dataTables.min.js"></script>
        <!-- Bootstrap JavaScript -->
<script src="//netdna.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>
        <!-- App scripts -->

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