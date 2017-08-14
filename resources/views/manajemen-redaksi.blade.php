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
         <div class="box">
            <div class="row row-offcanvas row-offcanvas-left">
               <div class="column col-sm-12 col-xs-12" id="main" style="height: 100%;">
                  <!-- NAVBAR -->
                  @include('frontend.partial.navbar')
                  <!-- END NAVBAR -->
                  <div class="row">
                     <div class="container">
                        <!-- CONTENT -->
                        <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 content" id="content1">
                           <div class="panel panel-default">
                              <div class="caption panel-body">
                                <div style="padding-left: 2px;">
                                 <h3 style="color: black;text-align: center;">MANAJEMEN & REDAKSI</h3>
                                 <hr>
                                 
                                 <h4 style="color: black;"> Board of Directors </h4>
                                    <ul>
                                      <li style="list-style-type: disc;"> 
                                      Chief Executive Officer (CEO) : Ir. H.A. Suhartanto </li>
                                      <li style="list-style-type: disc;"> 
                                      Chief Operating Officer (COO) : Yoseph Boedianto </li>
                                      <li style="list-style-type: disc;"> 
                                      Chief Technology Officer (CTO) : Subechan </li>
                                    </ul>

                                 <h4 style="color: black;"> Manajemen </h4>                                
                                    <ul>
                                      <li style="list-style-type: disc;"> 
                                      General Manager : Ir. H. Mukhlis </li>
                                      <li style="list-style-type: disc;"> 
                                      IT Manager : Witriyanto </li>
                                      <li style="list-style-type: disc;"> 
                                      Digital Marketing Manager : Budi Musana </li>
                                    </ul>

                                  <h4 style="color: black;"> Dewan Redaksi </h4>                                
                                    <ul>
                                      <li style="list-style-type: disc;"> 
                                      Pemimpin Redaksi : Chairul Anam  </li>
                                      <li style="list-style-type: disc;"> 
                                      Redaktur : Sam Aditya </li>
                                      <li style="list-style-type: disc;"> 
                                      Reporter </li>
                                    </ul>

                                    <hr>

                                    <div class="col-sm-12">
                                      <div class="pull-left col-sm-6">
                                      <h4>Alamat Redaksi: </h4>
                                       <p>&emsp;Jl. Rungkut Asri timur 6 No.22, Surabaya-60293, Jawa Timur, Indonesia. </p>
                                        <h4>Email Redaksi: </h4>
                                        <p>&emsp;redaksi@rw9ratim.com</p>                            
                                    </div>

                                    <div class="pull-right col-sm-6" style="border-left: 1px solid #e6e6e6;">
                                      <h4> Tim Kolaborasi dan Engagement </h4>
                                      <p> Redaktur Pelaksana </p>
                                    </div>  
                                    </div>                                

                                  </div>
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
      <!-- END JS -->
   </body>
</html>