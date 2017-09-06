@extends('adminlte::layouts.app')

@section('htmlheader_title')
    Edit Galery
@endsection

@section('contentheader_title', 'Edit Gambar ')

@section('main-content')

<!--<script src="/ckeditor/ckeditor.js"></script>-->
<script src="//cdn.ckeditor.com/4.5.7/standard/ckeditor.js"></script>

 <div class="container-fluid spark-screen">
       <div class="row">
            <div class="box box-success" style="box-shadow: 3px 3px 7px #888888">
               <div class="box-body">
                    <b> <h4 style="color: black;padding-left: 5px;"> Edit Gambar </h4> </b>
                        <form method="post" action="/admin/gallery/{{$pictures->id}}" enctype="multipart/form-data">
                            @include('adminlte::layouts.partials.displayerror')
                            {{csrf_field()}}
                            {{method_field('put')}}
                            <div class="row">
                                <div class="col-md-12 col-sm-12 col-xs-12">
                                    <div class="form-group">
                                        <label for="">Galeri</label>
                                        <input type="file" name="images" class="">
                                        <img src="{{asset('images/gallery/'.$pictures->images)}}" style="max-width:100px">
                                    </div>
                                </div>
                                <input type="submit" value="Perbaharui" class="btn btn-block btn-primary">
                            </div>

                        </form>
                </div>
            </div>
        </div>
 </div>
    
@endsection