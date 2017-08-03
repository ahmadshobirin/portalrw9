@extends('adminlte::layouts.app')

@section('htmlheader_title')
	{{ trans('adminlte_lang::message.home') }}
@endsection

@section('contentheader_title', 'Master Category')

@section('main-content')


 <div class="col-md-6" >
    <div class="panel panel-primary" style="position: absolute;left: 100px;top: 50px;width: 500px;height: 200px;box-shadow: 7px 7px 5px #888888;">
        <div class="panel-heading">Add new</div>
        <div class="panel-body">
            <form method="post" action="/admin/category">
                {{csrf_field()}}
                <table class="table ">
                    <tr>
                        <th>Category</th>
                        <td><input type="text" name="category" class="form-control" autofocus></td>
                    </tr>
                    <tr>
                        <th></th>
                        <td><button type="submit" class="btn btn-primary">Simpan</button></td>
                    </tr>
                </table>
            </form>
        </div>
    </div>
</div>




<!--<table class="table table-bordered" id="users-table">
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
</div> -->


@endsection