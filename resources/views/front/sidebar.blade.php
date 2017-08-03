 <!--left-->
<<<<<<< HEAD
      {{-- <div class="col-md-3" id="leftCol">
        <ul class="nav nav-stacked" id="sidebar">
            @foreach($category as $list)
          <li><a href="/article/category/{{$list->id}}" style="color:white">{{$list->category}}</a></li>
            @endforeach
        </ul>
      </div> --}}
<!--/left-->

	<div class="col-md-3" id="leftCol">
        <ul class="nav nav-stacked" id="sidebar">
            @foreach($category as $list)
          		<li><a href="{{ url('/article/category/'.$list->slug)}}" style="color:white">{{$list->category}}</a></li>
            @endforeach
        </ul>
     </div>
=======
<nav class="navbar navbar-default col-md-2">
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
</nav><!--/left-->
>>>>>>> 91b966d45c3b91ec5ae47cf258668edaf3d83aa9
