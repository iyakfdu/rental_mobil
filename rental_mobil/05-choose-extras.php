<?php
session_start();

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
		<!--[if IE]>
		<script type="text/javascript" src="js/html5.js"></script>
		<link rel="stylesheet" id="stylesheet-ie" href="css/css_ie.css" type="text/css" media="all" />
		<![endif]-->
	<script language="javascript" type="text/javascript">
	function showHide(shID) {
		if (document.getElementById(shID)) {
			if (document.getElementById(shID+'-show').style.display != 'none') {
				document.getElementById(shID+'-show').style.display = 'none';
				document.getElementById(shID).style.display = 'block';
			}
			else {
				document.getElementById(shID+'-show').style.display = 'inline';
				document.getElementById(shID).style.display = 'none';
			}
		}
	}
	</script>
	<script type="text/javascript">
	function validateForm()
	{

	
	var b=document.forms["personal"]["nama"].value;
	var f=document.forms["personal"]["email"].value;
	var c=document.forms["personal"]["telp"].value;
	var d=document.forms["personal"]["alamat"].value;
	var e=document.forms["personal"]["kota"].value;
	var g=document.forms["personal"]["umur"].value;

	var atpos=f.indexOf("@");
	var dotpos=f.lastIndexOf(".");
	if (atpos<1 || dotpos<atpos+2 || dotpos+2>=f.length)
	  {
	  alert("Email tidak valid");
	  return false;
	  }
	if (b==""|| c=="" || d=="" || e=="" || f=="" || g=="")
	  {
	  alert("Terdapat field kosong");
	  return false;
	  }
	 
	}
	</script>
	</head>
	<body class="page page-two-column">
	<div style="display:none;">
	<?php
		
		$tglsewa = $_POST['start'];
		$tglkembali = $_POST['end'];
		$no_mobil = $_POST['no_mobil'];
		$kodemobil = $_POST['kodemobil'];
		$result = $_POST['result'];
		
				
	?>
	</div>
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
					<div class="progress-bar-step current">
						<div class="step_number">3</div>
						<div class="step_name">Informasi penyewa</div>
						<div class="clear"></div>
					</div>
					<div class="progress-bar-step">
						<div class="step_number">4</div>
						<div class="step_name">Buat pesanan</div>
						<div class="clear"></div>
					</div>
				</div>
				<div class="clear"></div>
			</div>				
			<div id="main">
				<form action="#" class="main-form disabled_form">						
					<div id="book_car" class="title-form current">
						<span>
							<img src="images/edit_location.png" alt="" />
							Ubah Lokasi &amp; Tanggal
						</span>
					</div>					
					<div id="book_car_content" class="content-form ">						
						<div class="form-block pick-datetime">
							<div class="form-block pick-up disabled">
								<h4>Tanggal sewa</h4>
								<input class="datepicker" type="date" value="<?php echo $tglsewa; ?>" name="start" disabled="disabled"/>
								
								<div class="clear"></div>
							</div>
							<div class="form-block drop-off disabled">
								<h4>Tanggal kembali</h4>
								<input class="datepicker" type="date" name="end" value="<?php echo $tglkembali; ?>" disabled="disabled"/>
								
								<div class="clear"></div>
							</div>
						</div>
						<div class="form-block form-submit">
							<input class="form-edit orange_button" type="submit" value="Ubah"/>
						</div>
						<div class="clear"></div>
					</div>					
					<div class="clear"></div>
				</form>	
				<div id="primary">	
					<aside id="secondary" class="sidebar-left">	
						<div class="widget">
							<h3 class="widget-title">
								<img src="images/order_info.png" alt="" />
								Order Info
							</h3>
							<h4>
								Mobil
								<a href="04-choose-car.html" title="">Ubah</a>
							</h4>
							<div class="widget-content main-block product-widget-mini">								
								<div class="product-img">
									<img src="http://placehold.it/105x55" alt="" />
								</div>
								<div class="product-info">
									<div class="entry-format">
										<div>Toyota</div>
									</div>
									<div class="features">
										<p><img src="images/passenger-icon.png" alt="" /><?php echo $penumpang; ?></p>
										<p><img src="images/suitcase-icon.png" alt="" /><?php echo $bagasi; ?></p>
										<p><img src="images/transmission-icon.png" alt="" /><?php echo $transmisi; ?></p>
										<p><img src="images/air-icon.png" alt="" /> Air Conditioning</p>
										<p>jumlah mobil : <?php echo $no_mobil; ?></p>
										<p>kode mobil: <?php echo $kodemobil; ?></p>
										<p>jumlah hari: <?php echo $result; ?></p>
									</div>
								</div>
								</div>
							<h4>
								Tanggal
								<a href="index.php" title="">Ubah</a>
							</h4>
							<div class="widget-content widget-info">									
								<h4>Tanggal Sewa</h4>
								<p><?php echo $tglsewa; ?></p>
								<h4>Tanggal Kembali</h4>
								<p><?php echo $tglkembali; ?></p>
							</div>
							<div class="widget-footer widget-footer-total">
								Tarif: <span class="price"><?php echo $tarif; ?></span>
							</div>
						</div>															
					</aside>
					
					<div id="content" class="sidebar-middle2">
						<form action="payment.php" method="post" onsubmit="return validateForm()" name="personal">
				
							  <input name="start" type="hidden" value="<?php echo $tglsewa; ?>" />
							  <input name="end" type="hidden" value="<?php echo $tglkembali; ?>" />
							  <input name="n_mobil" type="hidden" value="<?php echo $no_mobil; ?>" />
							  <input name="kd_mb" type="hidden" value="<?php echo $kodemobil; ?>" />
							  <input name="result" type="hidden" value="<?php echo $result; ?>" />
						
							<div class="widget main-widget product-widget main-widget-3column">
								<div class="widget-title">
									<div>
										<img src="images/list.png" alt="" />
										Informasi pribadi
									</div>
									<div class="clear"></div>	
								</div>
								<div class="widget-content">
										
										<div class="form_element">
											<div>Nama </div>
											<input type="text" value="" name="nama"/>
										</div>
										<div class="clear"></div>
										<div class="form_element">
											<div>Email</div>
											<input type="email" value="" name="email"/>
										</div>
										<div class="form_element">
											<div>Telepon</div>
											<input type="text" value="" name="telp"/>
										</div>
										<div class="clear"></div>
										<div class="form_element2">
											<div>Alamat</div>
										<input type="text" value="" name="alamat"/>
										</div>
										<div class="clear"></div>
										<div class="form_element">
											<div>Kota</div>
											<input type="text" value="" name="kota"/>
										</div>
										<div class="form_element">
											<div>Umur</div>
											<input type="text" value="" name="umur"/>
										</div>
										<div class="clear"></div>
									</div>	
										<div class="clear"></div>
								</div>							
							</div>
							<div class="next_page">
								<input class="continue_button blue_button" type="submit" name="but" value="Lanjut" />
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
		<script type="text/javascript" src="js/jquery.meio.mask.js"></script>
		<script type="text/javascript" src="js/jquery.selectbox-0.2.min.js"></script>
		<script type="text/javascript" src="js/script.js"></script>
	</body>
</html>