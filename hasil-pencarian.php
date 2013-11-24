<!DOCTYPE html>

        <head>
               
        
                <script type="text/javascript" src="jquery-1.10.2.js"></script>
                <link rel="stylesheet" href="css/960_24_col.css" type="text/css"/>
                <link rel="stylesheet" href="css/hasil-pencarian.css" type="text/css"/>
                <link rel="stylesheet" href="css/headerfooter.css" type="text/css"/>
                <meta charset="utf-8">
                <title>Pencarian-Perantara.com</title>
                
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
                        
                          <input  type="text"  placeholder="Kata Pencarian" autocomplete="off" name="search"/>
                        
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
                            <option value="elektronikgadget">Elektronik dan Gadget</option>
                            <option value="kecantikankesehatan">Kecantikan dan Kesehatan</option>
                            <option value="hobiolahraga">Hobi dan Olahraga</option>
                            <option value="rumahtangga">Rumah Tangga</option>
                            <option value="hewanpeliharaan">Hewan Peliharaan</option>
                     
                          </select> 
                           


                        
                       </form>
                    </div>
                    <div id="hasil-pencarian" class="grid_18">
                         <?php 
                         if(isset($_GET['provinsi']) || isset($_GET['pencarian']))
                            if ($_GET['provinsi'] == "semua-provinsi") {
                                $provinsi = "!= '".$_GET['provinsi']."'";
                            }
                            else
                            {
                                $provinsi = "= '".$_GET['provinsi']."'";
                            }
                            
                            if($_GET['kategori'] == "semua-kategori")
                            {
                                $kategori = "!= '".$_GET['kategori']."'";
                            }
                            else
                            {
                                $kategori = "= '".$_GET['kategori']."'";
                            }

                            if($_GET['pencarian'] == "")
                            {
                                $pencarian = "!= '".$_GET['pencarian']."'";
                            }
                            else
                            {
                                $pencarian = "= '".$_GET['pencarian']."'";
                            }

                            $query = "SELECT * FROM post WHERE deskripsi ".$pencarian." OR judul ".$pencarian." OR tag1 ".$pencarian." AND provinsi ".$provinsi." AND kategori ".$kategori
                            $res = mysql_query($query)

                            $total = mysql_num_rows($res);

                         ?>
                         <div id="jumlah">Ditemukan <?php echo $total ?> hasil dari pencarian</div>
                         <div class="clear"></div>
                            <?php 
                                while($data = mysql_fetch_assoc($res))
                                {
                                    echo '<a href="rincian.php?id='.$data['id'].
                            ?>
                         <div class="hasil">
                                    <img src="<?php echo $data['gambar'] ?>" title="<?php echo $data['judul'] ?>">

                                    <p>
                                        <?php
                                            echo $data['deskripsi'];
                                        ?>
                                        <!-- Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                                    tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                                    quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
                                    consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
                                    cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
                                    proident, sunt in culpa qui officia deserunt mollit anim id est laborum. -->
                                    </p>

                         </div>
                            <?php 
                                    '"></a>';
                                }
                            ?>

                         <?php if(isset($_SESSION['user'])){ ?><a href="iklan-baru.php" class="button2">Buat Iklan Baru</a>  <?php } ?>

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
