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
                                 <h3 style="color: black;text-align: center;">PANDUAN & BANTUAN MENULIS</h3>
                                 <hr>

                                 <ol type="A">
                                    <li>MENDAFTAR & MASUK AKUN
                                      <ol>
                                        <li>
                                          Jika Anda belum mempunyai akun rw9ratim.com, silahkan mendaftar dengan mengisi formulir pada www.rw9ratim.com/user, lalu klik 'Daftar'. Setelah itu aktivasi akun/email Anda dengan klik link verifikasi kode yang kami kirimkan setelah mendaftar.<br>
                                          Jangan lupa untuk cek juga folder 'spam'. Terkadang link verifikasi kode yang kami kirimkan tidak masuk dalam folder kotak masuk namun ada di folder spam. 
                                        </li>
                                        <li>
                                          Jika Anda sudah memiliki akun rw9ratim.com silahkan masuk dengan mengisikan alamat email yang telah terdaftar beserta password Anda pada www.rw9ratim.com /user, lalu klik 'Masuk'. <br>
                                          Jika Anda lupa password, silahkan klik 'lupa password' dan ikuti perintah yang dikirimkan melalui email Anda.
                                        </li>
                                      </ol>
                                    </li>

                                    <li>MELENGKAPI PROFILE AKUN
                                      <ul>
                                        <li>
                                          Supaya lebih menarik dan dikenal pembaca, maka Anda haruslah menambahkan Nama dan foto profile pada akun Anda.
                                        </li>
                                        <li>
                                          Setelah login, Anda akan melihat Foto, Nama, Artikel, dan Biografi.
                                        </li>
                                        <li>
                                          Anda bisa melengkapi profile dengan cara klik 'Menu' pada pojok kiri atas, lalu klik 'Ubah Profile' (Nama pilihan menu ini hanya akan terlihat ketika Anda sudah berhasil login).
                                        </li>
                                        <li>
                                          Silahkan lengkapi profile Anda berupa Nama, Username, Telepon, Jenis Kelamin, Tanggal Lahir, Kota Kelahiran, Alamat Lengkap dan Foto Profile. Lalu, klik 'Perbarui Data'.
                                        </li>
                                        <li>
                                          Selanjutnya Anda bisa menceritakan secara singkat siapa diri Anda atau hal apa yang Anda sukai, pada kolom 'Biografi'. Letaknya persis di bawah Nama dan Foto Profile Anda.
                                        </li>
                                      </ul>
                                    </li>

                                    <li>MULAI MENULIS ARTIKEL <br>
                                      &emsp;Di kolom Artikel Anda akan menemui tombol 'Buat tulisan sekarang'. Klik tombol tersebut maka Anda akan melihat Tumbnail, Caption, Title Post, Daftar Kategori, Teks Paragraf (Teks Editor), Penambah Text/Image/Video dan Tags. Berikut penjelasannya:
                                        <ol>
                                          <li>
                                            Tumbnail: Gambar/foto yang akan terlihat sebagai tumbnail artikel dan home image artikel (Gambar atas sebelum judul artikel). Ukuran gambar tumbnail ideal 600 x 373 pixel.
                                          </li>
                                          <li>
                                            Caption: Penjelasan singkat tentang apa yang ada pada gambar/foto tumbnail.
                                          </li>
                                          <li>
                                            Title Post: Judul artikel Anda. Usahakan tidak lebih dari 70 karakter supaya lebih menarik dan enak dibaca.
                                          </li>
                                          <li>
                                            Daftar Kategori: Pilihan kategori yang relevan untuk topik artikel Anda.
                                          </li>
                                          <li>
                                            Teks Paragraf: Tempat Anda menulis, mengatur, mengedit atau menempel (paste) teks pada artikel Anda. Untuk menambahkan gambar atau video, Anda bisa klik penambah gambar (Image) atau penambah video (Video) yang terletak persis dibawah Teks Paragraf.
                                          </li>
                                          <li>
                                            Penambah Teks/Text: Untuk menambahkan text lanjutan yang terjeda oleh gambar/video.
                                          </li>
                                          <li>
                                            Penambah Gambar/Image: Untuk menambahkan atau upload Gambar/Image dari komputer Anda.
                                          </li>
                                          <li>
                                            Penambah Video: Untuk menambahkan video dari YouTube.
                                          </li>
                                          <li>
                                            Tags: Tempat untuk mengelompokkan artikel Anda dengan artikel lain berdasarkan topik terkait. <br>
                                            &emsp;Tags rw9ratim.com fungsinya hampir sama dengan Hashtag pada Facebook, Instagram, atau Twitter. Hanya saja jika pada Facebook, Instagram atau Twitter menggunakan tanda pagar (#) di depan kata, sedangkan di rw9ratim.com Anda cukup memisahkan antar Tags (kata) dengan tanda koma (,). <br>
                                            &emsp;Contohnya ketika Anda menuliskan artikel tentang Tokoh Masyarakat: Saifullah Yusuf (Gus Ipul). Pada Tags Anda bisa mengisi: Gus Ipul, Saifullah Yusuf, Wakil Gubernur Jawa Timur, Pemprov Jatim, Berita Gus Ipul, atau Nasihat dari Gus Ipul.
                                          </li>
                                          <li>
                                            Tombol 'Publish Post': Tombol ini untuk menayangkan artikel yang telah selesai Anda tulis dan siap diupload.
                                          </li>
                                          <li>
                                            Tombol 'Simpan ke Draft': Tombol ini untuk menyimpan draft atau konsep artikel Anda yang belum selesai atau belum siap diupload, dan akan Anda lanjutkan dan selesaikan atau upload dikemudian hari.
                                          </li>
                                        </ol>
                                        &emsp;Mohon diperhatikan :
                                          <ol>
                                            <li>
                                              Untuk menambah gambar di tengah-tengah tulisan, Anda bisa menulis dulu tulisan sebelum gambar, setelah itu tambahkan gambar (Image) dan selanjutnya tambahkan Teks Paragraf kembali (Text) untuk menuliskan teks setelah gambar.
                                            </li>
                                            <li>
                                              Menambahkan video menggunakan kode Embed bukan alamat url video. Caranya cukup mudah. Setelah Anda menemukan video pada YouTube, buka atau lihatlah. <br>
                                              &emsp;Saat video diputar, klik kanan, lalu pilih 'Copy Embed Code' atau jika dalam Bahasa Indonesia bernama 'Salin Kode Embed'. Lalu, pastekan di tempat penambahan video Anda.
                                            </li>
                                          </ol>
                                    </li>

                                    <li>MANAJEMEN ARTIKEL
                                      <ul>
                                        <li>
                                          Anda dapat melihat mengedit, menghapus, meneruskan atau mengunggah artikel konsep Anda melalui menu ini.
                                        </li>
                                        <li>
                                          Caranya klik tombol'Menu' di pojok kiri atas lalu klik 'Manajemen Artikel' (Nama pilihan menu ini hanya akan terlihat ketika Anda sudah berhasil login).
                                        </li>
                                        <li>
                                          Didalam menu ini Anda juga dapat melihat berapa orang yang sudah membaca artikel Anda.
                                        </li>
                                      </ul>
                                    </li>

                                    <li>MENGGANTI PASSWORD AKUN
                                      <ul>
                                        <li>
                                          Untuk alasan keamanan, Anda dapat mengubah password login akun Anda sewaktu-waktu.
                                        </li>
                                        <li>
                                          Caranya, Anda klik tombol 'Menu' di pojok kiri atas lalu klik 'Ubah Password' (Nama pilihan menu ini hanya akan terlihat ketika Anda sudah berhasil login).
                                        </li>
                                        <li>
                                          Masukkanlah password lama Anda pada kolom 'Password Sekarang'. Lalu, tuliskan password baru pada kolom 'Password Baru' dan ulangi password baru pada kolom 'Ulangi Password Baru', klik 'Perbarui Data'.
                                        </li>
                                      </ul>
                                    </li>
                                 </ol>                              
                                
                                <h4 style="text-align: center;"> SELAMAT ANDA SUDAH MENJADI JURNALIS! </h4>

                                <hr>
                                <p> &emsp;Nah itu tadi panduan lengkap menulis di rw9ratim.com. <br>
                                    &emsp;Jika Anda membutuhkan bantuan, silahkan 
                                    kirim email ke: 
                                    <br>&emsp;&emsp;<a href="#">info@ rw9ratim.com</a> / <a href="#">rw9ratim@gmail.com</a>. 
                                </p>

                                <h5 style="text-align: center;"> Kami sangat senang membantu Anda. </h5>
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