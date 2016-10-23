<?php session_start() ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>tameraplazainn</title>
<link href="css/main.css" rel="stylesheet" type="text/css" />
<?php
if (!isset($_POST['submit'])) {
	
	$con = mysql_connect("localhost","root","");
if (!$con)
  {
  die('Could not connect: ' . mysql_error());
  }

mysql_select_db("db_rental", $con);

	function createRandomPassword() {



    $chars = "abcdefghijkmnopqrstuvwxyz023456789";

    srand((double)microtime()*1000000);

    $i = 0;

    $pass = '' ;



    while ($i <= 7) {

        $num = rand() % 33;

        $tmp = substr($chars, $num, 1);

        $pass = $pass . $tmp;

        $i++;

    }



    return $pass;



}
$confirmation = createRandomPassword();
	$tglsewa = $_POST['start'];
	$tglkembali = $_POST['end'];
	$nmobil = $_POST['n_mobil'];
	$kodemobil = $_POST['kd_mb'];
	$result = $_POST['result'];
	$nama = $_POST['nama'];
	$alamat = $_POST['alamat'];
	$kota = $_POST['kota'];
	$email = $_POST['email'];
	$telp = $_POST['telp'];
	$umur = $_POST['umur'];
	
$stat= 'Active';
	$result1 = mysql_query("SELECT * FROM tb_mobil where kode_mobil='$kodemobil'");
while($row = mysql_fetch_array($result1))
  {
  $tarif=$row['tarif'];
  $brand=$row['brand'];
  $model=$row['model'];
  
  }
  $total= $tarif*$result*$nmobil;
	
	
	
	//send the email
		$to = $email;
		$subject="Reservation notification From Tamera Plaza Inn";
		$from = 'dhinyayum@gmail.com';
		$body = "Nama: $nama\n".
		"Alamat: $alamat \n".
		"Kota: $kota \n".
		"Email: $email \n".
		"Telepon: $telp \n".

		"Check In: $tglsewa\n ".
		"Check Out: $tglkembali\n ".
		
		"Total hari: $result\n ".
		"Mobil: $model\n ".
		"Jumlah mobil: $nmobil\n ".
		"Payable amount: $total\n ".
		"Confirmation Number: $confirmation\n ";	
		
		$headers = "From: $from \r\n";
		$headers .= "Reply-To: $$from \r\n";
		
		mail($to, $subject, $body,$headers);
	
	$sql="INSERT INTO tb_penyewaan (tgl_sewa, tgl_kembali, result, kode_mobil, no_mobil, nama, alamat, kota, email, telp, umur, total, confirmation)
VALUES
('$tglsewa','$tglkembali','$result','$kodemobil','$nmobil','$nama','$alamat','$kota','$email','$telp','$umur','$total','$confirmation')";
mysql_query("INSERT INTO tb_mobilsewa (tgl_sewa, tgl_kembali, qty_reserve, kode_mobil, confirmation, status) VALUES ('$tglsewa','$tglkembali','$nmobil','$kodemobil','$confirmation','$stat')");
if (!mysql_query($sql,$con))
  {
  die('Error: ' . mysql_error());
  }

}
mysql_close($con)



?>
</head>

<body>
<div class="mainwrapper">
  <div class="leftother">
    <div class="l"></div>
	<div class="r">
	
	
	
	
	<div class="right3">
<form action="https://www.sandbox.paypal.com/cgi-bin/webscr"  method="post">
        <!-- the cmd parameter is set to _xclick for a Buy Now button -->
        
	 <div class="reservation" style="margin-left: 176px; width: 400px;">
	  <div align="center" style="padding-top: 7px; font-size:24px;"><strong>RESERVATION  DETAILS</strong></div>
	<div style="margin-top: 14px;">
<label style="margin-left: 73px;">Tanggal Sewa : <?php echo $tglsewa; ?></label><br />
<label style="margin-left: 58px;">Tanggal Kembali : <?php echo $tglkembali; ?></label><br />
<label style="margin-left: 42px;">Jumlah Mobil : <?php echo $nmobil; ?></label><br />
<label style="margin-left: 110px;">Kode Mobil : <?php echo $kodemobil; ?></label><br />
<label style="margin-left: 52px;">Jumlah Hari : <?php echo $result; ?></label><br />
<label style="margin-left: 101px;">Nama : <?php echo $nama; ?></label><br />
<label style="margin-left: 102px;">Alamat : <?php echo $alamat; ?></label><br />
<label style="margin-left: 114px;">Kota : <?php echo $kota; ?></label><br />
<label style="margin-left: 146px;">Email : <?php echo $email; ?></label><br />
<label style="margin-left: 108px;">Telepon : <?php echo $telp; ?></label><br />
<label style="margin-left: 117px;">Total : <?php echo $total; ?></label><br />
 </div>
	
	<input type="hidden" name="cmd" value="_xclick" />
        <input type="hidden" name="business" value="dhinyayum@gmail.com" />
        <input type="hidden" name="item_name" value="<?php echo $model; ?>" />
        <input type="hidden" name="item_number" value="<?php echo $nmobil; ?>" />
        <input type="hidden" name="amount" value="<?php echo $total; ?>" />
        <input type="hidden" name="no_shipping" value="1" />
        <input type="hidden" name="no_note" value="1" />
        <input type="hidden" name="currency_code" value="PHP" />
        <input type="hidden" name="lc" value="GB" />
        <input type="hidden" name="bn" value="PP-BuyNowBF" />
        <input type="image" src="https://www.paypal.com/en_US/i/btn/x-click-but23.gif" border="0" name="submit" alt="Make payments with PayPal - it's fast, free and secure!" style="margin-left: 157px;" />
        <img alt="fdff" border="0" src="https://www.paypal.com/en_GB/i/scr/pixel.gif" width="1" height="1" />
        <!-- Payment confirmed -->
        <input type="hidden" name="return" value="https://www.chmscians.com/paypal/showconfirm.php" />
        <!-- Payment cancelled -->
        <input type="hidden" name="cancel_return" value="http://www.chmscians.com/paypal/cancel.php" />
        <input type="hidden" name="rm" value="2" />
        <input type="hidden" name="notify_url" value="http://www.chmscians.com/paypal/ipn.php" />
        <input type="hidden" name="custom" value="any other custom field you want to pass" />
      </form>
	</div> 
	</div>
	
	
	
	
	
	
	
	
	
	</div>
  </div>
  
  
  
  
  
  
  <div class="rightother">
  
  
  
  
  </div>
  
  
  
  
  
  
</div>
<div class="footer" style="text-align:center; font-family:Arial, Helvetica, sans-serif; font-size:12px;">copyright © tameraplazainn 2011 - 2012 All Rights reserved</div>




</body>
</html>
