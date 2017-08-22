@extends('adminlte::layouts.app')

@section('htmlheader_title')
	Tambah Slider
@endsection

@section('contentheader_title', 'Tambah Gambar di Slider')

@section('main-content')

<!--<script src="/ckeditor/ckeditor.js"></script>-->
<script src="//cdn.ckeditor.com/4.5.7/standard/ckeditor.js"></script>

 <div class="container-fluid spark-screen">
       <div class="row">
            <div class="box box-success" style="box-shadow: 3px 3px 7px #888888">
               <div class="box-body">
                    <b> <h4 style="color: black;padding-left: 5px;"> FORM TAMBAH GAMBAR SLIDER BARU</h4> </b>
                        <form method="post" action="/admin/slider" enctype="multipart/form-data">
                            @include('adminlte::layouts.partials.displayerror')
                            {{csrf_field()}}
                            {{method_field('POST')}}
                            <div class="row">
                                <div class="col-md-12 col-sm-12 col-xs-12">
                                    <div class="form-group">
                                        <label for="">Slider</label>
                                        <input type="file" name="images" class="" required="">
                                    </div>
                                </div>
                                <div class="col-md-12 col-sm-12 col-xs-12">
                                    <div class="form-group">
                                        <label for="">Deskirpsi Slider</label>
                                        <textarea class="form-control" name="description" required placeholder="deskripsi..."></textarea>    
                                    </div>
                                </div>
                                <div class="col-md-12 col-sm-12 col-xs-12">
                                    <div class="form-group">
                                        <label for="">Link</label>
                                        <input type="text" class="form-control" name="link" placeholder="link...">
                                    </div>
                                <input type="submit" value="Simpan" class="btn btn-block btn-primary">
                                </div>
                            </div>

                        </form>
                </div>
            </div>
        </div>
 </div>
    
@endsection