@extends('adminlte::layouts.app')

@section('htmlheader_title')
	Tambah Album
@endsection

@section('contentheader_title', 'Tambah Album')

@section('main-content')
 <div class="container-fluid spark-screen">
       <div class="row">
            <div class="box box-success" style="box-shadow: 3px 3px 7px #888888">
               <div class="box-body">
                    <b> <h4 style="color: black;padding-left: 5px;"> FORM ALBUM BARU</h4> </b>
                        <form method="post" action="{{url('/admin/gallery/createalbum')}}" enctype="multipart/form-data">
                            @include('adminlte::layouts.partials.displayerror')
                            {{csrf_field()}}
                            <table class="table table:hover">  
                                <tr>
                                    <th>Judul Album</th>
                                    <td><input type="text" name="nama" class="form-control" required autofocus></td>
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

@endsection

@section('scripts')
    {{-- <script src="//cdn.ckeditor.com/4.5.7/standard/ckeditor.js"></script> --}}
    <script src="/vendor/unisharp/laravel-ckeditor/ckeditor.js"></script>
    <script>
        CKEDITOR.replace( 'content', {
            filebrowserImageBrowseUrl: '/laravel-filemanager?type=Images',
            filebrowserBrowseUrl: '/laravel-filemanager?type=Files',
        });
    </script>
@endsection