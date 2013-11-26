<!DOCTYPE html>

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
                                  <a href="index.php"> <img src="banner.jpeg" height="200" width="600"></a>
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
                            $query = "SELECT * FROM topik WHERE id_topik='".$id."'";
                            $hasilquery = mysql_query($query);

                                while($data=mysql_fetch_assoc($hasilquery))
                                { 

                            ?>
                             <div id="kiri" class="grid_17">
                                <div class="grid_7 gambar">
                               <img src="image/<?php echo $data['gambar1'] ?>" width=260 heigth=300>  
                                </div>
                                <div  class="grid_7 gambar">
                                  <img src="image/<?php echo $data['gambar2'] ?>" width=260 heigth=300>  
                                </div>

                                 <div  class="grid_16 deskripsi">
                                  <h1>Deskripsi Barang :</h1>
                                  <p><?php echo $data['isi']; ?> </p>
                                </div>

                             </div>
                             <div id="kanan" class="grid_6">
                                <div id="kontak" class="grid_5">
                                  <?php
                                  $username = $data['username'];
                                   $queryuser = "SELECT * FROM user WHERE username='".$username."'";
                                   $hasiluser = mysql_query($queryuser);

                                while($data2=mysql_fetch_assoc($hasiluser))
                                { 

                                  ?>
                                  <table>
                                    <tr>
                                      <td>Username:</td>
                                      <td><?php echo $data['username']; ?></td>
                                    </tr>
                                     <tr>
                                      <td>Telepon:</td>
                                      <td><?php echo $data2['telepon']; ?></td>
                                    </tr>
                                    <td>Email:</td>
                                      <td><?php echo $data2['email']; ?></td>
                                    </tr>
                                    
                                <?php
                           }
                            ?>        
                                      <tr>
                                      <td>Harga:</td>
                                      <td><?php echo $data['harga']; ?></td>
                                    </tr>
                                  </table>
                                
                             </div>
                             </div>
                             <?php
                           }
                        } else {
                          echo "<h1>Maaf Post tidak ada</h1>";
                        }

                             ?>
                                        
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
