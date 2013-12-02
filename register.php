<?php
    include("koneksi.php");
    $hasil;
    //masukkan ke data base form sign up
    //cek dulu apa ada data yang dikirim

    if (isset($_POST['username']) && isset($_POST['nama']) && isset($_POST['email']) && isset($_POST['password']) ){
       $username = $_POST['username'];
       $nama = $_POST['nama'];
       $email = $_POST['email'];
       $password = $_POST['password'];

       

        
        $pass = sha1($password);

       $query = "INSERT INTO `u957988429_a`.`user` (`user_id` ,`username` ,`nama` ,`email` ,`password` ,`joindate`)VALUES (NULL,  ?,  ?,  ?,  '".$pass."', CURRENT_TIMESTAMP)";


         $stmt = mysqli_prepare($mysqli, $query);

         mysqli_stmt_bind_param($stmt, "sss", $username, $nama, $email);
          $res = mysqli_stmt_execute($stmt);
    
        if($res) { $hasil =  "Berhasil ditambah";
}
        else $hasil = "Ada sesuatu yang salah, harap coba lagi";

    }
    else if(isset($_POST['username']) || isset($_POST['nama']) || isset($_POST['email']) ||  isset($_POST['password']))
    {
        echo "Isi semua";
    }
   
?>

<!DOCTYPE html>
<html>
        <head>
          <title>Register - perantara.com</title>
               
        
                <script type="text/javascript" src="jquery-1.10.2.js"></script>
                <link rel="stylesheet" href="css/960_24_col.css" type="text/css"/>
                <link rel="stylesheet" href="css/headerfooter.css" type="text/css"/>
                <link rel="stylesheet" href="css/register.css" type="text/css"/>
                <meta charset="utf-8">

        </head>

        <body>
                <div id="wrap" class="container_24">
                    <div id="header" class="grid_24">

                          <div id="banner" class="grid_18">
                                  <a href="index.php"> <img src="banner.png" height="100" width="600"></a>
                      </div>

                          <div id="masuk" class="grid_5">
                                 
                          
                                <?php
                                    session_start();
                                    if(isset($_SESSION['user']))
                                     {
                                        $username = $_SESSION['user'];
                                ?>
                                    <h3>Hello,<a href="halamansaya.php"><?php echo $username; ?></a></h3>

                                 <a href="logout.php"> <button>Logout</button></a>
                                  <a href="iklan-baru.php"><input type="submit" value="Buat Iklan Baru"></a>
                          </div>
                      </div>
                                    <div id="content" class="grid_24">
                                       Maaf, ketika anda sedang login, maka anda tidak bisa mendaftar. Mohon logout terlebih dahulu.<br>
                                    </div>
                                <?php
                                        }
                                        else {
                                ?>
                                        <form id="login" action="login.php" method="POST">
                                                <label for="username">username</label><input type="text" name="username" class="placeholder" placeholder="Akun Pengguna"><br/>
                                                <label for="password">password</label><input type="password" name="password" class="placeholder" placeholder="Kata Sandi"><br/>
                                                <input type="submit" value="Masuk">
                                        </form>

                          </div>


                                  
                      </div>

                  
                  <div id="content" class="grid_24">
                    
                    <form id="daftar" method="POST" class="grid_17" action="register.php"> 
                      <?php echo $hasil; ?>
                        <div id="kiri" >

                        <table>                
                        <tr>
                                                <td><label for="username" class="grid_7">Username :<br/></label></td>
                                                <td><input type="text" name="username" class="grid_7" placeholder="Akun Pengguna"><br/></td>
                                                
                        </tr>
                        <tr>
                                                <td> <label for="namalengkap" class="grid_7">Nama Lengkap :<br/></label></td>
                                                <td><input type="text" name="nama" class="grid_7" placeholder="Nama Lengkap"><br/></td>
                                                
                        </tr>
                        <tr>
                                                <td><label for="email" class="grid_7">Email :<br/></label></td>
                                                <td><input type="email" name="email" class="grid_7" placeholder="Email"><br/></td>
                                                
                        </tr>
                        <tr>
                                                <td><label for="password" class="grid_7">Password :<br/></label></td>
                                                <td> <input type="password" name="password" class="grid_7" placeholder="Kata Sandi"><br/></td>
                                                
                        </tr>
                        <tr>
                                                <td> <label for="password" class="grid_7">Konfirmasi password :<br/></label></td>
                                                <td><input type="password" name="kpassword" class="grid_7" placeholder="Kata Sandi"><br/></td>
                                                
                        </tr>
                                                
                                               <tr>
                                                  <td> 
                                                <input type="submit" value="Daftar"></td>
                                                  </tr>
                                      </table>             
                                        </form>
                                     

                   </div>
                </div>
                <?php
                                        }
                                ?>
    
                    <div id="footer" class="grid_24">
                        
                                    <ul>
                                            <li><a href="ketentuan.php" class="grid_4"><strong>Ketentuan</strong></a></li>
                                            <li><a href="petunjuk.php" class="grid_4"><strong>Petunjuk</strong></a></li>
                                            <li><a href="tentang-kami.php" class="grid_4"><strong>Tentang Kami</strong></a></li>
                                    </ul>
                    
                    </div>

<?php
mysqli_close($mysqli);
mysql_close($koneksi);
?>
           </div>
        </body>

</html>
