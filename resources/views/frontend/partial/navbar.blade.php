
                  <div class="navbar navbar-blue navbar-static-top">
                     <div class="navbar-header">
                        <button class="navbar-toggle" type="button" data-toggle="collapse" data-target=".navbar-collapse">
                        <span class="sr-only">Toggle</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        </button>
                        <a href="{{url('/')}}" class="navbar-brand logo">b</a>
                     </div>
                     <nav class="collapse navbar-collapse" role="navigation">
                        {{--  <form class="navbar-form navbar-right" style="padding-right: 40px;">
                           <div class="input-group input-group-sm" style="max-width:360px;">
                              <input class="form-control" placeholder="Search" name="srch-term" id="srch-term" type="text">
                              <div class="input-group-btn">
                                 <button class="btn btn-default" type="submit"><i class="glyphicon glyphicon-search"></i>
                                 </button>
                              </div>
                           </div>
                        </form>  --}}
                        {{-- //menu --}}
                        <ul class="nav navbar-nav navbar-right" style="padding-right: 40px;">
                            @if (Auth::check())
                                <li><a href="{{url('home')}}">Dasbor</a></li>
                            @endif
                            <li class="@if(Request::is('/')) active @endif" ><a href="{{url('/')}}">Beranda</a></li> 
                            @foreach($category as $list)
                               <li class="@if(Request::is('article/category/'.$list->slug)) active @endif"><a href="{{url('article/category/'.$list->slug)}}">{{$list->category}}</a></li>
                            @endforeach
                        </ul>
                     </nav>
                  </div>