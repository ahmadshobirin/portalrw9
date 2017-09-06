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
            @include('admin.partials.displayerror')
                <form method="post" action="{{url('/pengaturan/ubahakun')}}" enctype="multipart/form-data">
                    {{csrf_field()}}
                    @include('adminlte::layouts.partials.displayerror')
                    <div class="form-group">
                        <label for="">Nama</label>
                        <td><input type="text" name="nama" class="form-control"></td>
                    </div>
                    <div class="form-group">
                        <label for="">Bio</label>
                        <textarea class="form-control" name="bio" id="content"></textarea>
                    </div>
                    <div class="form-group">
                        <label for="">Gambar Akun</label>
                        <input type="file" name="images" class="form-control">
                    </div>

                    <input type="submit" value="Simpan" class="btn btn-block btn-primary btn-md">
                </form>
            </div>
        </div>
    </div>
</div>

@endsection