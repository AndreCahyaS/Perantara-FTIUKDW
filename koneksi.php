<?php 
	$host = "localhost";
	$user = "perantara";
	$pass = "CPChHDCz3874bPDq";
	$database_name = "perantara";
	//fungsi konek
	$koneksi = mysql_connect($host,$user,$pass) or die("gagal konek ke database");

	//Pilih databasenya
	mysql_select_db($database_name) or die("gagal pilih database");

?>

