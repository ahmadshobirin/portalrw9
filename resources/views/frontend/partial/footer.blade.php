
<footer class="footer-bottom">
        <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 design">
				<div class="col-md-2 col-sm-2 col-xs-2 col-lg-2">
				 	<a href="{{url('tentang-kami')}}">Tentang Kami </a>
				</div>
				<div class="col-md-2 col-sm-2 col-xs-2 col-lg-2">
				 	<a href="{{url('manajemen-redaksi')}}">Manajemen dan Redaksi</a> 
				</div>
				<div class="col-md-2 col-sm-2 col-xs-2 col-lg-2">
				 	<a href="{{url('pedoman-media-cyber')}}">Pedoman Media Cyber</a> 
				</div>
				<div class="col-md-2 col-sm-2 col-xs-2 col-lg-2">
				 	<a href="{{url('ketentuan-layanan')}}">Ketentuan Layanan</a>
				</div>
				<div class="col-md-2 col-sm-2 col-xs-2 col-lg-2">
				 	<a href="{{url('kebijakan-privasi')}}">Ketentuan & Kebijakan Privasi</a>
				</div>
				<div class="col-md-2 col-sm-2 col-xs-2 col-lg-2">
				 	<a href="{{url('panduan-dan-bantuan-menulis')}}">Panduan & Bantuan Menulis</a>
				</div>
		</div>
            <div class="clearfix visible-sm-block"></div>
            <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12" id="copyright">
				@if(date('Y') == 2017)
					© 2017 PortalRw9 All rights reserved
				@else
					© 2017 - {{date('y')}} PortalRw9
				@endif
		</div>
            
        </div>
</footer>