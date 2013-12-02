<!DOCTYPE html>

        <head>
               
        
                <script type="text/javascript" src="jquery-1.10.2.js"></script>
                <link rel="stylesheet" href="css/960_24_col.css" type="text/css"/>
                <link rel="stylesheet" href="css/home.css" type="text/css"/>
                <link rel="stylesheet" href="css/headerfooter.css" type="text/css"/>
                <meta charset="utf-8">

        </head>

        <body>
                <div id="wrap" class="container_24">
                	<div id="header" class="grid_24">
                      <a href="index.php">
                		  <div id="banner" class="grid_18">
                        <a href="index.php"> <img src="banner.jpeg" height="100" width="600"></a>
                      </div>
                      </a>

                          <div id="masuk" class="grid_5">
                                 <?php
                                    include("koneksi.php");
                                    session_start();
                                    $result = mysql_query("SELECT * from topik") or die (mysql_error());
                                    $total = mysql_num_rows($result); 
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
                  <div id="petunjuk" class="grid_18">
                    <p></pre>About Us<br>
<br>
Sekilas Tentang Perantara<br>
<br>
Perantara adalah situs penyedia jasa jual beli online di Indonesia.<br>
<br>
Perantara adalah tempat yang sangat tepat bagi siapa saja untuk mencari barang baru maupun bekas berkualitas seperti produk handphone murah, komputer, fashion, mobil, motor, rumah dan properti, alat olahraga, peralatan rumah tangga, dan juga hewan peliharaan. Untuk para penjual, pasang iklan gratis adalah salah satu layanan yang disediakan oleh Perantara. Iklan anda akan dilihat oleh ratusan ribu orang setiap harinya. Bertransaksi di Perantara, baik jual maupun belu tidak dikenakan biaya, semuanya gratis. Ayo bergabunglah sekarang juga bersama jutaan member lain yang sudah terdaftar.<br><br>
</pre></p>
                
                               
                    </div>
                
                     <div id="iklan" class="grid_5">
                       <?php 
                            

                            $numbers = array(1,1,1,1);
                        
                                                                      
                                                                     
                                        $numbers[0] = rand(1, $total);
                                        $numbers[1] = rand(1, $total);
                                        $numbers[2] = rand(1, $total);
                                        $numbers[3] = rand(1, $total);
                                 
                            

                            
                               #for($i=0;$i<4;$i++)
                               #{
                                    $query = "SELECT * FROM topik WHERE id_topik='".$numbers[0]."' OR id_topik='".$numbers[1]."' OR id_topik='".$numbers[2]."' OR id_topik='".$numbers[3]."'" or die('disni');
                                    $hasilquery = mysql_query($query) or die (mysql_error());

                                    #echo $hasilquery['id_topik']."wewew";
                                  
                                    #echo $hasilquery['title'];
                               #}
                               # $query = "SELECT * FROM topik WHERE id_topik='".$numbers[$i]."'" or die('disni');
                               # $hasilquery = mysql_query($query) or die('gagal disini');

                                 while($data=mysql_fetch_assoc($hasilquery))
                                { 
                                   ?>
                                    <a href="pages.php?id=<?php echo $data['id_topik']; ?>">
                                  
                                   <div class="iklandepan grid_5">
  
                                    <strong><?php echo $data['title']; ?></strong><br/>
                                    <img src="image/<?php echo $data['gambar1'];?>" width="150" height="150">
                                   <div class="isiiklan"> 
                                    <?php echo $data['isi'];?></div>

                                    </div>
                                    <a/>
                                    
                           <?php
                                 }
                          ?> 
                           </div>

<?php
mysqli_close($mysqli);
mysql_close($koneksi);
?>
                    <div id="footer" class="grid_24">
                        
                                    <ul>
                                            <li><a href="ketentuan.php" class="grid_4"><strong>Ketentuan</strong></a></li>
                                            <li><a href="petunjuk.php" class="grid_4"><strong>Petunjuk</strong></a></li>
                                            <li><a href="tentang-kami.php" class="grid_4"><strong>ABOUT US</strong></a></li>
                                    </ul>
                    
                    </div>
           </div>
        </body>

</html>
