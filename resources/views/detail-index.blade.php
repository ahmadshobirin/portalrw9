@extends('frontend.main')

@section('body')

	@forelse($article as $list)
			<div class="panel panel-default">
			   <div class="panel-thumbnail"><img src="/storage/{{$list->images}}" class="img-responsive" style="width: 100%; max-height: 400px;">
			   </div>
			   <div class="caption panel-body">
			      <h3>{{$list->title}}</h3>
			      <p class="text-muted">POSTED BY ADMIN | {{$list->created_at->diffForHumans()}}</p>
			      {!! $list->content !!}
			   </div>
			</div>
		@empty
			<div class="thumbnail">
            	<center><h2 class="title">Data Kosong</h2></center>
           	</div>
	@endforelse
@endsection