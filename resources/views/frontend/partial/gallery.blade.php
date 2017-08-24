<div class="panel panel-default">
   <div class="panel-heading">
      <h4 style="padding-left: 10px;padding-right: 9px;"> Gallery!</h4>
   </div>
   <div class="panel-body gallery">
      <div class="col-sm-4 col-xs-4 col-md-4 col-lg-4 thumbnail">
         @foreach($gallery as $list)
            <a href="{{asset('images/gallery/'.$list->images)}}" data-type="image" target="_blank" data-lightbox="photo">
               <img src="{{asset('images/gallery/'.$list->images)}}" alt="" class="img-responsive">
            </a>
         @endforeach
      </div>
   </div>
  
</div>