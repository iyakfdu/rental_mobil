<!DOCTYPE html>
<html lang="en-US">
	<head>
		<title>PALCAR - Palembang Car Rental</title>
		<link rel="shortcut icon" type="image/x-icon" href="images/favicon.ico" />
		<meta http-equiv="content-type" content="text/html; charset=UTF-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link rel="stylesheet" href="css/jquery-ui.css" type="text/css" media="all" />		
		<link rel="stylesheet" href="css/style.css" type="text/css" media="all" />
		<link rel="stylesheet" href="css/style2.css" type="text/css" media="all" />
		<link href="css/style2.css" rel="stylesheet">
		<!--[if IE]>
		<script type="text/javascript" src="js/html5.js"></script>
		<link rel="stylesheet" id="stylesheet-ie" href="css/css_ie.css" type="text/css" media="all" />
		<![endif]-->
		
		<script type="text/javascript">
			function makeTwoChars(inp) {
					return String(inp).length < 2 ? "0" + inp : inp;
			}

			function initialiseInputs() {
					// Clear any old values from the inputs (that might be cached by the browser after a page reload)
					document.getElementById("sd").value = "";
					document.getElementById("ed").value = "";

					// Add the onchange event handler to the start date input
					datePickerController.addEvent(document.getElementById("sd"), "change", setReservationDates);
			}

			var initAttempts = 0;

			function setReservationDates(e) {
					// Internet Explorer will not have created the datePickers yet so we poll the datePickerController Object using a setTimeout
					// until they become available (a maximum of ten times in case something has gone horribly wrong)

					try {
							var sd = datePickerController.getDatePicker("sd");
							var ed = datePickerController.getDatePicker("ed");
					} catch (err) {
							if(initAttempts++ < 10) setTimeout("setReservationDates()", 50);
							return;
					}

					// Check the value of the input is a date of the correct format
					var dt = datePickerController.dateFormat(this.value, sd.format.charAt(0) == "m");

					// If the input's value cannot be parsed as a valid date then return
					if(dt == 0) return;

					// At this stage we have a valid YYYYMMDD date

					// Grab the value set within the endDate input and parse it using the dateFormat method
					// N.B: The second parameter to the dateFormat function, if TRUE, tells the function to favour the m-d-y date format
					var edv = datePickerController.dateFormat(document.getElementById("ed").value, ed.format.charAt(0) == "m");

					// Set the low range of the second datePicker to be the date parsed from the first
					ed.setRangeLow( dt );
					
					// If theres a value already present within the end date input and it's smaller than the start date
					// then clear the end date value
					if(edv < dt) {
							document.getElementById("ed").value = "";
					}
			}

			function removeInputEvents() {
					// Remove the onchange event handler set within the function initialiseInputs
					datePickerController.removeEvent(document.getElementById("sd"), "change", setReservationDates);
			}

			datePickerController.addEvent(window, 'load', initialiseInputs);
			datePickerController.addEvent(window, 'unload', removeInputEvents);

			//]]>
		</script>

			<!--sa error trapping-->
		<script type="text/javascript">
			function validateForm()
			{
			var x=document.forms["index"]["start"].value;
			if (x==null || x=="")
			  {
			  alert("Pilih tanggal mulai sewa ");
			  return false;
			  }
			var y=document.forms["index"]["end"].value;
			if (y==null || y=="")
			  {
			  alert("Pilih tanggal akhir sewa");
			  return false;
			  }
			}
		</script>
		
	</head>
	<body class="center-slider one-column middle-sidebar">
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
							<li class="current_page_item">
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
			<div id="slider">
				<div id="slider-img">
					<ul class="slides">
					    <li><img src="img/slide1.jpg" alt="" /></li>
						<li><img src="img/slide2.jpg" alt="" /></li>
						<li><img src="img/slide3.jpg" alt="" /></li>
						<div id="slider-pattern"></div>
					</ul>
				</div>
				<div id="slider-content">
					<div id="slider-post">
						<div class="post">
							<div class="entry-header">
								<h3 class="entry-format">Great car hire deals.</h3>
								<div class="entry-content">Phasellus eget ultricies libero. Sed dolor turpis, malesuada vitae cursus a, auctor semper neque.</div>
							</div>	
						</div>		
					</div>	
					<form action="04-choose-car.php" method="post" name="index" class="main-form" id="slider-form" onsubmit="return validateForm()">
						<div class="main_form_navigation">
							<div id="book_car" class="title-form current"><a href="#" title="">Sewa Mobil</a></div>
						</div>
						<div id="book_car_content" class="content-form">
								<div class="form-block pick-up">
										  <h4>Tanggal sewa</h4>
											<div class="form-block drop-off">
											  <h4>Tanggal kembali</h4>
											  <div class="clear">
												<input class="orange_button form-continue" type="submit" name="" value="Lanjut"/>
											  </div>
													<input class="datepicker" type="date" name="end" id="ed" value="" readonly />
											  
											  <div class="clear"></div>
											</div>
											<input class="datepicker" type="date" value="" name="start" id="sd" readonly />
											
											<div class="clear"></div>	
								</div>
								<div class="clear"></div>
						</div>
						<div class="clear"></div>
					</form>
					<div class="clear"></div>
				</div>		
			</div><!-- #slider -->
			<div id="main">
				<div id="primary">			
					<div id="secondary" class="features">
						<div class="feature-single">
							<img class="feature-title-img" src="images/2-icon.png" alt="" /><div class="feature-title">Dedicated customer support</div>
							<div>Praesent tempus egestas blandit. Nunc euismod volutpat ultrices. Nam fermentum nibh eget mi vehicula dictum.</div>
						</div>						
						<div class="feature-single">
							<img class="feature-title-img" src="images/1-icon.png" alt="" /><div class="feature-title">Special low rates on car booking</div>
							<div>Nunc ut nibh enim, id dapibus quam. Mauris id est at diam rutrum ultricies. Vivamus et dolor velit. Nam congue blandit nulla sed tincidunt.</div>
						</div>						
						<div class="feature-single">
							<img class="feature-title-img" src="images/3-icon.png" alt="" /><div class="feature-title">Manage your booking online</div>
							<div>Aliquam erat volutpat. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas.</div>
						</div>
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
					<div class="company-name"><b>Jl. Veteran No.73A, 20 Ilir D. I, Ilir Tim. I, Kota Palembang, Sumatera Selatan 30114<div></div><!-- #footer-content -->
			</footer><!--end:footer-->
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
		<script type="text/javascript" src="js/jquery.blueberry.js"></script>
		<script type="text/javascript" src="js/script.js"></script>
		
	</body>
</html>