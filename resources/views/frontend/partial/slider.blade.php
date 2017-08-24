    <div class="panel-thumbnail">
      <div id="myCarousel" class="carousel slide" data-ride="carousel">
        <!-- Indicators -->
        <ol class="carousel-indicators">
          @foreach( $slider as $photo )
            <li data-target="#carousel-example-generic" data-slide-to="{{ $loop->index }}" class="{{ $loop->first ? 'active' : '' }}"></li>
          @endforeach
        </ol>
        @foreach($pictures as $list)
        <!-- Wrapper for slides -->
<<<<<<< HEAD
        <div class="carousel-inner" role="listbox">
            @foreach( $slider as $photo )
                <div class="item {{ $loop->first ? ' active' : '' }}" >
                    <img src="{{ asset('images/slider/'.$photo->images) }}" alt="" style="min-width:100%; height:30%;" class="img-responsive">
                </div>
            @endforeach
        </div>
=======
        <div class="carousel-inner">
          <div class="item active">
            <img src="{}" alt="Los Angeles">
          </div>
        @endforeach
>>>>>>> e69684a0821bddc3d3f3ac9595ae860dfeb40d72

        <!-- Left and right controls -->
        <a class="left carousel-control" href="#myCarousel" data-slide="prev">
          <span class="glyphicon glyphicon-chevron-left"></span>
          <span class="sr-only">Previous</span>
        </a>
        <a class="right carousel-control" href="#myCarousel" data-slide="next">
          <span class="glyphicon glyphicon-chevron-right"></span>
          <span class="sr-only">Next</span>
        </a>
      </div>
    </div>