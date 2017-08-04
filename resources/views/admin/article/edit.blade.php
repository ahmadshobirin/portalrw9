@extends('adminlte::layouts.app')

@section('htmlheader_title')
	{{ trans('adminlte_lang::message.home') }}
@endsection

@section('contentheader_title', 'Edit Artikel')

@section('main-content')

<!--<script src="/ckeditor/ckeditor.js"></script>-->
<script src="//cdn.ckeditor.com/4.5.7/standard/ckeditor.js"></script>
<form method="post" action="/admin/article/{{$article->id}}/u" enctype="multipart/form-data">
    {{csrf_field()}}
    {{method_field("put")}}
    <table class="table ">
<!--
        <tr>
            <th>Category</th>
            <td>
                <select name="category" class="form-control">
                    @foreach($category as $list)
                    <option value="{{$list->id}}">{{$list->category}}</option>
                    @endforeach
                </select>
            </td>
        </tr>
        <tr>
            <th>Cover Image</th>
            <td><input type="file" name="images" class="form-control"></td>
        </tr>
-->
        <tr>
            <th>Judul</th>
            <td><input type="text" name="title" class="form-control" value="{{$article->title}}"></td>
        </tr>
        <tr>
            <th>Deskripsi</th>
            <td><input type="text" name="description" class="form-control" value="{{$article->description}}"></td>
        </tr>
        <tr>
            <th>Konten</th>
            <td>
                <textarea class="ckeditor" name="content" id="content">{{$article->content}}</textarea>
            </td>
        </tr>
        <tr>
            <th></th>
            <td><button type="submit" class="btn btn-primary">Simpan</button></td>
        </tr>
    </table>
</form>
@ckeditor('content')


@endsection