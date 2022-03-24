<footer class="footer container-fluid footer-instituto py-3">
	<div class="row">
		<div class="col-4 center">
  			<p class="text-center sec-footer">
				<span class="circleHaller"><i class="fas fa-envelope"></i></span> haller.vinculacion@gmail.com
  			</p>
		</div>
		<div class="col-4">
			<p class="sec-footer2 text-center">
				<p class="text-center">
					<img src="{{ env('APP_URL') }}/assets/images2022/logo_bco_instihaller.png" width="250px">
				</p>
				<p class="text-center">
					<a href="https://www.facebook.com/InstitutoRafaelHaller/" target="_blank" class="mr-3">
						<img src="{{ env('APP_URL') }}/assets/images/fb_i.png" width="50px">
					</a>
					<a href="https://wa.me/5520057633" target="_blank" class="mr-3">
						<img src="{{ env('APP_URL') }}/assets/images2022/icno_whatsapp_insti_bco.png" width="50px">
					</a>
					<a href="https://www.instagram.com/institutorafael_haller/" target="_blank" class="mr-3">
						<img src="{{ env('APP_URL') }}/assets/images/in_i.png" width="50px">
					</a>
					<a href="https://www.youtube.com/user/institutiohaller" target="_blank" class="mr-3">
						<img src="{{ env('APP_URL') }}/assets/images/yt_i.png" width="50px">
					</a>
				</p>


				{{-- <div class="col-12 text-center mt-4">
					<b style="font-size: 30px; letter-spacing: 3px;">Formando Líderes</b>
					<a href="aviso_privacidad.php" class="no_a"><p style="font-size: 18px;">Aviso de Privacidad</p></a>

				</div> --}}
			</p>
		</div>
		<div class="col-4">
			<p class="text-center sec-footer">
  				55 5876 4279 <span class="circleHaller"> <i class="fas fa-phone"></i></span>
  				<br>
  				55 5876 0149 <span class="circleHaller"><i class="fas fa-phone"></i></span>
  			</p>
		</div>
	</div>
</footer>
<div class="row mt-1" style="background-color: #c72242;">
	<div class="col-md-12 text-center py-1">
		<div style="font-size: 20px; color: #fff;">INSTITUTO RAFAEL HALLER</div>
	</div>
</div>
<div class="row mt-1" style="background-color: #c1c1c1;">
	<div class="col-md-12 text-center py-1" style="background-color: #c1c1c1;">
		<div style="font-size: 20px; color: #193b68;">{{ date('Y') }}</div>
	</div>
</div>



<?php if($active != "HOME") echo "<style> .footer{ position: initial; margin-top: 40px; } </style>"; ?>
