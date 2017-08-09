
<div class="col-md-4">
   <div class="panel panel-default">
      <h4 style="padding-left: 10px;padding-right: 9px;"> Artikel Baru!</h4>
      @forelse($article as $list)

            <div class="panel-body topik">
               <div class="col-md-4">
                  <img src="/storage/{{$list->images}}" style="width: 85px; height: 85px;">
               </div>
               <div class="col-md-8">
                  <b>
                     <a href="#">
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