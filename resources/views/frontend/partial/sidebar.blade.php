
<div class="col-md-4">
   <div class="panel panel-default">
      <h4 style="padding-left: 10px;padding-right: 9px;"> Artikel Baru!</h4>
      @forelse($article as $list)

            <div class="panel-body topik">
               <div class="col-md-4">
                  <a href="{{url('article/post/'.$list->slug)}}">
                     <img src="{{URL::asset('/storage/'.$list->images)}}" style="width: 85px; height: 85px;">
                  </a>
               </div>
               <div class="col-md-8">
                  <b>
                     <a href="{{url('article/post/'.$list->slug)}}">
                        <p style="font-size: 15px;"> {{$list->title}} </p>
                     </a>
                  </b>
                  <p style="font-size: 12px;"> &emsp;{{$list->description}}</p>
               </div>
            </div>

         @empty


      @endforelse         
   </div>
</div>