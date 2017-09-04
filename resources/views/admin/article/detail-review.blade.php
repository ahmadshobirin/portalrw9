@extends('adminlte::layouts.app')

@section('htmlheader_title')
	Artikel User
@endsection

@section('contentheader_title', 'Artikel User')

@section('main-content')
<div class="box box-primary">
    <div class="box-header with-border">
        <h3 class="box-title">Review</h3>
        <span class="label label-primary pull-right">&nbsp;&nbsp;</span>
    </div>
    <div class="box-body">
        <div class="col-md-10 col-md-offset-1">
            <img src="{{asset('images/'.$dataArtikel->images)}}" class="img-responsive" style="width: 100%; max-height: 400px;">
            <h4>{{ $dataArtikel->title }} <br> <small>posted by <b>{{$dataArtikel->name}}</b> </small> </h4>
            <br>
            {!!$dataArtikel->content!!}
        </div>
    </div>
    <div class="box-footer">
      <div class="col-md-10 col-md-offset-1">
            <div class="row">
                <div class="col-md-6">
                    <a href="{{ url('admin/view/setstatus/'.$dataArtikel->id.'/aktif') }}" class="btn btn-success btn-block">Layak</a>
                </div>
                <div class="col-md-6">
                   <a href="#!" class="btn btn-warning btn-block">Revisi</a>
                </div>
            </div>
      </div>
    </div>
</div>  

@stop