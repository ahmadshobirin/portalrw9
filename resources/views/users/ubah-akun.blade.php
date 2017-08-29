@extends('adminlte::layouts.app')

@section('htmlheader_title')
	{{ trans('adminlte_lang::message.home') }}
@endsection

@section('contentheader_title', 'Ubah Profil Akun')

@section('main-content')
<br>
<div class="row">
    <div class="col-md-8 col-md-offset-2">
        <div class="box box-success" style="box-shadow: 3px 3px 7px #888888">
            <div class="box-body">
                <form method="post" action="{{url('/admin/pengaturan')}}">
                    {{csrf_field()}}
                    @include('adminlte::layouts.partials.displayerror')
                    <div class="form-group">
                        <label for="">Nama</label>
                        <td><input type="text" name="nama" class="form-control"></td>
                    </div>
                    <div class="form-group">
                        <label for="">Status</label>
                        <textarea class="ckeditor" name="status" id="content"></textarea>
                    </div>
                    <div class="form-group">
                        <label for="">Gambar Akun</label>
                        <input type="file" name="images" class="form-control">
                        <img src="{{-- {{asset('images/'.$article->images)}} --}}" style="max-width:100px">
                    </div>

                    <input type="submit" value="Simpan" class="btn btn-block btn-primary btn-md">
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