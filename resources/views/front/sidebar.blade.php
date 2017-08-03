 <!--left-->
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