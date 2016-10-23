<?php
session_start()

?>

<!DOCTYPE html>
<html lang="en-US">
	<head>
		<title>PALCAR - Palembang Car Rental</title>
		<link rel="shortcut icon" type="image/x-icon" href="images/favicon.ico" />
		<meta http-equiv="content-type" content="text/html; charset=UTF-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link rel="stylesheet" href="css/jquery-ui.css" type="text/css" media="all" />		
		<link rel="stylesheet" href="css/style.css" type="text/css" media="all" />
		<link rel="stylesheet" href="css/jquery.slider.min.css" />	
		<!--[if IE]>
		<script type="text/javascript" src="js/html5.js"></script>
		<link rel="stylesheet" id="stylesheet-ie" href="css/css_ie.css" type="text/css" media="all" />
		<![endif]-->
	</head>
	<body class="page page-two-column no-main-form">
		<div id="conteiner">
			<div id="branding">
				<div id="branding-content">
					
					<div class="title-content">
						<a href="03-home-v3.html" title="">
							<img class="site-logo" src="images/thumb.png" alt="" />
							<h1 class="site-title">
							PALCAR								
							</h1>
						</a>								
					</div>					
					<div class="access-content">
						<label for="menu-icon" class="menu-icon"><img src="images/menu.png" alt="menu" /></label>
						<input type="checkbox" id="menu-icon" value="1" />					
						<ul>
							<li class="menu-close">
								<span>&#10006;</span>
							</li>
							<li class="current_page_item menu-item-has-children">
								<a href="03-home-v3.html" title="">Home</a>
							</li>
							<li><span class="sign_in"><a class="tab_link_button" href="#sign_in" title="">Atur Reservasi</a></span></li>
							<li><a href="08-confirm.html" title="">Konfirmasi Pembayaran</a></li>
							<li><a href="10-faq.html" title="">FAQ</a></li>
						</ul>
					
					</div><!-- .access -->	
									
				</div><!-- #branding-content -->
				<div class="clear"></div>
			</div><!-- #branding -->
			<div id="progress-bar">
				<div id="progress-bar-steps">
					<div class="progress-bar-step done">
						<div class="step_number">1</div>
						<div class="step_name">Pilih tanggal</div>
						<div class="clear"></div>
					</div>
					<div class="progress-bar-step done">
						<div class="step_number">2</div>
						<div class="step_name">Pilih mobil</div>
						<div class="clear"></div>
					</div>
					<div class="progress-bar-step done">
						<div class="step_number">3</div>
						<div class="step_name">Informasi Penyewa</div>
						<div class="clear"></div>
					</div>
					<div class="progress-bar-step current">
						<div class="step_number">4</div>
						<div class="step_name">Buat Pesanan</div>
						<div class="clear"></div>
					</div>
				</div>
				<div class="clear"></div>
			</div>				
			<div id="main">				
				<div id="primary">
					<aside id="secondary" class="sidebar-left">	
						<div class="widget">
							<h3 class="widget-title">
								<img src="images/order_info.png" alt="" />
								Order Info
							</h3>
							<h4>
								Car
								<a href="04-choose-car.html" title="">Edit</a>
							</h4>
							<div class="widget-content main-block product-widget-mini">								
								<div class="product-img">
									<img src="http://placehold.it/105x55" alt="" />
								</div>
								<div class="product-info">
									<div class="entry-format">
										<div>Ford Escape</div>
										<span>Economy</span>
									</div>
									<div class="features">
										<p><img src="images/passenger-icon.png" alt="" /> 5 passengers</p>
										<p><img src="images/suitcase-icon.png" alt="" /> 3 large suitcases, 2 small suitcase</p>
										<p><img src="images/transmission-icon.png" alt="" /> automatic transmission</p>
										<p><img src="images/air-icon.png" alt="" /> air conditioning</p>
										<p><img src="images/km_l-icon.png" alt="" /> 9 km/l</p>						
									</div>
									<div class="details">
										<div class="view-details">[+] View car details</div>
										<div class="close-details">[-] Close car details</div>
										<ul class="details-more">
											<li>6-speaker radio/CD system</li>
											<li>Escaro black fabric</li>
											<li>Hybrid System display</li>
											<li>Vehicle Stability Control</li>
											<li>Hill-start Assist Control</li>										
										</ul>
									</div>
								</div>
								</div>
							<h4>
								Date &amp; Location
								<a href="01-home-v1.html" title="">Edit</a>
							</h4>
							<div class="widget-content widget-info">									
								<h4>Pick Up time</h4>
								<p>Wed, 06 Mar, 2013 at 10:00</p>
								<h4>Return time</h4>
								<p>Thu, 21 Mar, 2013 at 10:00</p>
								<h4>Pickup and Return Location</h4>
								<p>New York City JFK Airport</p>
								<div class="subtotal_content">
									<div class="subtotal">										
										Subtotal: <span class="price">$3568.00</span>
									</div>
								</div>
							</div>
							<h4>
								Extras
								<a href="05-choose-extras.html" title="">Edit</a>
							</h4>
							<div class="widget-content widget-extras">								
								<p>Infant Child Seats x 2 <span class="price">$200.00</span></p>
								<p>NeverLost <span class="price">$129.99</span></p>
							</div>
							<div class="widget-footer widget-footer-total">
								Total: <span class="price">$3897.99</span>
							</div>
						</div>															
					</aside>		
					<div id="content" class="sidebar-middle2">
						<form action="paymenttt.php" class="complete_reservation">
							<div class="widget main-widget">
								<div class="widget-title">
									<div>
										<img src="images/list.png" alt="" />
										Opsi Pembayaran
									</div>
									<div class="clear"></div>	
								</div>
								<h4>Catatan</h4>
								<div class="widget-content widget-note">	
									<h4>Setelah mengisi form pembayaran, Anda akan mendapatkan:</h4>							
									<ul>
										<li>Nomor referensi sebagai nomor unik digit terakhir saat pembayaran</li>
										<li>Bukti penyewaan untuk diproses di Rental Mobil Sinar Bahagia</li>
									</ul>
								</div>
								<h4>Bank Transfer</h4>
								<div class="widget-content personal_info">
									<div class="form_element">
										<div>Card Type</div>
										
								<div class="shortcode_radio">
								<label class="">
  <input checked="checked" type="radio" name="shortcode_radio" value="1" />
  <i></i> <img src="images/mandiri.jpg" alt="" />
  &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
