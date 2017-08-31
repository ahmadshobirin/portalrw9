@if (count($errors)>0)
	<div class="alert alert-danger">
		@foreach($errors->all() as $error)
			{{$error}}
			<br>
		@endforeach
	</div>
@endif

@if(Session::has('message'))
	<div class="alert alert-danger">
		{{Session::get('message')}}
	</div>
@endif