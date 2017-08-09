@extends('adminlte::layouts.app')

@section('htmlheader_title')
	{{ trans('adminlte_lang::message.home') }}
@endsection


@section('main-content')
<br>	       
<div class="col-lg-5 col-md-5 col-md-offset-1">
    <div class="small-box bg-aqua">
        <div class="inner">
            <h3>{{$article}}</h3>
            <p>JUMLAH ARTIKEL AKTIF</p>
        </div>
        <div class="icon">
            <i class="fa fa-arrow-circle-right"></i></span>
        </div>
        <a href="{{url('/admin/article')}}" class="small-box-footer" >More info <i class="fa fa-arrow-circle-right"></i></a>
    </div>
</div>

<div class="col-lg-5 col-md-5">
    <div class="small-box bg-aqua">
        <div class="inner">
            <h3>{{$kk}}</h3>
            <p>JUMLAH KK RW9</p>
        </div>
        <div class="icon"><i class="fa fa-users"></i></div>
        <a href="{{url('/admin/warga')}}" class="small-box-footer" >More info <i class="fa fa-arrow-circle-right"></i></a>
    </div>
</div>

<div class="col-lg-6 col-md-6 col-md-offset-3">
    <div class="small-box bg-yellow">
        <div class="inner">
            <h3>{{$articleTrash}}</h3>
            <p>JUMLAH ARTIKEL DI SAMPAH</p>
        </div>
        <div class="icon">
            <i class="fa fa-trash-o"></i>
        </div>
        <a href="{{url('/admin/articletrash')}}" class="small-box-footer" >More info <i class="fa fa-arrow-circle-right"></i></a>
    </div>
</div>
@endsection