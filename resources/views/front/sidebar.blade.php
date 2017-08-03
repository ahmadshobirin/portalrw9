 <!--left-->
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