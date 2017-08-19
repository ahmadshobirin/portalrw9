@extends('frontend.main')

@section('body')

    <!-- <div class="panel-thumbnail">
        <a href="{{url('/birthday')}}"> 
        <img src="assets/img/hbd2.jpg" class="img-responsive hokya" style="width: 100%; max-height: 250px; padding-bottom: 10px;">
        </a>
    </div> -->





    <div class="panel-thumbnail">
      <div id="myCarousel" class="carousel slide" data-ride="carousel">
        <!-- Indicators -->
        <ol class="carousel-indicators">
          <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
          <li data-target="#myCarousel" data-slide-to="1"></li>
          <li data-target="#myCarousel" data-slide-to="2"></li>
        </ol>

        <!-- Wrapper for slides -->
        <div class="carousel-inner">
          <div class="item active">
            <img src="assets/img/hbd2.jpg" alt="Los Angeles">
          </div>

          <div class="item">
            <img src="assets/img/hbd2.jpg" alt="Chicago">
          </div>

          <div class="item">
            <img src="assets/img/hbd2.jpg" alt="New York">
          </div>
        </div>

        <!-- Left and right controls -->
        <a class="left carousel-control" href="#myCarousel" data-slide="prev">
          <span class="glyphicon glyphicon-chevron-left"></span>
          <span class="sr-only">Previous</span>
        </a>
        <a class="right carousel-control" href="#myCarousel" data-slide="next">
          <span class="glyphicon glyphicon-chevron-right"></span>
          <span class="sr-only">Next</span>
        </a>
      </div>
    </div>






















  @forelse($Listarticle as $list)
      <div class="panel panel-default">
          <a href="{{url('article/post/'.$list->slug)}}">
            <div class="panel-thumbnail"><img src="{{asset('images/'.$list->images)}}" class="img-responsive" style="width: 100%; max-height: 400px;">
            </div>
          </a>
            <div class="caption panel-body">
              <p class="text-muted">POSTED BY ADMIN | {{$list->created_at->diffForHumans()}}</p>
              <a href="{{url('article/post/'.$list->slug)}}"> <h3>{{$list->title}}</h3> </a>
              <p class="text-left">{{$list->description}}</p>
              <span> <a href="{{url('/article/category/'.$list->category)}}" class="category">{{$list->category}}</a></span>
            </div>
      </div>
    @empty
      <div class="thumbnail">
        <center><h2 class="title">Data Kosong</h2></center>
      </div>
  @endforelse
  {!! $Listarticle->links() !!}
@endsection