</label>
<label class="shortcode_radio">
  <input checked="checked"type="radio" name="shortcode_radio" value="1" />
  <i></i>  <img src="images/bni.jpeg" alt="" />
  &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
  
</label>
<label class="shortcode_radio">
  <input checked="checked"type="radio" name="shortcode_radio" value="1" />
  <i></i>  <img src="images/bca.jpg" alt="" />
</label>
</div>
									</div>
									<br>
									<div class="form-block form-submit">
								<input class="orange_button form-continue" type="submit" value="Lanjut"/>
							</div>
									<div class="clear"></div>
								</div>
																															
							</div>
							
						</form>
					</div>									
					<div class="clear"></div>
				</div>	
			</div>
			<div class="clear"></div>
			<footer id="footer">			
				<div id="footer-menu">
					<div class="footer-content">
						<div class="footer-navbar">
							<div class="footer-nav">
								<h3 class="widget-title">PALCAR</h3>
								<ul>
									<li><a href="03-home-v3.html" title="">Home</a></li>
									<li><a href="11-ketentuan.html" title="">Syarat dan Ketentuan</a></li>
									<li><a href="12-kebijakan.html" title="">Kebijakan Privasi</a></li>
								</ul>
							</div>
							<div class="footer-nav">
								<h3 class="widget-title">About</h3>
								<ul>
									<li><a href="13-about.html" title="">Tentang PALCAR</a></li>
								</ul>
							</div>
							<div class="footer-nav">
								<h3 class="widget-title">Support</h3>
								<ul>
									<li><a href="14-contact.html" title="">Hubungi Kami</a></li>
									<li><a href="10-faq.html" title="">FAQ</a></li>
								</ul>
							</div>
						</div>
						<div class="custom-info footer-widget-single">
 							<div class="support">
	 							<img src="images/support-icon.png" alt="" />
	 							<div>
		 							<div class="title">Online support</div>
									<div class="phone">(0711) 9161986</div>
		 							<div class="email"><a href="#" title="">palcar@gmail.com</a></div>
		 						</div>
		 						<div class="clear"></div>
	 						</div>
							</div>
						<div class="clear"></div>
					</div><!-- .footer-content -->
				</div>
				<div id="footer-content">
					<img class="site-logo" src="images/thumb.png" alt="" />
					<h1 class="site-title">PALCAR</h1>			
					<div class="company-name">Jl. Veteran No.73A, 20 Ilir D. I, Ilir Tim. I, Kota Palembang, Sumatera Selatan 30114</div></div><!-- #footer-content -->
			</footer>
		</div><!--end:conteiner-->
		<div id="overlay_block"></div>
		<div class="admin-form-content sign_register_block">
			<div class="admin-form-block">
	 			<form class="main-form admin-form" action="07-manage.html">	
	 				<div class="main_form_navigation">
		 				<div id="tab_sign_in" class="title-form current"><span class="sign_in"><a href="#sign_in" title="">Atur Reservasi</a></span></div>	
					</div>		
					
					<div id="tab_sign_in_content" class="content-form">
						<div>
							<input id="sign_in_email" class="input_placeholder" type="email" value="" placeholder="No Reservasi" name=""/>
						</div>
						<input class="admin-form-submit orange_button" type="submit" value="Continue"/>
						
					</div>
					
					<div class="clear"></div>
				</form>				
			</div>
		</div>
		<script type="text/javascript" src="js/jquery-1.11.3.min.js"></script>
		<script type="text/javascript" src="js/jquery-migrate-1.2.1.min.js"></script>
		<script type="text/javascript" src="js/jquery-ui.js"></script>			
		<!--[if IE]>
		<script type="text/javascript" src="js/placeholder_ie.js"></script>
		<![endif]-->
		<script type="text/javascript" src="js/custom-form-elements.js"></script>
		<script type="text/javascript" src="js/jquery.selectbox-0.2.min.js"></script>
		<script type="text/javascript" src="js/script.js"></script>
	</body>
</html>