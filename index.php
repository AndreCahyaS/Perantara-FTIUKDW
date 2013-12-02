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
                                   <img src="banner.png" height="200" width="600">
                      </div>
                      </a>

                          <div id="masuk" class="grid_5">
                                 <?php
                                    include("koneksi.php");
                                    session_start();
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

                    <div id="pencarian" class="grid_18">
                       <form id="cari" method="GET" action="hasil-pencarian.php">
                        
                          <input  type="text"  placeholder="Kata Pencarian" autocomplete="off" name="pencarian"/>
                        
                          <input type="submit" value="Cari" class="button2">
                        
                          <select id="provinsi" name="provinsi">
                            <option value="semua-provinsi">Semua provinsi</option>
                            <option value="aceh">Aceh</option>
                            <option value="bali">Bali</option>
                            <option value="belitung">Bangka Belitung</option>
                            <option value="banten">Banten</option>
                            <option value="bengkulu">Bengkulu</option>
                            <option value="gorontalo">Gorontalo</option>
                            <option value="jakarta">DKI Jakarta</option>
                            <option value="jambi">Jambi</option>
                            <option value="jabar">Jawa Barat</option>
                            <option value="jateng">Jawa Tengah</option>
                            <option value="jatim">Jawa Timur</option>
                            <option value="kalbar">Kalimantan Barat</option>
                            <option value="kalsel">Kalimantan Selatan</option>
                            <option value="kalteng">Kalimantan Tengah</option>
                            <option value="kaltim">Kalimantan TImur</option>
                            <option value="kepriau">Kepulauan Riau</option>
                            <option value="lampung">Lampung</option>
                            <option value="maluku">Maluku</option>
                            <option value="malut">Maluku Utara</option>
                            <option value="ntb">Nusa Tenggara Barat</option>
                            <option value="ntt">Nusa Tenggara Timur</option>
                            <option value="papua">Papua</option>
                            <option value="papuabarat">Papua Barat</option>
                            <option value="riau">Riau</option>
                            <option value="sulbar">Sulawesi Barat</option>
                            <option value="sulsel">Sulawesi Selatan</option>
                            <option value="sulteng">Sulawesi Tengah</option>
                            <option value="sultenggara">Sulawesi Tenggara</option>
                            <option value="sulut">Sulawesi Utara</option>
                            <option value="sumbar">Sumatra Barat</option>
                            <option value="sumsel">Sumatra Selatan</option>
                            <option value="sumut">Sumatra Utara</option>
                            <option value="jogja">Yogyakarta</option>
                            
                          </select> 

                           <select id="Kategori" name="kategori">
                            <option value="semua-kategori">Semua Kategori</option>
                            <option value="Kendaraan">Kendaraan</option>
                            <option value="properti">Properti</option>
                            <option value="fashion">Fashion</option>
                            <option value="elektronik">Elektronik dan Gadget</option>
                            <option value="kecantikankesehatan">Kecantikan dan Kesehatan</option>
                            <option value="hobiolahraga">Hobi dan Olahraga</option>
                            <option value="rumahtangga">Rumah Tangga</option>
                            <option value="hewanpeliharaan">Hewan Peliharaan</option>
                     
                          </select> 
                           


                        
                       </form>

                  </div>
                    <div id="barang" class="grid_18">
                        <h2>Pilih Berdasar Kategori :</h2>
                            
                               
                    </div>
                
                     <div id="iklan" class="grid_5">
                                  <?php 
                            $result = mysql_query("Select * from topik");
                            $total = mysql_num_rows($result);       
                            $numbers = array(1,1,1,1);
                        
                                    while ( $numbers[0] == $numbers[1] || $numbers[0] == $numbers[2] || $numbers[0] == $numbers[3] || $numbers[1] == $numbers[2] || $numbers[1] == $numbers[3] || $numbers[2] == $numbers[3]  ) 
                                    {                                    
                                        $numbers[0] = rand(1, $total);
                                        $numbers[1] = rand(1, $total);
                                        $numbers[2] = rand(1, $total);
                                        $numbers[3] = rand(1, $total);
                                    }
            
                        
                                echo "$numbers[1] $numbers[2] $numbers[3] $numbers[0]";

                            
                               #for($i=0;$i<4;$i++)
                               #{
                                    $query = "SELECT * FROM topik WHERE id_topik='".$numbers[0]."' OR id_topik='".$numbers[1]."' OR id_topik='".$numbers[2]."' OR id_topik='".$numbers[3]."'" or die('disni');
                                    $hasilquery = mysql_query($query);

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
                                    <img src="image/<?php echo $data['gambar1'];?>" width=150>
                                   <div class="isiiklan"> 
                                    <?php echo $data['isi'];?></div>

                                    </div>
                                    <a/>
                                    
                           <?php
                                 }
                          ?> 
                           </div>

                    <div id="footer" class="grid_24">
                        
                                    <ul>
                                            <li><a href="#" class="grid_4"><strong>Ketentuan</strong></a></li>
                                            <li><a href="#" class="grid_4"><strong>Petunjuk</strong></a></li>
                                            <li><a href="#" class="grid_4"><strong>Tentang Kami</strong></a></li>
                                    </ul>
                    
                    </div>
           </div>
        </body>

</html>
