<!DOCTYPE html>
<html lang="en">
   <head>
        <!-- STYLE CSS -->
      <meta http-equiv="content-type" content="text/html; charset=UTF-8">
      <meta charset="utf-8">
      <link rel="icon" type="image/jpg" href="{{URL::asset('assets/img/portal.jpg')}}">
      <title>Portal RW 9</title>
      <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
      <link href="{{URL::asset('assets/css/bootstrap.min.css')}}" rel="stylesheet">
      <link href="{{URL::asset('assets/css/facebook.css')}}" rel="stylesheet">
      <style> .active{ background:#1B5E20;}</style>
        <!-- END STYLE CSS -->
   </head>
   <body>
      <div class="wrapper">
         <div class="box">
            <div class="row row-offcanvas row-offcanvas-left">
               <div class="column col-sm-12 col-xs-12" id="main">

                <!-- NAVBAR -->
                  @include('frontend.partial.navbar')
                <!-- END NAVBAR -->

                  <div class="row" style="margin-top: 5%;">
                     <div class="container">
                        <div class="col-md-8">
                          <!-- CONTENT -->
                            @section ('body')
                            @show

                          <!-- END CONTENT -->
                        </div>
                        <!-- SIDE BAR -->
                          @include('frontend.partial.sidebar')
                        <!-- END SIDE BAR -->
                     </div>
                     <div>
                      <div class="container">
                        <div class="col-md-8">
                      <!-- FOOTER -->
                        @include('frontend.partial.footer')
                      <!-- END FOOTER -->
                      </div>
                      </div>
                  </div>
                  </div>
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
      <!-- END JS -->
   </body>
</html>