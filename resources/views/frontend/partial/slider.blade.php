    <div class="panel-thumbnail ">
      <div id="myCarousel" class="carousel slide slider" data-ride="carousel">
        <!-- Indicators -->
        <ol class="carousel-indicators">
          @foreach( $slider as $photo )
            <li data-target="#carousel-example-generic" data-slide-to="{{ $loop->index }}" class="{{ $loop->first ? 'active' : '' }}"></li>
          @endforeach
        </ol>
      
        <div class="carousel-inner" role="listbox">
            @foreach( $slider as $photo )
                <div class="item {{ $loop->first ? ' active' : '' }}" >
                  <a href="{{ asset('images/slider/'.$photo->images) }}" data-type="image" target="_blank" data-lightbox="slider">
                    <img src="{{ asset('images/slider/'.$photo->images) }}" alt="" class="img-responsive img-slider" style="max-height: 20%;">
                  </a>
                </div>
            @endforeach
        </div>

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