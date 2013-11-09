<html>
<head>
	<title>Perantara - Tempat Menyenangkan Untuk Jual Beli Online</title>

	<meta name="description" content"jual beli jualbeli iklan postiklan gratis iklangratis">
	<meta charset="UTF-8">

	<?php session_start() ?>

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
                <form id="login" method="POST" class="grid_5" action="login.php">
                    <label for="username">username</label><input type="text" name="username" class="placeholder" placeholder="Akun Pengguna"><br/>
                    <label for="password">password</label><input type="password" name="password" class="placeholder" placeholder="Kata Sandi"><br/>
                    <input type="submit" value="Masuk">
                    <input type="submit" value="Daftar?">
                </form> 
        </div>
		<div id="content" class="grid_24">
			<div id="navLeft" class="grid_6">
				<span id="header-nav"><strong>halaman saya</strong></span>
				<?php
					echo '
						<ul>
							<li><a href="halaman-saya.php">profil saya</a></li>
							<li>ganti password</li>
							<li>cek status</li>
						</ul>
						  '
				?>
			</div>

			<div id="center" class="grid_11">

				<?php 
					echo "upload gambar <br>";
					
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

					echo "img";

				#	$query = "SELECT path FROM  WHERE userid LIKE '".$_SESSION['user']."'";
				#	$res = mysql_query($query) or die("gagal memuat gambar");

				#	echo "<img src='".$dir.$res."'>";

				 ?>

				<form action="halamansaya.php" method="POST" enctype="multipart/form-data">
					<input type="file" name="pp">
					<input type="submit" value="upload">
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
                            #echo "
                            #       <ul>
                                    # while() {
                                        # code...
                                    # }
                            #       </ul>
                            #     "
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