 <!--left-->
<nav class="navbar navbar-default col-md-2">
	<div class="collapse navbar-collapse" id="sidebar">
		<ul class="nav navbar-nav">
        	    @foreach($category as $list)
        	  <li><a href="/article/{{$list->id}}" style="color:white">{{$list->category}}</a></li>
        	    @endforeach
       	</ul>
    </div>
</nav><!--/left-->