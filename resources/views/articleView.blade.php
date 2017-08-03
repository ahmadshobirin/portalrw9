@extends("front.front")

@section("content")
<h2 id="sec0">{{$article->title}}</h2>
    
<hr>
<img src="/storage/{{$article->images}}" class="img-responsive pull-left" style="padding:15px">

{!!$article->content!!}
        
    
@endsection