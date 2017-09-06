@extends('frontend.main')

@section('slider')
    <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 slider">  
      @include('frontend.partial.slider')
    </div>
@endsection

@section('body')
  @forelse($Listarticle as $list)
      <div class="panel panel-default">
          <a href="{{url('article/post/'.$list->slug)}}">
            <div class="panel-thumbnail"><img src="{{asset('images/'.$list->images)}}" class="img-responsive" style="width: 100%; max-height: 400px;">
            </div>
          </a>
            <div class="caption panel-body">
              <p class="text-muted">Posted By {{ ucfirst($list->name) }} | {{$list->created_at->diffForHumans()}}</p>
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

@section('galeri')
  @include('frontend.partial.gallery')
@endsection

@section('scripts')
  <script type="text/javascript">
    $(document).ready(function(){
        $("item")[0].addClass("active");
    })
  </script>
@endsection