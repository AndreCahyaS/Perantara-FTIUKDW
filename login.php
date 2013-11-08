<?php
	//konek database dulu
	include("koneksi.php");

	$username = $_POST['username'];
	$password = $_POST['password'];

	//query ke db ada tidaknya user
	$query = "SELECT * FROM `user` WHERE username LIKE '".$username."' AND password LIKE '".$password."'";

	$hasil = mysql_query($query) or die("Gagal query");

	if(mysql_num_rows($hasil) > 0) {
					
		sleep(2);//seconds to wait..
		echo "Login berhasil, selamat datang ".$username;
			session_start();
			$_SESSION['user'] = $username;
			
			header("Location:".$_SERVER['HTTP_REFERER']."");
	}
	else {
		echo "Login gagal, username atau password anda salah <br>";
		echo "<a href='".$_SERVER['HTTP_REFERER']."'>Kembali </a>";
	}
?>