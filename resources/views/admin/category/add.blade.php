@extends('adminlte::layouts.app')

@section('htmlheader_title')
	{{ trans('adminlte_lang::message.home') }}
@endsection

@section('contentheader_title', 'Kategori')

@section('main-content')

<div class="col-lg-6">
<br>
<div class="container-fluid">
       <div class="row">
            <div class="box box-primary" style="box-shadow: 3px 3px 7px #888888">
               <div class="box-body">
            
            <form method="post" action="/admin/category">
                {{csrf_field()}}
                @include('adminlte::layouts.partials.displayerror')
                <table class="table ">
                    <tr>
                        <th>Kategori</th>
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