
<footer class="footer-bottom">
        <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 design">
         <a href="{{url('tentang-kami')}}">
            <div class="col-md-2 col-sm-2 col-xs-6 col-lg-2" id="borderR">
               Tentang Kami 
            </div>
         </a>
         <a href="{{url('manajemen-redaksi')}}">
            <div class="col-md-2 col-sm-2 col-xs-6 col-lg-2">
               Manajemen dan Redaksi
            </div>
         </a>
         <a href="{{url('pedoman-media-cyber')}}">
            <div class="col-md-2 col-sm-2 col-xs-6 col-lg-2" id="borderR">
               Pedoman Media Cyber
            </div>
         </a>
         <a href="{{url('ketentuan-layanan')}}">
            <div class="col-md-2 col-sm-2 col-xs-6 col-lg-2">
               Ketentuan Layanan
            </div>
         </a>
         <a href="{{url('kebijakan-privasi')}}">
            <div class="col-md-2 col-sm-2 col-xs-6 col-lg-2" id="borderR">
               Kebijakan Privasi
            </div>
         </a>
         <a href="{{url('panduan-dan-bantuan-menulis')}}">
            <div class="col-md-2 col-sm-2 col-xs-6 col-lg-2" style="padding-left: 0;padding-right: 0;">
               Panduan & Bantuan Menulis
            </div>
         </a>
      </div>
      <div class="clearfix visible-sm-block"></div>
            <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12" id="copyright">
                Sponsored by <a href="http://qqltech.com/" target="_blank"><img src="{{asset('assets/img/logo-ql.jpg')}}" height="30px"></a> & <a href="http://www.traveljinni.com/" target="_blank"><img src="{{asset('assets/img/traveljinni-logo.png')}}" height="30px"></a><br>
				@if(date('Y') == 2017)
					© 2017 PortalRw9 All rights reserved
				@else
					© 2017 - {{date('y')}} PortalRw9
				@endif
		</div>
            
        </div>
</footer>