@extends('adminlte::layouts.app')

@section('htmlheader_title')
	{{ trans('adminlte_lang::message.home') }}
@endsection


@section('main-content')
<link href="{{URL::asset('vendor/bootstrap/css/bootstrap.min.css')}}" rel="stylesheet">

    <!-- MetisMenu CSS -->
<link href="{{URL::asset('vendor/metisMenu/metisMenu.min.css')}}" rel="stylesheet">

    <!-- Custom CSS -->
<link href="{{URL::asset('css/sb-admin-2.css')}}" rel="stylesheet">

    <!-- Morris Charts CSS -->
<link href="{{URL::asset('vendor/morrisjs/morris.css')}}" rel="stylesheet">

	<br>

	<div class="col-lg-12">
		<div class="col-lg-6">
				<div class="col-lg-12 col-md-6">
                    <div class="panel panel-primary">
                        <div class="panel-heading">
                            <div class="row">
                                <div class="col-xs-3">
                                    <i class="fa fa-list fa-5x"></i>
                                </div>
                                <div class="col-xs-9 text-right">
                                    <div class="huge" style="font-size: 40px;">26</div>
                                    <div>JUMLAH ARTIKEL</div>
                                </div>
                            </div>
                        </div>
                        <a href="#">
                            <div class="panel-footer">
                                <span class="pull-left">Lihat Rincian</span>
                                <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
                                <div class="clearfix"></div>
                            </div>
                        </a>
                    </div>
                </div>

   				<div class="col-lg-12 col-md-6">
                    <div class="panel panel-primary">
                        <div class="panel-heading">
                            <div class="row">
                                <div class="col-xs-3">
                                    <i class="fa fa-users fa-5x"></i>
                                </div>
                                <div class="col-xs-9 text-right">
                                    <div class="huge" style="font-size: 40px;">26</div>
                                    <div>JUMLAH PENDUDUK RW9</div>
                                </div>
                            </div>
                        </div>
                        <a href="#">
                            <div class="panel-footer">
                                <span class="pull-left">Lihat Rincian</span>
                                <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
                                <div class="clearfix"></div>
                            </div>
                        </a>
                    </div>
                </div>
        </div>

		<div class="col-lg-6">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            Data Penduduk berdasarkan usia
                        </div>
                        <!-- /.panel-heading -->
                        <div class="panel-body">
                            <div class="flot-chart">
                                <div class="flot-chart-content" id="flot-pie-chart"></div>
                            </div>
                        </div>
                        <!-- /.panel-body -->
                    </div>
                    <!-- /.panel -->
                </div>
      </div>
	</div>

	<script src="{{URL::asset('vendor/jquery/jquery.min.js')}}"></script>
	<script src="{{URL::asset('vendor/bootstrap/js/bootstrap.min.js')}}"></script>
	<script src="{{URL::asset('vendor/raphael/raphael.min.js')}}"></script>
    <script src="{{URL::asset('vendor/morrisjs/morris.min.js')}}"></script>
	<script src="{{URL::asset('vendor/metisMenu/metisMenu.min.js')}}"></script>
	<script src="{{URL::asset('vendor/flot/jquery.flot.pie.js')}}"></script>
@endsection
