@extends('adminlte::layouts.app')

@section('htmlheader_title')
	{{ trans('adminlte_lang::message.home') }}
@endsection


@section('main-content')
<br>	       
<div class="col-lg-5 col-md-5 col-md-offset-1">
<<<<<<< HEAD
    <div class="small-box bg-aqua">
        <div class="inner">
            <h3>{{$article}}</h3>
            <p>JUMLAH ARTIKEL AKTIF</p>
        </div>
        <div class="icon">
            <i class="fa fa-arrow-circle-right"></i></span>
        </div>
        <a href="{{url('/admin/article')}}" class="small-box-footer" >More info <i class="fa fa-arrow-circle-right"></i></a>
=======
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
>>>>>>> 81dae24dc356cf1756da01327bc8bce1990d5cc0
    </div>
</div>  

<div class="col-lg-5 col-md-5">
<<<<<<< HEAD
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
=======
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
>>>>>>> 81dae24dc356cf1756da01327bc8bce1990d5cc0
    </div>
</div>
@endsection