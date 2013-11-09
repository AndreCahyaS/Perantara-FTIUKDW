<?php
    include("koneksi.php");
    //masukkan ke data base form sign up
    //cek dulu apa ada data yang dikirim

    if (isset($_POST['username']) && isset($_POST['nama']) && isset($_POST['email']) && isset($_POST['password']) ){
       $username = $_POST['username'];
       $nama = $_POST['nama'];
       $email = $_POST['email'];
       $password = $_POST['password'];
       $query = "INSERT INTO `perantara`.`user` (`user_id` ,`username` ,`nama` ,`email` ,`password` ,`joindate`)VALUES (NULL,  '".$username."',  
        '".$nama."',  '".$email."',  '".$password."', CURRENT_TIMESTAMP)";


        $res = mysql_query($query) or die("gagal Query disini");

        if($res) echo "Berhasil ditambah";
        else echo("gagal tambah");

    }
    else if(isset($_POST['username']) || isset($_POST['nama']) || isset($_POST['email']) ||  isset($_POST['password']))
    {
        echo "Isi semua";
    }
    mysql_close($koneksi);
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
                                   <a href="home.php"> <img src="banner.jpeg" height="200" width="600"></a>
                      </div>

                          <div id="masuk" class="grid_5">
                                 
                          
                                <?php
                                    session_start();
                                    if(isset($_SESSION['user']))
                                     {
                                        $username = $_SESSION['user'];
                                        echo "Hello , " .$username;
                                ?>
                                    <a href="logout.php"> <button>Logout</button></a>
                          </div>
                      </div>
                                    <div id="content" class="grid_24">
                                       Maaf, ketika anda sedang log<br>in, maka anda tidak bisa men<br>daftar. Mohon logout terlebi<br>h dahulu.<br>
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
                                            <li><a href="#" class="grid_4"><strong>Disclaimer</strong></a></li>
                                            <li><a href="#" class="grid_4"><strong>Petunjuk</strong></a></li>
                                            <li><a href="#" class="grid_4"><strong>ABOUT US</strong></a></li>
                                    </ul>
                    
                    </div>
           </div>
        </body>

</html>
