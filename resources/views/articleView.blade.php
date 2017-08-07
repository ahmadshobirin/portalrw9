@extends("front.front")

@section("content")


{{csrf_field()}}
<h2>{{$article->title}}</h2>
    <div class="col-md-4">
        <div class="panel panel-default">
            <div class="panel-body">
                <h2 id="sec0">{{$article->title}}</h2>
					<hr>
					<img src="/storage/{{$article->images}}" class="img-responsive pull-left" style="padding:15px">
					{!!$article->content!!}
            </div>
            </a>
        </div>
    </div>
@endsection