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
   <body>
      <div class="wrapper">
         <div class="box">
            <div class="row row-offcanvas row-offcanvas-left">
               <div class="column col-sm-12 col-xs-12" id="main">

                <!-- NAVBAR -->
                  @include('frontend.partial.navbar')
                <!-- END NAVBAR -->                  
                          <!-- CONTENT -->
                          <div class="container" style="margin-top: 5%;">
                              <div class="panel panel-default">
                                 <div class="caption panel-body">
                                    <h3 style="color: black;">TENTANG KAMI</h3>
                                    <hr>
                                    <p class="text-muted">
                                      Lorem ipsum dolor sit amet, consectetur adipiscing elit. Praesent sodales fringilla arcu eu volutpat. Vivamus condimentum massa sed leo luctus laoreet. In dapibus elementum congue. Pellentesque quam dolor, vestibulum vel rhoncus quis, aliquet non elit. Pellentesque aliquam erat sit amet libero maximus hendrerit. Vivamus imperdiet, ex id vehicula molestie, dolor odio dignissim est, eu interdum purus purus ut diam. Nam id ipsum et sem dignissim porta sit amet vel turpis. Maecenas vel varius augue, eget mattis ex. Quisque sagittis felis non egestas dapibus. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. In mattis placerat tortor ut euismod. Etiam eu mollis enim. <br> 
                                      Lorem ipsum dolor sit amet, consectetur adipiscing elit. Praesent sodales fringilla arcu eu volutpat. Vivamus condimentum massa sed leo luctus laoreet. In dapibus elementum congue. Pellentesque quam dolor, vestibulum vel rhoncus quis, aliquet non elit. Pellentesque aliquam erat sit amet libero maximus hendrerit. Vivamus imperdiet, ex id vehicula molestie, dolor odio dignissim est, eu interdum purus purus ut diam. Nam id ipsum et sem dignissim porta sit amet vel turpis. Maecenas vel varius augue, eget mattis ex. Quisque sagittis felis non egestas dapibus. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. In mattis placerat tortor ut euismod. Etiam eu mollis enim.
                                      Lorem ipsum dolor sit amet, consectetur adipiscing elit. Praesent sodales fringilla arcu eu volutpat. Vivamus condimentum massa sed leo luctus laoreet. In dapibus elementum congue. Pellentesque quam dolor, vestibulum vel rhoncus quis, aliquet non elit. Pellentesque aliquam erat sit amet libero maximus hendrerit. Vivamus imperdiet, ex id vehicula molestie, dolor odio dignissim est, eu interdum purus purus ut diam. Nam id ipsum et sem dignissim porta sit amet vel turpis. Maecenas vel varius augue, eget mattis ex. Quisque sagittis felis non egestas dapibus. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. In mattis placerat tortor ut euismod. Etiam eu mollis enim.
                                      Lorem ipsum dolor sit amet, consectetur adipiscing elit. Praesent sodales fringilla arcu eu volutpat. Vivamus condimentum massa sed leo luctus laoreet. In dapibus elementum congue. Pellentesque quam dolor, vestibulum vel rhoncus quis, aliquet non elit. Pellentesque aliquam erat sit amet libero maximus hendrerit. Vivamus imperdiet, ex id vehicula molestie, dolor odio dignissim est, eu interdum purus purus ut diam. Nam id ipsum et sem dignissim porta sit amet vel turpis. Maecenas vel varius augue, eget mattis ex. Quisque sagittis felis non egestas dapibus. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. In mattis placerat tortor ut euismod. Etiam eu mollis enim.
                                      

                                    
                                    </p>

                                 </div>
                              </div>                              
                          </div> 

               </div>
                 @include('frontend.partial.footer')
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