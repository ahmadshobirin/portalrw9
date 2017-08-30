<!DOCTYPE html>
<html lang="en">
   <head>
      <!-- STYLE CSS -->
      <meta http-equiv="content-type" content="text/html; charset=UTF-8">
      <meta charset="utf-8">
      <link rel="icon" type="image/jpg" href="{{URL::asset('assets/img/logo.jpg')}}">
      <title>Rw09Ratim - Pedoman Cyber</title>
      <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
      <link href="{{URL::asset('assets/css/bootstrap.min.css')}}" rel="stylesheet">
      <link href="{{URL::asset('assets/css/facebook.css')}}" rel="stylesheet">
      <link href="{{URL::asset('assets/css/media-query.css')}}" rel="stylesheet">
      <link href="{{URL::asset('assets/css/footer.css')}}" rel="stylesheet">
      <link href="{{URL::asset('assets/css/gallery.css')}}" rel="stylesheet">
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/lightbox2/2.9.0/css/lightbox.min.css" />
      <!-- END STYLE CSS -->
   </head>
   <body style="position:relative;">
      <div class="box">
         <div class="row row-offcanvas row-offcanvas-left">
            <div class="column col-sm-12 col-xs-12" id="main" style="height: 100%;" id="content1">
               <!-- NAVBAR -->
               @include('frontend.partial.navbar')
               <!-- END NAVBAR -->
               <div class="row">
                  <div class="container">
                     <!-- CONTENT -->
                     <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 content">
                        <div class="panel panel-default">
                           <div class="panel-heading">
                              <center>
                                 <h2 id="title">RW 09 on Frame</h2>
                              </center>
                           </div>
                           <div class="caption panel-body">
                              @foreach($gallery as $list)
                              <div class="col-sm-3 col-xs-3 col-md-3 col-lg-3 thumbnail grid2">
                                 <a href="{{asset('images/gallery/'.$list->images)}}" data-type="image" target="_blank" data-lightbox="photo">
                                 <img src="{{asset('images/gallery/'.$list->images)}}" alt="image" class="img-responsive">
                                 </a>
                              </div>
                              @endforeach
                           </div>
                        </div>
                     </div>
                     <!-- END CONTENT -->
                  </div>
               </div>
               <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                  @include('frontend.partial.footer')
               </div>
            </div>
         </div>
      </div>
      <!-- JS -->
      <script type="text/javascript" src="{{URL::asset('assets/js/jquery.js')}}"></script>
      <script type="text/javascript" src="{{URL::asset('assets/js/bootstrap.min.js')}}"></script>
      <script type="text/javascript">
         $(document).ready(function() {
             $('[data-toggle=offcanvas]').click(function() {
                 $(this).toggleClass('visible-xs text-center');
                 $(this).find('i').toggleClass('glyphicon-chevron-right glyphicon-chevron-left');
                 $('.row-offcanvas').toggleClass('active');
                 $('#lg-menu').toggleClass('hidden-xs').toggleClass('visible-xs');
                 $('#xs-menu').toggleClass('visible-xs').toggleClass('hidden-xs');
                 $('#btnShow').toggle();
             });
         });
      </script>
      <script src="https://cdnjs.cloudflare.com/ajax/libs/lightbox2/2.9.0/js/lightbox-plus-jquery.min.js"></script>
      <!-- END JS -->
   </body>
</html>