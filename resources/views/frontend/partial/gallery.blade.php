<div class="panel panel-default">
   <div class="panel-heading">
         <h4 style="padding-left: 10px;padding-right: 9px;"> Gallery!</h4>
   </div>
   <div class="panel-body gallery">
   @foreach($gallery as $list)
      <div class="col-sm-4 col-xs-4 col-md-4 col-lg-4 thumbnail grid">
         
            <a href="{{asset('images/gallery/'.$list->images)}}" data-type="image" target="_blank" data-lightbox="photo">
               <img src="{{asset('images/gallery/'.$list->images)}}" alt="image" class="img-responsive">
            </a>
         
      </div>
      @endforeach
      <a href="{{url('gallery')}}">
      <div class="col-sm-4 col-xs-4 col-md-4 col-lg-4 thumbnail see-more grid">
            
               <p>SEE<br>MORE</p>
               <span class="glyphicon glyphicon-plus" ></span>
            
      </div>
      </a>
   </div>
  
</div>