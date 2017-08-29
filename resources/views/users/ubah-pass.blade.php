@extends('adminlte::layouts.app')

@section('htmlheader_title')
	{{ trans('adminlte_lang::message.home') }}
@endsection

@section('contentheader_title', 'Ubah Password')

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
                        <label for="">Password Lama</label>
                        <input type="password" name="pass_lama" required="" class="form-control" autofocus>
                    </div>
                    <div class="form-group">
                        <label for="">Password Baru</label>
                        <input type="password" name="pass_baru" id="" class="form-control">
                    </div>
                    <div class="form-group">
                        <label for="">Konfirmasi Password Baru</label>
                        <input type="password" name="konfirmasi_pass" id="" class="form-control">
                    </div>

                    <input type="submit" value="Simpan" class="btn btn-block btn-primary btn-md">
                </form>
            </div>
        </div>
    </div>
</div>

@endsection