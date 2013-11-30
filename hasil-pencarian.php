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
                                      
                                 ?>
                                 <h3>Hello ,<a href="halamansaya.php"><?php echo $username; ?></a></h3>

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
                    <div id="hasil-pencarian" class="grid_18">
                         <?php 
                         $dataPerPage = 5;
                         if(isset($_GET['page'])) {
                         $noPage = $_GET['page'];
                         }
                        else $noPage = 1;
                        $offset = ($noPage - 1) * $dataPerPage;
                
                         if(isset($_GET['provinsi']) || isset($_GET['pencarian']))
                         {

                          $kategori = $_GET['kategori'];
                          $kategoria= $_GET['kategori'];
                          $provinsi = $_GET['provinsi'];
                          $provinsia = $_GET['provinsi'];

                            if ($_GET['provinsi'] == "semua-provinsi" && $_GET['kategori'] == "semua-kategori") {
                                
                                $query = "SELECT * FROM topik WHERE (isi LIKE CONCAT('%', ?, '%') OR title LIKE CONCAT('%', ?, '%') OR tag1 LIKE CONCAT('%', ?, '%')) AND propinsi NOT LIKE CONCAT('%', ?, '%') AND kategori NOT LIKE CONCAT('%', ?, '%') LIMIT $offset, $dataPerPage";
                                $query2 = "SELECT * FROM topik WHERE (isi LIKE CONCAT('%', ?, '%') OR title LIKE CONCAT('%', ?, '%') OR tag1 LIKE CONCAT('%', ?, '%')) AND propinsi NOT LIKE CONCAT('%', ?, '%') AND kategori NOT LIKE CONCAT('%', ?, '%')";
                                
                                
                            }
                            else if ($_GET['provinsi'] != "semua-provinsi" && $_GET['kategori'] != "semua-kategori") {
                                

                                $query = "SELECT * FROM topik WHERE (isi LIKE CONCAT('%', ?, '%') OR title LIKE CONCAT('%', ?, '%') OR tag1 LIKE CONCAT('%', ?, '%')) AND propinsi LIKE CONCAT('%', ?, '%') AND kategori LIKE CONCAT('%', ?, '%') LIMIT $offset, $dataPerPage";
                                $query2 = "SELECT * FROM topik WHERE (isi LIKE CONCAT('%', ?, '%') OR title LIKE CONCAT('%', ?, '%') OR tag1 LIKE CONCAT('%', ?, '%')) AND propinsi LIKE CONCAT('%', ?, '%') AND kategori LIKE CONCAT('%', ?, '%')";
                               
                            }
                            
                            else if($_GET['kategori'] == "semua-kategori" && $_GET['provinsi'] != "semua-provinsi")
                            {
                               $query = "SELECT * FROM topik WHERE (isi LIKE CONCAT('%', ?, '%') OR title LIKE CONCAT('%', ?, '%') OR tag1 LIKE CONCAT('%', ?, '%')) AND propinsi NOT LIKE CONCAT('%', ?, '%') AND kategori LIKE CONCAT('%', ?, '%') LIMIT $offset, $dataPerPage";
                               $query2 = "SELECT * FROM topik WHERE (isi LIKE CONCAT('%', ?, '%') OR title LIKE CONCAT('%', ?, '%') OR tag1 LIKE CONCAT('%', ?, '%')) AND propinsi NOT LIKE CONCAT('%', ?, '%') AND kategori LIKE CONCAT('%', ?, '%')";
                              

                            }
                            else if($_GET['kategori'] != "semua-kategori" && $_GET['provinsi'] == "semua-provinsi")
                            {
                               $query = "SELECT * FROM topik WHERE (isi LIKE CONCAT('%', ?, '%') OR title LIKE CONCAT('%', ?, '%') OR tag1 LIKE CONCAT('%', ?, '%')) AND propinsi LIKE CONCAT('%', ?, '%') AND kategori NOT LIKE CONCAT('%', ?, '%') LIMIT $offset, $dataPerPage";
                               $query2 = "SELECT * FROM topik WHERE (isi LIKE CONCAT('%', ?, '%') OR title LIKE CONCAT('%', ?, '%') OR tag1 LIKE CONCAT('%', ?, '%')) AND propinsi = ? AND kategori NOT LIKE CONCAT('%', ?, '%')";
                              
                            }

                          

                            

                            if($_GET['pencarian'] == "")
                            {
                                
                                $pencariana = "";
                                
                            }
                            else
                            {
                                $pencariana = $_GET['pencarian'];
                                $pencarian = "%"."$pencariana"."%";
                            }

                            $stmt = mysqli_prepare($mysqli, $query) or die(mysqli_error($mysqli));

                            mysqli_stmt_bind_param($stmt, "sssss", $pencarian, $pencarian, $pencarian, $provinsi, $kategori) or die(mysqli_error($mysqli));

                            mysqli_stmt_execute($stmt) or die(mysqli_error($mysqli));;
                            $result = mysqli_stmt_get_result($stmt);

                            
                            $stmt2 = mysqli_prepare($mysqli, $query2) or die(mysqli_error($mysqli));

                            mysqli_stmt_bind_param($stmt2, "sssss", $pencarian, $pencarian, $pencarian, $provinsi, $kategori) or die(mysqli_error($mysqli));
                            mysqli_stmt_execute($stmt2) or die(mysqli_error($mysqli));;
                            $result2 = mysqli_stmt_get_result($stmt2);
                            $total = mysqli_num_rows($result2);
                           
                         ?>
                         <div id="jumlah">Ditemukan <?php echo $total ?> hasil dari pencarian</div>
                         <?php 
                         $jumPage = ceil($total/$dataPerPage);
                         if ($noPage > 1) echo  "<a href='".$_SERVER['PHP_SELF']."?page=".($noPage-1)."'>&lt;&lt; Prev</a>";
                         for($page = 1; $page <= $jumPage; $page++)
                            {
                                     if ((($page >= $noPage - 3) && ($page <= $noPage + 3)) || ($page == 1) || ($page == $jumPage))
                                     {
                                        if (($noPage == 1) && ($page != 2))  echo "...";
                                        if (($noPage != ($jumPage - 1)) && ($page == $jumPage))  echo "...";
                                        if ($page == $noPage) echo " <b>".$page."</b> ";
                                        else echo " <a href='".$_SERVER['PHP_SELF']."?page=".$page."&pencarian=".$pencariana."&provinsi=".$provinsia."&kategori=".$kategoria."'>".$page."</a> ";
                                        $noPage = $page;
                                     }
                            }

                         ?>
                         <div class="clear"></div>
                            <?php 
                                while($data = mysqli_fetch_array($result))
                                {
                                    /*if($_SESSION['halaman-pencarian']-1 == ($_SESSION['total-pencarian']-1)/5)
                                    {*/
                                    //echo '<a href="rincian.php?id='.$data['id_topik'].'>';
                            ?>
                         <div class="hasil">

                                

                                <a href="pages.php?id=<?php echo $data['id_topik'] ?>">
                                    <img src="<?php if(isset($data['gambar1'])){ echo "image/".$data['gambar1'];} else if(isset($data['gambar2'])){echo image/$data['gambar2'];} else echo 'image/no-image.jpg' ?>" title="<?php echo $data['title']; ?>">


                                    <p>
                                        <?php
                                            echo $data['isi'];
                                        ?>
                                        <!-- Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                                    tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                                    quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
                                    consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
                                    cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
                                    proident, sunt in culpa qui officia deserunt mollit anim id est laborum. -->
                                    </p>
                                </a>
                         </div>
                            <?php 
                                    //echo '</a>';
                                    //}
                                }
                            }
                            ?>

                         <?php if(isset($_SESSION['user'])){ ?><a href="iklan-baru.php" class="button2">Buat Iklan Baru</a>  <?php } ?>
                         <!-- <button></button><a href="hasil-pencarian.php?page=<?php //echo (mysql_num_rows($_SESSION['pencarian'])/5) ?>"></a> -->
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
