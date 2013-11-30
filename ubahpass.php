<html>
<head>
	<title>Perantara - Tempat Menyenangkan Untuk Jual Beli Online</title>

	<meta name="description" content"jual beli jualbeli iklan postiklan gratis iklangratis">
	<meta charset="UTF-8">

	<?php session_start();
		if(!isset($_SESSION['user'])) header("LOCATION:intruder.php")
	?>

	<link rel="stylesheet" type="text/css" href="css/halamansaya.css">
	<link rel="stylesheet" type="text/css" href="css/headerfooter.css">
    <link rel="stylesheet" href="css/960_24_col.css" type="text/css"/>

</head>
<body>
	<div id="wrap" class="container_24">
		<div id="header" class="grid_24">

                <div id="banner" class="grid_18">
                     <a href="home.php"> <img src="banner.jpeg" height="200" width="600"></a>
                </div>
                <div id="masuk" class="grid_5">
                                 <?php
                                    include("koneksi.php");
                                    if(isset($_SESSION['user']))
                                     {
                                        $username = $_SESSION['user'];
                                        echo "Hello , " .$username;
                                 ?>
                                 <a href="logout.php"> <button>Logout</button></a>
                                  <a href="iklan-baru.php"><input type="submit" value="Buat Iklan Baru"></a>
                                <?php
                                        }
                                        else {
                                ?>
                                        <form id="login" action="login.php" method="POST">
                                                <label for="username">username</label><input type="text" name="username" class="placeholder" placeholder="Akun Pengguna"><br/>
                                                <label for="password">password</label><input type="password" name="password" class="placeholder" placeholder="Kata Sandi"><br/>
                                                <input type="submit" value="Masuk">
                                        </form>
                                        <a href="register.php"><input type="submit" value="Daftar"></a>
                                <?php
                                        }
                                ?>


                </div>
        </div>
		<div id="content" class="grid_24">
			<div id="navLeft" class="grid_6">
				<span id="header-nav"><strong>halaman saya</strong></span>
				<?php
					echo '
						<ul>
							<li><a href="halamansaya.php">Profil Saya</a></li>
							<li><a href="ubahpass.php">Ubah Password</a></li>
							<li><a href="cekstat.php">Cek Status</a></li>
						</ul>
						  '
				?>

			</div>
			<div id="center" class="grid_11">



				<form>
					<?php
						$query = "SELECT * FROM user WHERE username LIKE '".$_SESSION['user']."'";
						$res = mysql_query($query) or die("gagal query res");

						while($data=mysql_fetch_assoc($res))
						{

					?>
					<table>
					<!-- <label>Username</label><input type="text" value="<?php //$data[username]; ?>"/><br> -->
					<tr>
						<td><label>Nama lengkap</label></td><td><input type="text" value="<?php echo $data['nama']; ?>"/></td>
					</tr>
					<tr>
						<td><label>email</label></td><td><input type="text" value="<?php echo $data['email']; ?>"/><br></td>
					</tr>
					<tr>
						<td><label>Nomor Telepon</label></td><td><input type="text" value="<?php echo $data['telepon']; ?>"/><br></td>
					</tr>
					<!-- <label>Rating</label><input type="text" value="<?php //$data[rating]; ?>"/> -->
						<tr><td><input type="submit" value="Ubah"/></td></tr>
					</table>
					<?php
						}
					?>

				</form>

			</div>

			
			<div id="footer" class="grid_24">
                        
                      <ul>
                         <li><a href="#" class="grid_4"><strong>Disclaimer</strong></a></li>
                         <li><a href="#" class="grid_4"><strong>Petunjuk</strong></a></li>
                         <li><a href="#" class="grid_4"><strong>ABOUT US</strong></a></li>
                      </ul>
                
            </div>


	</div>

</body>
</html>