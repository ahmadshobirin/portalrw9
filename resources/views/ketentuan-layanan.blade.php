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
        <!-- END STYLE CSS -->
   </head>
   <body style="position:relative;">
      <div class="wrapper">
         <div class="box">
            <div class="row row-offcanvas row-offcanvas-left">
               <div class="column col-sm-12 col-xs-12" id="main">

                <!-- NAVBAR -->
                  @include('frontend.partial.navbar')
                <!-- END NAVBAR -->

                  <div class="container" style="margin-top: 5%; margin-bottom:0;height: 100%;">
                     <div class="container">
                        
                          <!-- CONTENT -->
                             <div class="container">
                              <div class="panel panel-default">
                                 <div class="caption panel-body">
                                    <h3 style="color: black;">KETENTUAN LAYANAN</h3>
                                    <hr>
                                    <p class="text-muted">
                                      Lorem ipsum dolor sit amet, consectetur adipiscing elit. Praesent sodales fringilla arcu eu volutpat. Vivamus condimentum massa sed leo luctus laoreet. In dapibus elementum congue. Pellentesque quam dolor, vestibulum vel rhoncus quis, aliquet non elit. Pellentesque aliquam erat sit amet libero maximus hendrerit. Vivamus imperdiet, ex id vehicula molestie, dolor odio dignissim est, eu interdum purus purus ut diam. Nam id ipsum et sem dignissim porta sit amet vel turpis. Maecenas vel varius augue, eget mattis ex. Quisque sagittis felis non egestas dapibus. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. In mattis placerat tortor ut euismod. Etiam eu mollis enim.

                                      Nunc nec ante orci. Nam at nisl ac sem gravida bibendum. Duis vel lacus vel mi rhoncus vestibulum quis non neque. Donec et rutrum velit. Ut non mi magna. Nulla bibendum imperdiet nibh a pulvinar. Sed ultricies laoreet iaculis. Aliquam a magna eget nisi varius lobortis vel ut urna. Sed odio libero, egestas non vestibulum eu, mollis a mi. Aliquam interdum quam quis sapien finibus aliquam. Integer eget mauris ligula. Duis congue nulla eu tellus eleifend volutpat.

                                      Donec faucibus lacus nec sollicitudin molestie. Donec eleifend auctor consectetur. Phasellus placerat consequat dapibus. Interdum et malesuada fames ac ante ipsum primis in faucibus. Curabitur elementum nec arcu a egestas. Quisque quis vulputate mi. Fusce non odio quis mauris porttitor vulputate. In at tortor nec urna finibus fringilla mollis vel enim. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut tristique tempor ligula sit amet pulvinar. Integer libero turpis, pellentesque sit amet posuere vitae, placerat ac felis. Sed et dui et eros vestibulum ultricies. Suspendisse dictum libero est, non malesuada sapien pretium et. Duis dapibus feugiat nibh id placerat. Mauris nec tellus quis felis maximus scelerisque at ac sem. Nam ac justo in dui semper volutpat.

                                      Orci varius natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Nam facilisis dui sit amet varius faucibus. Praesent pulvinar imperdiet erat faucibus interdum. Sed tincidunt non ligula sit amet aliquam. Morbi ultricies dui at purus venenatis lacinia. Aliquam commodo ultrices ipsum. Mauris porta at arcu quis pulvinar. Pellentesque imperdiet venenatis augue ac auctor. Ut porttitor feugiat gravida. Integer erat lorem, blandit sit amet erat non, blandit dignissim ex. Vestibulum nec commodo diam. Sed vehicula turpis non lorem suscipit, vel porta turpis tempor. In id velit enim. Mauris eget massa rhoncus, rhoncus lectus ac, fermentum mauris. Suspendisse quam tellus, malesuada at arcu ut, bibendum consequat orci.
                                    </p>
                                 </div>
                              </div>
                              @include('frontend.partial.footer')
                           </div>
                          <!-- END CONTENT -->
                        
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