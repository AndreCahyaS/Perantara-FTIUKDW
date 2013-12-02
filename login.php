<?php
	//konek database dulu
	include("koneksi.php");


	$username = $_POST['username'];
	$password = $_POST['password'];
	$passe = sha1($password);
	

	
	//query ke db ada tidaknya user
	$query = "SELECT * FROM `user` WHERE username LIKE ? AND password LIKE '".$passe."'";




	$stmt = mysqli_prepare($mysqli, $query);

	mysqli_stmt_bind_param($stmt, "s", $username);
	mysqli_stmt_execute($stmt);

	mysqli_stmt_store_result($stmt);
 
	if(mysqli_stmt_num_rows($stmt) === 1) {
		
		echo "Login berhasil, selamat datang ".$username;
		sleep(0.5);//seconds to wait..
			session_start();
			$_SESSION['user'] = $username;
			
			header("Location:".$_SERVER['HTTP_REFERER']."");
	}
	else {
		echo "Login gagal, username atau password anda salah <br>";
		echo "<a href='".$_SERVER['HTTP_REFERER']."'>Kembali </a>";
	}
	mysql_close($koneksi);

	mysqli_close($mysqli);


	
?>