 <!--left-->
{{-- <nav class="navbar navbar-default col-md-2">
	<div class="collapse navbar-collapse">
		<ul class="nav navbar-nav" id="sidebar">
        	    @foreach($category as $list)
        	  <li><a href="/article/{{$list->id}}" style="color:white">{{$list->category}}</a></li>
        	    @endforeach
        	   <li><a>Home</a></li>
        	   <li><a>Sport</a></li>
        	   <li><a>Social</a></li>
       	</ul>
    </div>
</nav> --}}

<!--/left-->

<ul class="nav flex-column col-md-2 leftSide">
	@foreach($category as $list)
      	<li class="nav-item">
      		<a href="/article/{{$list->id}}" class="nav-link active" style="color:white">{{$list->category}}</a>
      	</li>
    @endforeach
  <li class="nav-item">
    <a class="nav-link active" href="#">Active</a>
  </li>
  <li class="nav-item">
    <a class="nav-link" href="#">Link</a>
  </li>
  <li class="nav-item">
    <a class="nav-link" href="#">Link</a>
  </li>
  <li class="nav-item">
    <a class="nav-link disabled" href="#">Disabled</a>
  </li>
</ul>