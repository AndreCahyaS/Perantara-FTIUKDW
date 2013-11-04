<?php
	//konek database dulu
	include("koneksi.php");

	$username = $_POST['username'];
	$password = $_POST['password'];

	//query ke db ada tidaknya user
	$query = "SELECT * FROM `user` WHERE username LIKE '".$username."' AND password LIKE '".$password."'";

	$hasil = mysql_query($query) or die("Gagal query");

	if(mysql_num_rows($hasil) > 0) {
		echo "Login berhasil, selamat datang ".$username;
		echo '
	<script type="text/javascript">
		function delayer(){
			window.location.href = "https://www.google.com"
		}
		window.setTimeout("delayer()",5000);
	</script>
			 ';
	}
	else {
		echo "Login gagal, username atau password anda salah <br>";
		echo "<a href='".$_SERVER['HTTP_REFERER']."'>Kembali </a>";
	}
?>