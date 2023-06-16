<?php

$hostname = "localhost";
$user = "root";
$password = "";
$db_name = "regulation";

$koneksi = mysqli_connect($hostname,$user,$password,$db_name) or die(mysqli_error($koneksi));

if (isset($_POST['submit'])) {
    $peraturan = $_POST['peraturan'];
    $pertukaran = $_POST['pertukaran'];
    $sepeda = $_POST['sepeda'];
    $waktu = $_POST['waktu'];

    $cek_user = mysqli_query($koneksi,"SELECT * FROM user WHERE username = '$username'");
    $cek_login = mysqli_num_rows($cek_user);

    if ($cek_login > 0){
	echo "<script>
	    alert('Username telah terdaftar!');
		window.location = 'registrasi.php';
	</script>";
}else {
	if($password1 != $password2){
		echo "<script>
	        alert('Konfirmasi password tidak sesuai!');
		    window.location = 'registrasi.php';
	    </script>";
	}else {
		mysqli_query($koneksi,"INSERT INTO user VALUES('','$nama','$username','$password1')");
		echo "<script>
		    alert('Data berhasil dikirim!');
		    window.location = 'index.php';
	    </script>";
	}
}

}

?>




<!--
Author: Colorlib
Author URL: https://colorlib.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
<!DOCTYPE html>
<html>
<head>
<title>Regulation</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<!-- Custom Theme files -->
<link href="css/register.css" rel="stylesheet" type="text/css" media="all" />
<!-- //Custom Theme files -->
<!-- web font -->
<link href="//fonts.googleapis.com/css?family=Roboto:300,300i,400,400i,700,700i" rel="stylesheet">
<!-- //web font -->
</head>
<body>
	<!-- main -->
	<div class="main-w3layouts wrapper">
		<h1>Regulation</h1>
		<div class="main-agileinfo">
			<div class="agileits-top">
				<form action="" method="POST">
					<input class="text" type="text" name="peraturan" placeholder="Peraturan ITS Fun Bike" required="yes">
					<input class="text" type="text" name="pertukaran" placeholder="Pertukaran Starter Kit" required="yes">
					<input class="text" type="text" name="sepeda" placeholder="Jenis Sepeda yang Digunakan" required="yes">
					<input class="text" type="text" name="waktu" placeholder="Batas Waktu Bersepeda" required="yes">
					<input type="submit" value="SUBMIT" name="submit">
				</form>
			</div>
		</div>
		<!-- copyright -->
		<div class="colorlibcopy-agile">
			<p>© 2023 ITS Fun Bike. All rights reserved | Design by <a href="https://colorlib.com/" target="_blank">Sistem Informasi ITS</a></p>
		</div>
		<!-- //copyright -->
		<ul class="colorlib-bubbles">
			<li></li>
			<li></li>
			<li></li>
			<li></li>
			<li></li>
			<li></li>
			<li></li>
			<li></li>
			<li></li>
			<li></li>
		</ul>
	</div>
	<!-- //main -->
</body>
</html>