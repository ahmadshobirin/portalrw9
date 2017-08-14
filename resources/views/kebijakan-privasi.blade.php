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
                              <h3 style="color: black;text-align: center;">KEBIJAKAN PRIVASI</h3>
                              <hr>
                              <p>
                                 &emsp;Selamat datang di halaman kebijakan privasi (Privacy Policy) rw9ratim.com. Perlu diketahui, dengan menggunakan atau mengakses layanan rw9ratim.com berarti Anda memercayakan informasi Anda kepada kami. <br>
                                 &emsp;Kebijakan ini dibuat bertujuan untuk membantu Anda memahami informasi yang kami kumpulkan, mengapa kami mengumpulkan, dan apa yang akan kami lakukan terhadap data informasi tersebut. <br>
                                 &emsp;Kami mengumpulkan informasi Anda dengan tujuan untuk mengetahui, menjaga, menganalisa, dan menentukan perencanaan strategi pemasaran rw9ratim.com. <br>
                                 &emsp;Berikut jenis-jenis informasi yang kami kumpulkan:
                              <ol>
                                 <li>Informasi Log <br>
                                    &emsp;Seperti pada kebanyakan web lain, rw9ratim.com menggunakan data log. Data ini digunakan secara keseluruhan hanya untuk mengetahui dan menganalisa penggunaan web rw9ratim.com. <br>
                                    &emsp;Informasi dalam data log meliputi IP Address alamat protolol Anda di Internet, ISP, tanggal/waktu penggunaan, sumber lalu lintas, dan jumlah klik.<br>
                                    &emsp;Informasi ini digunakan untuk menganalisis perilaku, mengelola situs, dan mengumpulkan informasi demografis.
                                 </li>
                                 <li>Informasi Perangkat <br>
                                    &emsp;Kami berkerja sama dengan pihak ketiga dalam mengetahui jenis perangkat yang Anda gunakan. Tujuannya untuk mengetahui, menganalisis dan memastikan sistem serta tampilan website kami bekerja dengan baik untuk semua perangkat. Juga untuk kepentingan pemasaran.
                                 </li>
                                 <li>Cookie dan teknologi serupa <br>
                                    &emsp;rw9ratim.com menggunakan cookie untuk menyimpan informasi tentang pengunjung preferensi dan merekam informasi pengguna tertentu. Misalnya otomatis menempelkan password ketika Anda akan log-in kembali. <br>
                                    &emsp;Akan tetapi kami tidak dan tidak akan menggunakan cookie untuk mengumpulkan informasi pribadi Anda yang tidak ditujukan dan dimaksudkan kepada kami.  
                                 </li>
                                 <li>Informasi pribadi pada akun Anda <br>
                                    &emsp;Anda tidak diwajibkan untuk mengisi informasi pribadi pada akun rw9ratim.com. Akan tetapi jika Anda mengisinya, informasi ini kami kumpulkan untuk mengenal lebih dekat dengan Anda, mengirimkan promo & hadiah serta untuk dan dapat digunakan rw9ratim.com dalam kepentingan pemasaran agar tepat sasaran. <br>
                                    &emsp;Perlu diingat, pada area publik informasi pribadi akun Anda tidak dan tidak akan tampil. Kami hanya menampilkan Nama, Foto, Biografi serta artikel-artikel karya Anda. Kami tidak dan tidak akan membagikan informasi Anda kepada siapapun, terkecuali kepada mitra pemasaran kami.<br>
                                    &emsp;Jika Anda memerlukan informasi lebih lanjut atau memiliki pertanyaan tentang kebijakan privasi kami, jangan ragu untuk menghubungi kami melalui email: info@ rw9ratim.com atau rw9ratim@gmail.com
                                 </li>
                              </ol>
                              </p>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
               <!-- END CONTENT -->
            <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
            @include('frontend.partial.footer')
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