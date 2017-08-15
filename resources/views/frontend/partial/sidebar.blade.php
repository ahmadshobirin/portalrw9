

   <div class="panel panel-default side">
      <h4 style="padding-left: 10px;padding-right: 9px;"> Artikel Baru!</h4>
      @forelse($latestArticle as $list)

            <div class="panel-body topik">
               <div class="col-md-4 col-lg-4 col-sm-4 col-xs-4">
                  <a href="{{url('article/post/'.$list->slug)}}">
                     <img src="{{asset('images/'.$list->images)}}" class="img-responsive" {{-- style="width: 85px; height: 85px;" --}}>
                  </a>
               </div>
               <div class="col-md-8 col-lg-8 col-sm-8 col-xs-8">
                  <b>
                     <a href="{{url('article/post/'.$list->slug)}}">
                        <p style="font-size: 15px;"> {{$list->title}} </p>
                     </a>
                  </b>
                  <p style="font-size: 12px;"> &emsp;{{str_limit($list->description,25)}}</p>
                  <p style="font-size: 12px;"> &emsp;<a href="{{url('/article/category/'.$list->category)}}">{{$list->category}}</a></p>
               </div>
            </div>

         @empty


      @endforelse         
   </div>
