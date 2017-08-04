<!DOCTYPE html>
<html lang="en">
	<head>
		<meta http-equiv="content-type" content="text/html; charset=UTF-8">
		<meta charset="utf-8">
		<title>title</title>
		{{-- {{ asset('css/app.css') }} --}}
    <!-- Bootstrap core CSS     -->
    <link href="{{ asset('assets/css/bootstrap.min.css') }}" rel="stylesheet" />

    <!-- Animation library for notifications   -->
    <link href="{{ asset('assets/css/animate.min.css') }}" rel="stylesheet"/>

    <!--  Light Bootstrap Table core CSS    -->
    <link href="{{ asset('assets/css/light-bootstrap-dashboard.css') }}" rel="stylesheet"/>


    <!--  CSS for Demo Purpose, don't include it in your project     -->
    <link href="{{ asset('assets/css/demo.css') }}" rel="stylesheet" />


    <!--     Fonts and icons     -->
    <link href="http://maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css" rel="stylesheet">
    <link href='http://fonts.googleapis.com/css?family=Roboto:400,700,300' rel='stylesheet' type='text/css'>
      <link href="{{ asset('assets/css/pe-icon-7-stroke.css') }}" rel="stylesheet" />

    {{-- izul --}}

    <meta name="generator" content="Bootply" />
		<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <link href="//maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css" rel="stylesheet">
		<link href="/front_layout/css/bootstrap.min.css" rel="stylesheet">
		<!--[if lt IE 9]>
			<script src="//html5shim.googlecode.com/svn/trunk/html5.js"></script>
		<![endif]-->
		<link href="/front_layout/css/styles.css" rel="stylesheet">
	

  </head>
	<body>
<nav id="top-nav" class="navbar navbar-default navbar-fixed-top" role="banner">
  <div class="container">
    <div class="navbar-header">
<!--
      <button class="navbar-toggle" type="button" data-toggle="collapse" data-target=".navbar-collapse">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
-->
        <a href="/" class="navbar-brand">
            <img src="/front_layout/img/logo.png" class="img-responsive" style="max-height:100%">
            
        </a>
    </div>
<!--
    <nav class="collapse navbar-collapse" role="navigation">
      <ul class="nav navbar-nav">
        <li>
          <a href="#sec">Get Started</a>
        </li>
        <li>
          <a href="#sec">Edit</a>
        </li>
        <li>
          <a href="#sec">Visualize</a>
        </li>
        <li>
          <a href="#sec">Prototype</a>
        </li>
      </ul>
    </nav>
-->
  </div>
</nav>


<!--main-->
<div class="container-fluid">
    <div class="row">
     @include("front.sidebar")
      
      <!--right-->
      <div class="col-md-9" id="page-content">
          @include('front.content')
        
        </div><!--/right-->
        
        <!--full right-->
<!--
      <div class="col-md-3" id="right-1">
        <ul class="nav nav-stacked" id="sidebar-1">
          <li><a href="#sec0">Section 0</a></li>
          <li><a href="#sec1">Section 1</a></li>
          <li><a href="#sec2">Section 2</a></li>
          <li><a href="#sec3">Section 3</a></li>
          <li><a href="#sec4">Section 4</a></li>
        </ul>
      </div>
-->
        <!--/full right-->
        @include("front.front_event")
        
  	</div><!--/row-->
</div>  
    
@include("front.footer")

	<!-- script references -->
		<script src="http://ajax.googleapis.com/ajax/libs/jquery/2.0.2/jquery.min.js"></script>
		<script src="/front_layout/js/bootstrap.min.js"></script>
		<script src="/front_layout/js/scripts.js"></script>


    
    <!--   Core JS Files   -->
    <script src="{{ asset('assets/js/jquery-1.10.2.js') }}" type="text/javascript"></script>
  <script src="{{ asset('assets/js/bootstrap.min.js') }}" type="text/javascript"></script>

  <!--  Checkbox, Radio & Switch Plugins -->
  <script src="{{ asset('assets/js/bootstrap-checkbox-radio-switch.js') }}"></script>

  <!--  Charts Plugin -->
  <script src="{{ asset('assets/js/chartist.min.js') }}"></script>

    <!--  Notifications Plugin    -->
    <script src="{{ asset('assets/js/bootstrap-notify.js') }}"></script>

    <!--  Google Maps Plugin    -->
    <script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?sensor=false"></script>

    <!-- Light Bootstrap Table Core javascript and methods for Demo purpose -->
  <script src="{{ asset('assets/js/light-bootstrap-dashboard.js') }}"></script>

  <!-- Light Bootstrap Table DEMO methods, don't include it in your project! -->
  <script src="{{ asset('assets/js/demo.js') }}assets/js/demo.js"></script>
	</body>
</html>