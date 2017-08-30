@extends('adminlte::layouts.app')

@section('htmlheader_title')
	Footer Add
@endsection

@section('contentheader_title', 'Tambah Footer')

@section('main-content')

<!--<script src="/ckeditor/ckeditor.js"></script>-->
<script src="//cdn.ckeditor.com/4.5.7/standard/ckeditor.js"></script>

 <div class="container-fluid spark-screen">
       <div class="row">
            <div class="box box-success" style="box-shadow: 3px 3px 7px #888888">
               <div class="box-body">
                    <b> <h4 style="color: black;padding-left: 5px;"> FORM FOOTER BARU</h4> </b>
                        <form method="post" action="/admin/footer" enctype="multipart/form-data">
                            @include('adminlte::layouts.partials.displayerror')
                            {{csrf_field()}}
                            <table class="table table:hover">
                                <tr>
                                    <th>Judul</th>
                                    <td><input type="text" name="judul" class="form-control" required autofocus></td>
                                </tr>
                                <tr>
                                    <th>Konten</th>
                                    <td>
                                        <textarea class="ckeditor" name="content" id="content" required></textarea>
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