@extends('adminlte::layouts.app')

@section('htmlheader_title')
	{{ trans('adminlte_lang::message.home') }}
@endsection

@section('contentheader_title', 'Edit Master Category')

@section('main-content')
<div class=" col-md-6">
    <div class="panel panel-primary">
        <div class="panel-heading">Edit</div>
        <div class="panel-body">
            <form method="post" action="/admin/category/{{$data->id}}">
                {{csrf_field()}}
                {{method_field('put')}}
                <table class="table ">
                    <tr>
                        <th>Category</th>
                        <td><input type="text" name="category" class="form-control" value="{{$data->category}}"></td>
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
<div class="col-md-6">
    <table class="table">
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
</div>




@endsection