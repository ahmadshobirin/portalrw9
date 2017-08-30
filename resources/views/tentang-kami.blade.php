<!DOCTYPE html>
<html lang="en">
   <head>
      <!-- STYLE CSS -->
      <meta http-equiv="content-type" content="text/html; charset=UTF-8">
      <meta charset="utf-8">
      <link rel="icon" type="image/jpg" href="{{URL::asset('assets/img/logo.jpg')}}">
      <title>Rw09Ratim - Tentang Kami</title>
      <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
      <link href="{{URL::asset('assets/css/bootstrap.min.css')}}" rel="stylesheet">
      <link href="{{URL::asset('assets/css/facebook.css')}}" rel="stylesheet">
      <link href="{{URL::asset('assets/css/media-query.css')}}" rel="stylesheet">
      <link href="{{URL::asset('assets/css/footer.css')}}" rel="stylesheet">
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
                                 <h3 style="color: black;text-align: center;">TENTANG KAMI</h3>
                                 <hr>
                                  
                                  <div class="col-md-12">
                                    <div class="col-md-6 col-sm-6" id="redaksi">
                                    <p>
                                      &emsp;"RW 09 Ratim" adalah sebuah organisasi sosial kemasyarakatan, atau Lembaga Swadaya Masyarakat (LSM) tertua didunia, bergeraknya roda organisasi ini sepenuhnya atas biaya dari warga RW 09 Rungkut Asri timur, Kelurahan Rungkut Kidul, Kota Madya Surabaya, dengan kode pos 60293.
                                    </p>
                                    </div>

                                    <div class="col-md-6 col-sm-6" >
                                    <p>
                                      &emsp;Diinspirasi dari fenomena tradisi masyarakat Indonesia, khususnya warga RW 09 Ratim yang suka ber-WA-ria (WAG “Guyub RW 09 Ratim”), dan sudah menjadi sarana komunikasi utama, bertukar informasi antar warga penghuni perumahan (komplek). 
                                    </p>
                                    </div>

                                  </div>
                                  <br><br>
                                  <hr>
                                  <p>
                                    &emsp;"RW 09 Ratim" adalah sebuah komplek perumahan yang kami beri nama “Kampoeng Guyub”, dikarenakan keguyuban antar warganya, beberapa prestasi pernah disandang antara lain……
                                      <ul>
                                        <li>
                                          Rw9ratim dot com bukan sekedar portal biasa. Rw9ratim dot com merupakan portal berita interaktif. Wujud interaktifitas dari komunitas dan bisnis melalui konsep warung kopi digital.
                                        </li>
                                        <li>
                                          Rw9ratim dot com digital adalah analogi aktivitas sosial yang terjadi (khususnya) di wilayah RW 09 Rungkut Asri Timur, dan Surabaya (pada umumnya), namun ditransformasi ke dunia maya melalui media digital.
                                        </li>
                                      </ul>

                                    &emsp;Aktivitas tersebut mencakup antara lain seperti sharing informasi dan berita, interaksi opini, diskusi beragam topik hangat, hingga bernegosiasi bisnis dan jual-beli. <br>

                                    <h4 style="text-align: center;"> Rw9ratim dot com – adalah media milik warga. </h4>

                                  </p>

                                  <hr>

                                  <div class="col-sm-12">
                                    <div class="col-sm-6" id="redaksi">
                                      <h4>Alamat Kantor: </h4>
                                      <p>&emsp;Jl. Rungkut Asri timur 6 No.22, Surabaya-60293, Jawa Timur, Indonesia. </p>

                                      <h4>Telepon: </h4>
                                      <p>&emsp;(031) 8710230</p>  

                                      <h4>Email: </h4>
                                      <p>&emsp;<a href="#">info@rw9ratim.com</a>, 
                                              <a href="#">redaksi@rw9ratim.com</a>
                                      </p> 
                                    </div>

                                    <div class="col-sm-6" >
                                      <h4>Gmail: </h4>
                                      <p>&emsp;rw9ratim@gmail.com </p>

                                      <h4>WhatsApp: </h4>
                                      <p>&emsp;+62 8585 3148 266 </p>
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