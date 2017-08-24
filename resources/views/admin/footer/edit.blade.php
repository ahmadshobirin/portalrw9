@extends('adminlte::layouts.app')

@section('htmlheader_title')
    Footer Add
@endsection

@section('contentheader_title', 'Edit Footer')

@section('main-content')

<!--<script src="/ckeditor/ckeditor.js"></script>-->
<script src="//cdn.ckeditor.com/4.5.7/standard/ckeditor.js"></script>

 <div class="container-fluid spark-screen">
       <div class="row">
            <div class="box box-success" style="box-shadow: 3px 3px 7px #888888">
               <div class="box-body">
                    <b> <h4 style="color: black;padding-left: 5px;"> FORM EDIT FOOTER </h4> </b>
                        <form method="post" action="{{url('/admin/footer/'.$dataFooter->id)}}" enctype="multipart/form-data">
                            @include('adminlte::layouts.partials.displayerror')
                            {{method_field('PUT')}}
                            {{csrf_field()}}
                            <table class="table table:hover">
                                <tr>
                                    <th>Judul</th>
                                    <td><input type="text" name="judul" class="form-control" value="{{$dataFooter->judul}}" required autofocus></td>
                                </tr>
                                <tr>
                                    <th>Konten</th>
                                    <td>
                                        <textarea class="ckeditor" name="content" id="content" required>{{$dataFooter->content}}</textarea>
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