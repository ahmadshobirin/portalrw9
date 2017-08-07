@extends("front.front")

@section("content")

                @foreach($article as $articles)
                    <div class="thumbnail">
                        <img src="/img/traveljinni-logo-icon.png">
                        <div class="caption">
                            <p class="text-muted">POSTED BY Admin | {{$articles->created_at->diffForHumans()}}</p>
                            <h3><a href="{{url('article/post/'.$articles->slug)}}">{{$articles->title}}</a></h3>
                            <p class="text-left">{{$articles->description}}</p>
                        </div>
                        <div class="row">
                            <div class="col-xs-12">
                                <span> <a href="#" class="category">{{$articles->category}}</a></span>
                            </div>
                        </div>
                    </div>
                @endforeach

            <h3><a href="#">Travel Terbaik! eta Terangkanlah~ </a></h3>
            <p class="text-left">Nullam id dolor id nibh ultricies vehicula ut id elit. Cras justo odio, dapibus ac facilisis in, egestas eget quam. Donec id elit non mi porta gravida at eget metus.</p>
        </div>  
@endsection