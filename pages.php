<?php
include("koneksi.php");
session_start();
$user;
$harga2;

if(isset($_POST['isikomen']) && isset($_GET['id']) && isset($_SESSION['user'])) {
  $isikomen = $_POST['isikomen'];
  $id = $_GET['id'];
  $username = $_SESSION['user'];
       $query = "INSERT INTO `u957988429_a`.`komen` (`id_komen` ,`id_topik` ,`isi` ,`tanggal`, `username`)
VALUES (NULL , ?, ?, NOW( ), ?)";

         $stmt = mysqli_prepare($mysqli, $query);

         mysqli_stmt_bind_param($stmt, "sss", $id, $isikomen, $username);
          $res = mysqli_stmt_execute($stmt);
    
        if($res) { header("LOCATION:".$_SERVER['HTTP_REFERER']."");
}
        else echo("gagal tambah");



}

?><!DOCTYPE html>

        <head>
               
        
                <script type="text/javascript" src="jquery-1.10.2.js"></script>
                <link rel="stylesheet" href="css/960_24_col.css" type="text/css"/>
                <link rel="stylesheet" href="css/home.css" type="text/css"/>
                <link rel="stylesheet" href="css/headerfooter.css" type="text/css"/>
                <link rel="stylesheet" href="css/pages.css" type="text/css"/>
                <meta charset="utf-8">

        </head>

        <body>
                <div id="wrap" class="container_24">
                  <div id="header" class="grid_24">

                      <div id="banner" class="grid_18">
                                  <a href="index.php"> <img src="banner.jpeg" height="100" width="600"></a>
                      </div>

                          <div id="masuk" class="grid_5">
                                 <?php
                                    if(isset($_SESSION['user']))
                                     {
                                        $username = $_SESSION['user'];
                                  
                                 ?>
                                 <h3>Hello,<a href="halamansaya.php"><?php echo $username; ?></a></h3>

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
                    <?php 
                        if(isset($_GET['id'])) {
                              $id = $_GET['id'];
                            $query = "SELECT `gambar1`, `gambar2`, `isi`, `harga`, `username` FROM topik WHERE id_topik=?";
                           

                             $stmt = mysqli_prepare($mysqli, $query);

                            mysqli_stmt_bind_param($stmt, "s", $id) or die(mysqli_error($mysqli));
                            mysqli_stmt_execute($stmt);
                            $stmt->bind_result($gambar1, $gambar2, $isi, $harga, $username);  // <-- one param for each field returned
                            
                           
                            while ($stmt->fetch()) {
                                

                            ?>
                             <div id="kiri" class="grid_17">
                                <div class="grid_7 gambar">
                               <img src="image/<?php echo $gambar1; $user = $username; ?>" width="150" height="200">  
                                </div>
                                <div  class="grid_7 gambar">
                                  <img src="image/<?php echo $gambar2; ?>" width="150" heigth="200">  
                                </div>
                                <?php $harga2 = $harga; ?>
                                 <div  class="grid_16 deskripsi">
                                  <h1>Deskripsi Barang :</h1>
                                  <p><?php echo $isi; ?> </p>
                                </div>
                                <?php
                              }
                                 $query2 = "SELECT `isi`, `username`, `tanggal` FROM komen WHERE id_topik= ?";
                              

                             $stmt2 = mysqli_prepare($mysqli, $query2) or die(mysqli_error($mysqli));

                            mysqli_stmt_bind_param($stmt2, 'i', $id) or die(mysqli_error($mysqli));
                            mysqli_stmt_execute($stmt2);
                            $stmt2->bind_result($isi, $username, $tanggal);  // <-- one param for each field returned
                            while ($stmt2->fetch()) {
                                
                            ?>

                            <div class="komentar grid_17">
                                  <div class="komentar_user grid_5"><?php echo $username;?>
                                  </div> 
                                  <div class="tanggal grid_5"><?php echo $tanggal; ?> </div>
                                  <div class="isi grid_16">
                                  <p><?php echo $isi; ?></p>
                                </div>
                            </div>
                            <?php
                            }

                                       if(isset($_SESSION['user'])) {
                            ?><div id="komen" class="grid_14">
                              <form id="komen" method="post" action="pages.php?id=<?php echo $id; ?>">
                              <label>Komentar : </label><input type="text" name="isikomen"></input><br>
                              <input type="submit" value="submit komentar">
                                                          </form>
                                                        </div>
                            <?php 
                            }
                      


                                ?>
                             </div>
                             <div id="kanan" class="grid_6">
                                <div id="kontak" class="grid_5">
                                  <?php
                                  $username = $user;
                                   $queryuser = "SELECT * FROM user WHERE username='".$username."'";
                                   $hasiluser = mysql_query($queryuser);

                                while($data2=mysql_fetch_assoc($hasiluser))
                                { 

                                  ?>
                                  <table>
                                    <tr>
                                      <td>Username:</td>
                                      <td><?php echo $data2['username']; ?></td>
                                    </tr>
                                     <tr>
                                      <td>Telepon:</td>
                                      <td><?php echo $data2['telepon']; ?></td>
                                    </tr>
                                    <td>Email:</td>
                                      <td><?php echo $data2['email']; ?></td>
                                    </tr>
                                     </tr>
                                    <td>Harga :</td>
                                      <td><?php echo $harga2; ?></td>
                                    </tr>
                                <?php
                           
                            ?>        
                                    
                                  </table>
                                
                             
                             </div>
                             <?php
                      
                           }
                        

                           $id = $_GET['id'];
                            $query = "SELECT * FROM topik WHERE id_topik=?";
                           

                             $stmt = mysqli_prepare($mysqli, $query);

                            mysqli_stmt_bind_param($stmt, 'i', $id) or die(mysqli_error($mysqli));
                            mysqli_stmt_execute($stmt);
                            
                            mysqli_stmt_store_result($stmt);
                      if(!(mysqli_stmt_num_rows($stmt) === 1)) {
                        echo "<h1>Maaf Post tidak ada</h1>";
                        }
}
                             ?>
                                        
                    </div>
</div>
                    <div id="footer" class="grid_24">
                        
                                    <ul>
                                            <li><a href="ketentuan.php" class="grid_4"><strong>Ketentuan</strong></a></li>
                                            <li><a href="petunjuk.php" class="grid_4"><strong>Petunjuk</strong></a></li>
                                            <li><a href="tentang-kami.php" class="grid_4"><strong>ABOUT US</strong></a></li>
                                    </ul>
                    
                    </div>
           </div>

<?php
mysqli_close($mysqli);
mysql_close($koneksi);
?>
        </body>

</html>
