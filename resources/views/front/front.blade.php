<!DOCTYPE html>
<html lang="en">
	<head>
		<meta http-equiv="content-type" content="text/html; charset=UTF-8">
		<meta charset="utf-8">
		<title>title</title>
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

<div id="masthead">  
  <div class="container">
      <div class="row">
        <div class="col-md-7">
          <h1>TEXT HERE
            <p class="lead">Some text here</p>
          </h1>
        </div>
        <div class="col-md-5">
            <div class="well well-lg"> 
              <div class="row">
                <div class="col-sm-6">
        	      	<img src="/front_layout/img/logo.png" class="img-responsive">
                </div>
                <div class="col-sm-6">
	              	Some text here
                </div>
              </div>
            </div>
        </div>
      </div> 
  </div><!--/container-->
</div><!--/masthead-->

<!--main-->
<div class="container">
	<div class="row">
     @include("front.sidebar")
      
      <!--right-->
      <div class="col-md-7" id="page-content" style="min-height:1000px">
          @section("content")
          @show
        
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
    
    

</div><!--/container-->
@include("front.footer")

	<!-- script references -->
		<script src="http://ajax.googleapis.com/ajax/libs/jquery/2.0.2/jquery.min.js"></script>
		<script src="/front_layout/js/bootstrap.min.js"></script>
		<script src="/front_layout/js/scripts.js"></script>
	</body>
</html>