<!DOCTYPE html>
<html lang="en">
   <head>
        <!-- STYLE CSS -->
      <meta http-equiv="content-type" content="text/html; charset=UTF-8">
      <meta charset="utf-8">
      <link rel="icon" type="image/jpg" href="{{URL::asset('assets/img/logo.jpg')}}">
      <title>Rw09Ratim</title>
      <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
      <link href="{{URL::asset('assets/css/bootstrap.min.css')}}" rel="stylesheet">
      <link href="{{URL::asset('assets/css/facebook.css')}}" rel="stylesheet">
      <link href="{{URL::asset('assets/css/media-query.css')}}" rel="stylesheet">
      <link href="{{URL::asset('assets/css/footer.css')}}" rel="stylesheet">
      <link href="{{URL::asset('assets/css/gallery.css')}}" rel="stylesheet">
      <style> .active{ background:#1B5E20;}</style>
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/lightbox2/2.9.0/css/lightbox.min.css" />
        <!-- END STYLE CSS -->
   </head>
   <body>
         <div class="box">
            <div class="row row-offcanvas row-offcanvas-left">
               <div class="column col-sm-12 col-xs-12" id="main" style="height: 100%;">

                <!-- NAVBAR -->
                  @include('frontend.partial.navbar')
                <!-- END NAVBAR -->

                  <div class="row" >
                     <div class="container">
                        @yield('slider')
                        <div class="col-md-8 col-lg-8 col-sm-12 col-xs-12" id="content">
                          <!-- CONTENT -->
                            @section ('body')
                            @show

                          <!-- END CONTENT -->
                        </div>
                        <div class="col-md-4 col-lg-4 col-sm-12 col-xs-12">
                        {{-- GALLERY --}}
                         @yield('galeri')
                        {{-- END GALLERY --}}
                        <!-- SIDE BAR -->
                         @include('frontend.partial.sidebar')
                        <!-- END SIDE BAR -->
                        </div>
                     </div>
                  </div> 
                  <div class="col-md-12 col-lg-12 col-sm-12 col-xs-12">
                    @include('frontend.partial.footer')
                  </div>
            </div>

         </div>
      </div>
      <div  style="visibility: hidden; display:none;">
       <audio id="player" controls="controls" style="visibility:hidden;">
           <source id="sourceOgg" src="{{URL::asset('audio/indonesia.mp3')}}" type="audio/mp3"/>
           Your browser does not support the audio element.
       </audio>
   </div>
      <!-- JS -->
        <script type="text/javascript" src="{{URL::asset('assets/js/jquery.js')}}">
        </script>
        <script type="text/javascript" src="{{URL::asset('assets/js/bootstrap.min.js')}}">              
        </script>
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
              var player = document.getElementById('player');
              var sourceMp3 = document.getElementById('player');
              tday = new Array("Minggu", "Senin", "Selasa", "Rabu", "Kamis", "Jumat", "Sabtu");
              tmonth = new Array("Januari", "Februari", "Maret", "April", "Mei", "Juni", "Juli", "Agustus", "September", "Oktober", "November", "Desember");

              function GetClock() {
                  var today = new Date();
                  var dx = today.toGMTString();
                  dx = dx.substr(0, dx.length - 3);
                  today.setTime(Date.parse(dx))
                  today.setSeconds(today.getSeconds() + <?php date_default_timezone_set('Asia/Jakarta'); echo date('Z'); ?>);

                  var nday = today.getDay(),
                      nmonth = today.getMonth(),
                      ndate = today.getDate(),
                      nyear = today.getYear();

                  if (nyear < 1000) nyear += 1900;
                  var nhour = today.getHours(),
                      nmin = today.getMinutes(),
                      nsec = today.getSeconds();
                  if (nmin <= 9) nmin = "0" + nmin;
                  if (nsec <= 9) nsec = "0" + nsec;

                  //document.getElementById('clockboxhour').innerHTML = "" + tday[nday] + ", " + ndate + " " + tmonth[nmonth] + " " + nyear + " " + nhour + ":" + nmin + ":" + nsec + " WIB";
                  if (nhour + "." + nmin == 06.00) player.play();
              }

              window.onload = function() {
                  GetClock();
                  setInterval(GetClock, 1000);
              }
         });
        </script>
        <script>
          var slideIndex = 0;
          showSlides();

          function showSlides() {
              var i;
              var slides = document.getElementsByClassName("mySlides");
              for (i = 0; i < slides.length; i++) {
                  slides[i].style.display = "none"; 
              }
              slideIndex++;
              if (slideIndex> slides.length) {slideIndex = 1} 
              slides[slideIndex-1].style.display = "block"; 
              setTimeout(showSlides, 7000); // Change image every 2 seconds
          }
        </script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/lightbox2/2.9.0/js/lightbox-plus-jquery.min.js"></script>
      <!-- END JS -->
   </body>
</html>