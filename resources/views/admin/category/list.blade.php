@extends('adminlte::layouts.app')

@section('htmlheader_title')
	{{ trans('adminlte_lang::message.home') }}
@endsection

@section('contentheader_title', 'Article')

@section('main-content')
	<link rel="stylesheet" href="{{URL::asset('css/datatables.min.css')}}">
 
<link href="//netdna.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css" rel="stylesheet">
<link rel="stylesheet" href="//cdn.datatables.net/1.10.7/css/jquery.dataTables.min.css">

<table class="table table-bordered" id="users-table">
    <table id="table" class="table table-striped table-hover table-responsive">
                <tr>
                    <th>No</th>
		            <th>Category</th>
		            <th>Action</th>
                </tr>
                @foreach($category as $list)
                <tr>
                    <td></td>
                    <td>{{$list->category}}</td>
                    <td>
                    	<form method="post" action="/admin/category/{{$list->id}}">
			                {{csrf_field()}}
			                {{method_field('DELETE')}}
			                <button class="btn btn-danger pull-left">
			                    <span class="fa fa-trash"> delete</span>
			                </button>
			            </form>
			                <a class="btn btn-warning pull-left" href="/admin/category/{{$list->id}}/edit"><span class="fa fa-pencil"> edit</span></a>
                    </td>
                </tr>
                @endforeach
            </table>
</table>

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