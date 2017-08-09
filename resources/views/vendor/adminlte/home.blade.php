@extends('adminlte::layouts.app')

@section('htmlheader_title')
	{{ trans('adminlte_lang::message.home') }}
@endsection


@section('main-content')
<br>	       
<div class="col-lg-5 col-md-5 col-md-offset-1">
    <div class="panel panel-primary" style="border-color: #00a65a;">
        <div class="panel-heading" style="background-color: #00a65a; border-color: #00a65a;">
            <div class="row">
                <div class="col-xs-3">
                    <i class="fa fa-list fa-5x"></i>
                </div>
                <div class="col-xs-9 text-right">
                    <div class="huge" style="font-size: 40px;">{{$article}}</div>
                    <div>JUMLAH ARTIKEL AKTIF</div>
                </div>
            </div>
        </div>
        <a href="{{url('/admin/article')}}">
            <div class="panel-footer">
                <span class="pull-left" style="color: #00a65a;">Lihat Rincian</span>
                <span class="pull-right"><i class="fa fa-arrow-circle-right" style="color: #00a65a;"></i></span>
                <div class="clearfix"></div>
            </div>
        </a>
    </div>
</div>  

<div class="col-lg-5 col-md-5">
    <div class="panel panel-primary" style="border-color: #00a65a;">
        <div class="panel-heading" style="background-color: #00a65a; border-color: #00a65a;">
            <div class="row">
                <div class="col-xs-3">
                    <i class="fa fa-users fa-5x"></i>
                </div>
                <div class="col-xs-9 text-right">
                    <div class="huge" style="font-size: 40px;">{{$kk}}</div>
                    <div>JUMLAH KK RW9</div>
                </div>
            </div>
        </div>
        <a href="{{url('/admin/warga')}}">
            <div class="panel-footer">
                <span class="pull-left" style="color: #00a65a;">Lihat Rincian</span>
                <span class="pull-right"><i class="fa fa-arrow-circle-right" style="color: #00a65a;"></i></span>
                <div class="clearfix"></div>
            </div>
        </a>
    </div>
</div>

<div class="col-lg-5 col-md-5 col-md-offset-1">
    <div class="panel panel-primary" style="border-color: #00a65a;">
        <div class="panel-heading" style="background-color: #00a65a; border-color: #00a65a;">
            <div class="row">
                <div class="col-xs-3">
                    <i class="fa fa-trash-o fa-5x"></i>
                </div>
                <div class="col-xs-9 text-right">
                    <div class="huge" style="font-size: 40px;">{{$articleTrash}}</div>
                    <div>JUMLAH ARTIKEL DI SAMPAH</div>
                </div>
            </div>
        </div>
        <a href="{{url('/admin/articletrash')}}">
            <div class="panel-footer">
                <span class="pull-left" style="color: #00a65a;">Lihat Rincian</span>
                <span class="pull-right"><i class="fa fa-arrow-circle-right" style="color: #00a65a;"></i></span>
                <div class="clearfix"></div>
            </div>
        </a>
    </div>
</div>
@endsection