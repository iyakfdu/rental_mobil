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
		
<?php	
	$tglsewa = $_POST['start'];
	$tglkembali = $_POST['end'];
?>
		
<script type="text/javascript">
function validateForm()
{

var y=document.forms["mobil"]["no_mobil"].value;

if ((y==null || y==""))
  {
  alert("isi semua field");
  return false;
  }


/*if (b>a)
  {
  alert("dfdfdfdfdfdfdf");
  return false;
  }*/

}
</script>
<!--sa minus date-->
<script type="text/javascript">
	// Error checking kept to a minimum for brevity
 
	function setDifference(frm) {
	var dtElem1 = frm.elements['start'];
	var dtElem2 = frm.elements['end'];
	var resultElem = frm.elements['result'];
	 
// Return if no such element exists
	if(!dtElem1 || !dtElem2 || !resultElem) {
return;
	}
	 
	//assuming that the delimiter for dt time picker is a '.'.
	var x = dtElem1.value;
	var y = dtElem2.value;
	var arr1 = x.split('.');
	var arr2 = y.split('.');
	 
// If any problem with input exists, return with an error msg
if(!arr1 || !arr2 || arr1.length != 3 || arr2.length != 3) {
resultElem.value = "Invalid Input";
return;
	}
	 
var dt1 = new Date();
dt1.setFullYear(arr1[2], arr1[1], arr1[0]);
var dt2 = new Date();
dt2.setFullYear(arr2[2], arr2[1], arr2[0]);

resultElem.value = (dt2.getTime() - dt1.getTime()) / (60 * 60 * 24 * 1000);
}
</script>

