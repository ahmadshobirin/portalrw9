@extends("front.front")
{{--  <img src="{{ asset('storage/images.jpg') }}" alt="">  --}}
@section("content")

    @foreach($article as $list)
<!--
    <div class="panel panel-default">
        <a href="/article/post/{{$list->id}}">
        <div class="panel-body">
            <img src="/storage/{{$list->images}}" class="img-responsive">
            <p>
              {{$list->description}}..</p>
        </div>
        </a>
    </div>
-->

<div class="col-md-6">

    <div class="panel panel-default">
        <div class="panel-body">
            <center>
                <a href="/article/post/{{$list->slug}}">
                    <h4>{{$list->title}}</h4>
                </a>
            </center>
            
            <img src="/storage/{{$list->images}}" class="img-responsive">
            
            <p>{{$list->description}}..
                <a href="/article/post/{{$list->id}}">
                    <label>readmore</label>
                </a>
            </p>
            <hr>
            <div class="pull-left">
                <b class="fa fa-eye"> View :</b>  <b>0</b>
            </div>
            <div class="pull-right">
                <a href=""><i class="fa fa-2x fa fa-facebook-square"></i></a>  
                <a><i class="fa fa-2x fa fa-google-plus-square"></i></a>  
                <a><i class="fa fa-2x fa fa-twitter-square"></i></a>  

            </div>
        </div>
    </div>
</div>
    @endforeach

@endsection