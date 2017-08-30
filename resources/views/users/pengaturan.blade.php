@extends('adminlte::layouts.app')

@section('htmlheader_title')
	{{ trans('adminlte_lang::message.home') }}
@endsection

@section('contentheader_title', 'Ubah Profil')

@section('main-content')
<br>
<div class="row">
    <div class="col-md-8 col-md-offset-2">
        <div class="box box-success" style="box-shadow: 3px 3px 7px #888888">
            <div class="box-body" style="padding: 50px;">
            	<div class="pull-left">
                	<a href="{{ url('/home/pengaturan/ubahakun') }}" class="btn btn-lg btn-info btn-flat">Ubah Profil Akun</a>
            	</div>
            	<div class="pull-right">
                	<a href="{{ url('/home/pengaturan/ubahPassword') }}" class="btn btn-lg btn-info btn-flat">Ubah Password</a>
            	</div>
            </div>
        </div>
    </div>
</div>

@endsection