<SCRIPT language=Javascript>
      <!--
      function isNumberKey(evt)
      {
         var charCode = (evt.which) ? evt.which : event.keyCode
         if (charCode > 31 && (charCode < 48 || charCode > 57))
            return false;

         return true;
      }
      //-->
   </SCRIPT>
   
	</head>
	<body class="page page-two-column">
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
					<div class="progress-bar-step current">
						<div class="step_number">2</div>
						<div class="step_name">Pilih mobil</div>
						<div class="clear"></div>
					</div>
					<div class="progress-bar-step">
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
				<form id="slider-form" action="04-choose-car.html" class="main-form">		
					<div id="book_car" class="title-form current">
						<span>
							<img src="images/search.png" alt="" />
							Pencarian mobil:
						</span>
					</div>
					<div id="book_car_content" class="content-form ">
						<div class="form-block pick-datetime">
							<div class="form-block pick-up">
								<h4>Tanggal sewa</h4>
								<input class="datepicker" type="date" value="<?php echo $tglsewa; ?>" name="start"/>
								
								<div class="clear"></div>	
							</div>							
							<div class="form-block drop-off">
								<h4>Tanggal kembali</h4>
								<input class="datepicker" type="date" name="end" value="<?php echo $tglkembali; ?>"/>
								
								<div class="clear"></div>			
							</div>
						</div>
						<div class="form-block form-submit">
							<input class="orange_button2 form-update" type="submit2" value="Update"/>
						</div>
						<div class="clear"></div>
					</div>					
					<div class="clear"></div>
				</form>	
				<div id="primary">
					<aside id="secondary" class="sidebar-left">	
																					
					</aside>
					<div id="content2" class="sidebar-middle">
						<div class="widget main-widget product-widget">
							<div class="content-overlay">
								<img class="ajax-loader" src="images/ajax-loader.gif" alt="" />
							</div>
							
							<form action="05-choose-extras.php" method="post" onsubmit="return validateForm()" name="mobil">
							  <input name="start" type="hidden" value="<?php echo $tglsewa; ?>" />
							  <input name="end" type="hidden" value="<?php echo $tglkembali; ?>" />
							  
								<div class="widget-title">
									<div>
										<img src="images/list.png" alt="" />
										Hasil <span>(10 dari 24)</span>
									</div>
									<div class="widget-title-sort"><span class="viev-all">Urutkan berdasarkan: </span> <a href="#" title="" class="current">Harga Termurah</a> | <a href="#" title="">Harga Tertinggi</a></div>
									<div class="clear"></div>	
								</div>
								<label style="margin-left: 119px;">Jumlah Mobil: </label><INPUT id="txtChar" onkeypress="return isNumberKey(event)" type="text" name="no_mobil" class="ed">
 
								<?php
								$con = mysql_connect("localhost","root","");
								if (!$con)
								  {
								  die('Could not connect: ' . mysql_error());
								  }

								mysql_select_db("db_rental", $con);

								$result = mysql_query("SELECT * FROM tb_mobil");

								while($row = mysql_fetch_array($result))
								  {
								  $a=$row['kode_mobil'];
								  $query = mysql_query("SELECT sum(qty_reserve) FROM tb_mobilsewa where tgl_sewa <= '$tglsewa' and tgl_kembali >= '$tglkembali' and kode_mobil='$a'");
								while($rows = mysql_fetch_array($query))
								  {
								  $inogbuwin=$rows['sum(qty_reserve)'];
								  }
								  $angavil = $row['qty'] - $inogbuwin;
								  
								  echo '<div class="post">';
									echo '<div class="main-block_container">';
										echo '<div class="main-block">';
											echo '<div class="product-img">';
											echo '<img src=img/' .$row["foto"]. '>';
												echo '</div>';
											echo '<div class="product-info">';
												echo '<h3 class="entry-format">' .$row["brand"].'&nbsp;'.$row["model"]. '</h3>';
												echo '<div class="features">';
													echo '<p><img src="images/passenger-icon.png" alt="" />&nbsp;' .$row["penumpang"]. '</p>';
													echo '<p><img src="images/suitcase-icon.png" alt="" />&nbsp;' .$row["bagasi"]. '</p>';
													echo '<p><img src="images/transmission-icon.png" alt="" />&nbsp;' .$row["transmisi"]. '</p>';
													echo '<p><img src="images/air-icon.png" alt="" /> Air Conditioning</p>';						
																	
													
												echo '</div>';
												
											echo '</div>';								
										echo '</div>';
										
										echo '<div class="additional-block">';
											echo '<div>';
												echo '<p>IDR&nbsp;' .$row["tarif"]. '</p>';
												echo '<p class="span">Termasuk Asuransi</p>';
												echo '<span>'.'available mobil : '.$angavil.'</span>';						
												
													if ($angavil > 0) {
													echo '<input name="kdmobil" type="checkbox" value="' .$row["kode_mobil"]. '" />';
													echo '<input class="continue_button blue_button" type="submit" name="Submit" value="Pesan" onclick="setDifference(this.form);"/>';
													}
												echo '<input name="avail" type="hidden" value="' .$angavil. '" />';		
											echo '</div>';
										echo '</div>';
										echo '<div class="clear"></div>';							
									echo '</div>';
								echo '</div>';
								echo '<div class="post-delimiter"></div>';
								}
								
								mysql_close($con);
								?>
								<input type="hidden" name="result" id="result" />
							</form>							
						</div>
						<div class="pagination-block">
							<div class="pagination">
								<div class="left"></div>
								<div class="current">1</div>
								<div>2</div>
								<div>3</div>
								<div>...</div>
								<div>10</div>
								<div class="right"></div>
								<p class="clear"></p>
							</div>
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
		<script type="text/javascript" src="js/jquery.slider.min.js"></script>
		<script type="text/javascript" src="js/jquery.meio.mask.js"></script>
		<script type="text/javascript" src="js/custom-form-elements.js"></script>
		<script type="text/javascript" src="js/jquery.selectbox-0.2.min.js"></script>
		<script type="text/javascript" src="js/script.js"></script>
	</body>
</html>