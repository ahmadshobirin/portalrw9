@extends('adminlte::layouts.app')

@section('htmlheader_title')
	{{ trans('adminlte_lang::message.home') }}
@endsection

@section('contentheader_title', 'New Article')

@section('main-content')

<!--<script src="/ckeditor/ckeditor.js"></script>-->
<script src="//cdn.ckeditor.com/4.5.7/standard/ckeditor.js"></script>

 <div class="container-fluid spark-screen">
       <div class="row">
            <div class="box box-primary" style="box-shadow: 3px 3px 7px #888888">
               <div class="box-body">
               <b> <h4 style="color: black;padding-left: 5px;"> FORM NEW ARTICLE</h4> </b>
            <form method="post" action="/admin/article" enctype="multipart/form-data">
                
                <table class="table table:hover">
                    <tr>
                        <th>Category</th>
                        <td>
                            <select name="category" class="form-control" required>
                                <option selected disabled>--CATEGORY--</option>
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
                    <tr>
                        <th>Title</th>
                        <td><input type="text" name="title" class="form-control" required autofocus></td>
                    </tr>
                    <tr>
                        <th>Description</th>
                        <td><input type="text" name="description" class="form-control" required></td>
                    </tr>
                    <tr>
                        <th>Content</th>
                        <td>
                            <textarea class="ckeditor" name="content" id="content" required>input text here..!</textarea>
                        </td>
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
    
@ckeditor('content')


@endsection