<?php
include("koneksi.php");
session_start();
if(!isset($_SESSION['user'])) header("LOCATION:intruder.php");
$username = $_SESSION['user'];
$hasil = "";

if(isset($_POST['passbaru'])) {
	$passbaru = sha1($_POST['passbaru']);
	$query = "UPDATE `u957988429_a`.`user` SET password = ? WHERE username =?";

	$stmt = mysqli_prepare($mysqli, $query);

    mysqli_stmt_bind_param($stmt, "ss", $passbaru, $username) or die(mysqli_error);
        $res = mysqli_stmt_execute($stmt);
    

        if ($res)
        { 
        	$hasil = "Password berhasil diubah";
        }
}	

if(isset($_POST['nama']) && isset($_POST['email']) && isset($_POST['telpon'])) {
	$nama = $_POST['nama'];
	$email = $_POST['email'];
	$telpon = $_POST['telpon'];
	$query = "UPDATE `u957988429_a`.`user` SET nama = ?,email = ?,telepon = ? WHERE username =?";
	$stmt = mysqli_prepare($mysqli, $query);

    mysqli_stmt_bind_param($stmt, "ssss", $nama, $email, $telpon, $username) or die(mysqli_error);
        $res = mysqli_stmt_execute($stmt);
    

        if ($res)
        { 
        	$hasil = "Data berhasil diubah";
        }
}

?>

<html>
<head>
	<title>Perantara - Tempat Menyenangkan Untuk Jual Beli Online</title>

	<meta name="description" content"jual beli jualbeli iklan postiklan gratis iklangratis">
	<meta charset="UTF-8">

	<link rel="stylesheet" type="text/css" href="css/halamansaya.css">
	<link rel="stylesheet" type="text/css" href="css/headerfooter.css">
    <link rel="stylesheet" href="css/960_24_col.css" type="text/css"/>
    <script type="text/javascript" src="jquery-1.10.2.js"></script>
    <script type="text/javascript" src="js/javascript.js"></script>
</head>
<body>
	<div id="wrap" class="container_24">
		<div id="header" class="grid_24">

                <div id="banner" class="grid_18">
                     <a href="index.php"> <img src="banner.jpeg" height="200" width="600"></a>
                </div>
                <div id="masuk" class="grid_5">
                                <?php
                                    
                                    if(isset($_SESSION['user']))
                                     {
                                        $username = $_SESSION['user'];
                                         ?>
                                        <h3>Hello ,<a href="halamansaya.php"><?php echo $username; ?></a></h3>

                                
                                 <a href="logout.php"> <button>Logout</button></a>
                                <?php
                                        }
                                        else {
                                ?>
                                        <form id="login" action="login.php" method="POST">
                                                <label for="username">username</label><input type="text" name="username" class="placeholder" placeholder="Akun Pengguna"><br/>
                                                <label for="password">password</label><input type="password" name="password" class="placeholder" placeholder="Kata Sandi"><br/>
                                                <input type="submit" value="Masuk">
                                        </form>
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
							<li><a id="halsaya" href="#">Profil Saya</a></li>
							<li><a id="ubahpass"href="#">Ubah Password</a></li>
							
						</ul>
						  '
				?>

			</div>
			<div id="center" class="grid_11">
				<?php echo $hasil; ?>
				<div id="halamansaya">
				<form method="post" action="halamansaya.php">
					<?php
						$query = "SELECT * FROM user WHERE username LIKE ?";
						$username = $_SESSION['user'];

						$stmt = mysqli_prepare($mysqli, $query) or die(mysqli_error($mysqli));

                        mysqli_stmt_bind_param($stmt, "s", $username) or die(mysqli_error($mysqli));

                        mysqli_stmt_execute($stmt) or die(mysqli_error($mysqli));;
                        $result = mysqli_stmt_get_result($stmt);

						while($data=mysqli_fetch_assoc($result))
						{

					?>
					<table>
					<!-- <label>Username</label><input type="text" value="<?php //$data[username]; ?>"/><br> -->
					<tr>
						<td><label>Nama lengkap</label></td><td><input type="text" value="<?php echo $data['nama']; ?>" name="nama"/></td>
					</tr>
					<tr>
						<td><label>email</label></td><td><input type="text" value="<?php echo $data['email']; ?>" name="email"/><br></td>
					</tr>
					<tr>
						<td><label>Nomor Telepon</label></td><td><input type="text" value="<?php echo $data['telepon']; ?>" name="telpon"/><br></td>
					</tr>
					<!-- <label>Rating</label><input type="text" value="<?php //$data[rating]; ?>"/> -->
						<tr><td><input type="submit" value="Ubah"/></td></tr>
					</table>
					<?php
						}
					?>

				</form>
			</div>

			<div id="ubahpassword">
				<form method="post" action="halamansaya.php">
				
					<table>
					<!-- <label>Username</label><input type="text" value="<?php //$data[username]; ?>"/><br> -->
					<tr>
						<td><label>Password Baru</label></td><td><input type="password" name="passbaru"/><br></td>
					</tr>
					<!-- <label>Rating</label><input type="text" value="<?php //$data[rating]; ?>"/> -->
						<tr><td><input type="submit" value="Ubah"/></td></tr>
					</table>

				</form>

			</div>


			</div>

			<div id="navRight" class="grid_6">
				
                    <div id="daftar_iklan">
                        Iklan saya
                            <?php 

                            	$query = "SELECT * FROM topik WHERE username LIKE ?";

                            	$stmt = mysqli_prepare($mysqli, $query) or die(mysqli_error($mysqli));

		                        mysqli_stmt_bind_param($stmt, "s", $username) or die(mysqli_error($mysqli));

		                        mysqli_stmt_execute($stmt) or die(mysqli_error($mysqli));;
		                        $result = mysqli_stmt_get_result($stmt);

								while($data=mysqli_fetch_assoc($result))
                            	{
                            		echo "</br><a href='pages.php?id=".$data['id_topik']."'>".$data['title']."</a></br>";
                            	}
                            ?>
                        <a href="iklan-baru.php"><button>Buat Iklan</button></a>
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