@extends('frontend.main')
@section('body')
    <h2>{{$kategori->kategori}}</h2>
    
    @forelse($listArticle as $list)
        <div class="thumbnail">
            <a href="{{url('article/post/'.$list->slug)}}">
                <h2 class="title">{{ $list->title }}</h2>
                <img src="{{URL::asset('storage/'.$list->images)}}" class="img-responsive">
            </a>
            <div class="caption">
                <p class="text-muted">Posted By Admin | {{ $list->created_at->diffForHumans() }}</p>
                <span class="category pull-right">{{$list->category}}</span>
                <p class="text-left">{{ $list->description }}</p>
            </div>
        </div>
    @empty
       <div class="thumbnail">
	       <center><h2 class="title">Data Kosong</h2></center>
       </div>
    @endforelse
    <div class="pull-right">{!! $listArticle->links() !!}</div>
@endsection