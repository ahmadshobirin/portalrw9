@extends("front.front")

@section("content")
<h2>{{$kategori->kategori}}</h2>
    
    @forelse($article as $list)
        <div class="col-md-4">
            <div class="panel panel-default">
                <a href="/article/post/{{$list->id}}">
                    <div class="panel-body">
                        <img src="{{URL::asset('/storage/sMgjwDto1mL5kEp2xce1O71lxcAhbMxK4q5UWNce.jpeg')}}" class="img-responsive">
                        <img src="/storage/{{$list->images}}" class="img-responsive">
                        <h4>
                        {{$list->title}}
                        </h4>
                    </div>
                </a>
            </div>
        </div>
    @empty
        <h4>Data Kosong</h4>
    @endforelse
    
@endsection