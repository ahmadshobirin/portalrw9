<div class="footer-bottom">
	<div class="row">
		<div class="col-xs-12 col-sm-7 col-md-7 col-lg-7">
			<div class="design">
				 <a href="{{url('tentang-kami')}}">Tentang Kami </a> |  
				 <a href="{{url('manajemen-redaksi')}}">Manajemen dan Redaksi</a> |
				 <a href="{{url('pedoman-media-cyber')}}">Pedoman Media Cyber</a> |
				 <a href="{{url('ketentuan-layanan')}}">Ketentuan Layanan</a>
			</div>
		</div>

		<div class="col-xs-12 col-sm-5 col-md-5 col-lg-5">
			<div class="copyright">
				@if(date('Y') == 2017)
					© 2017 PortalRw9 All rights reserved
				@else
					© 2017 - {{date('y')}} PortalRw9
				@endif
			</div>
		</div>
	</div>
</div>