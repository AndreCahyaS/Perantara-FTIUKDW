<html>
<head>
	<title>Perantara - Tempat Menyenangkan Untuk Jual Beli Online</title>

	<meta name="description" content"jual beli jualbeli iklan postiklan gratis iklangratis">
	<meta charset="UTF-8">

	<?
		php session_start()
		if(!isset($_SESSION['user'])) header("location:intruder.php")
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
                                    session_start();
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
							<li><a href="halaman-saya.php">Profil Saya</a></li>
							<li><a href="ubahpass.php">Ubah Password</a></li>
							<li><a href="cekstat.php">Cek Status</a></li>
						</ul>
						  '
				?>

			</div>
			<div id="center" class="grid_11">

				<?php 
					echo "upload gambar <br>";
					
					if (isset($_FILES['pp']))
					{
						$dir = 'userimage/';
						if ( $_FILES['pp']['size'] != 0)
						{
							$uploadpp = $dir.$_FILES['pp']['name'];
							if ($_FILES['pp']['type'] == "image/jpg")
							{
								if (move_uploaded_file($_FILES['pp']['tmp_name'], $uploadpp))
								{
									echo "Upload berhasil<br/>";
									#$query = "UPDATE ";
									#$res = mysql_query($query);
								}
								else
								{
									echo "Upload gagal<br/>";
								}
							}
							else
								echo "file yang diupload tidak berekstensi jpg <br/>";
						}
					}

				#	$query = "SELECT path FROM  WHERE userid LIKE '".$_SESSION['user']."'";
				#	$res = mysql_query($query) or die("gagal memuat gambar");

				#	echo "<img src='".$dir.$res."'>";

				 ?>

				<form action="halamansaya.php" method="POST" enctype="multipart/form-data">
					<input type="file" name="pp"><br>
					<input type="submit" value="upload">
				</form>

				<form>
					<?php
						$query = "SELECT * FROM user WHERE id LIKE '".$_SESSION."'";
						$res = mysql_query($query);

						while($data=mysql_fetch_assoc($res))
						{

					?>

					<!-- <label>Username</label><input type="text" value="<?php //$data[username]; ?>"/><br> -->
					<label>Nama lengkap</label><input type="text" value="<?php $data[nama]; ?>"/><br>
					<label>email</label><input type="text" value="<?php $data[email]; ?>"/><br>
					<label>Nomor Telepon</label><input type="text" value="<?php $data[telepon]; ?>"/><br>
					<!-- <label>Rating</label><input type="text" value="<?php //$data[rating]; ?>"/> -->
						<input type="submit" value="Ubah"/>
					<?php
						}
					?>

				</form>

			</div>

			<div id="navRight" class="grid_6">
				<div id="pencarian">
					<form action="pencarian.php" method="GET">
						<input type="textbox" name="kuncicari">
						<input type="button" value="cari"/>
					</form>
				</div>
                    <div id="daftar_iklan">
                        Iklan saya
                            <?php 

                            	$query = "SELECT * FROM topik WHERE user_make LIKE '".$_SESSION['userid']."'";
                            	$res = mysql_query($query);

                            	while($data = mysql_fetch_assoc($res)
                            	{
                            		echo "<a href='pages.php?id=".$data['id_topik']."'>".$data['title']."</a>";
                            	}
                            ?>
                        <a href="iklan-baru.php"> buat iklan</a>
                    </div>
			</div>
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