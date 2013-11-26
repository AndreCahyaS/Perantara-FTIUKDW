<?php 
	$host = "localhost";
	$user = "root";
	$pass = "";
	$database_name = "u957988429_a";
	//fungsi konek


	$koneksi = mysql_connect($host,$user,$pass) or die(header("location:maintenis.php"));


	//Pilih databasenya
	mysql_select_db($database_name) or die(header("location:maintenis.php"));

	
	$mysqli = new mysqli($host, $user, $pass, $database_name)or die(header("location:maintenis.php"));
	if (mysqli_connect_errno()) {
    printf("Connect failed: %s\n", mysqli_connect_error());
    exit();
}

	

?>

