@extends('frontend.main')

@section('body')

  @if($countBirthday > 0 )
    <div class="panel-thumbnail">
        <a href="{{url('/birthday')}}"> 
        <img src="assets/img/hbd2.jpg" class="img-responsive hokya" style="width: 100%; max-height: 250px; padding-bottom: 10px;">
        </a>
    </div>
  @endif

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