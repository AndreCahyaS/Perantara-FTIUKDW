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

                		  <div id="banner" class="grid_18">
                                  <a href="home.html">SEMENTARA<img src="banner.jpeg" height="300" width="600"></a>
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
                                <?php
                                        }
                                ?>


                          </div>


                                  
                      </div>

                  
                  <div id="content" class="grid_24">

                    <div id="pencarian" class="grid_18">
                       <form id="cari" >
                        
                          <input  type="text"  placeholder="Kata Pencarian" autocomplete="off"></input>
                        
                          <input type="submit" value="Cari">
                        
                          <select id="provinsi">
                            <option value="semua-kategori">Semua provinsi</option>
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

                           <select id="Kategori">
                            <option value="semua-kategori">Semua Kategori</option>
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
                                    $query = "SELECT title,isi FROM topik WHERE id_topik='".$numbers[0]."' OR id_topik='".$numbers[1]."' OR id_topik='".$numbers[2]."' OR id_topik='".$numbers[3]."'" or die('disni');
                                    $hasilquery = mysql_query($query);

                                    #echo $hasilquery['id_topik']."wewew";
                                  
                                    #echo $hasilquery['title'];
                               #}
                               # $query = "SELECT * FROM topik WHERE id_topik='".$numbers[$i]."'" or die('disni');
                               # $hasilquery = mysql_query($query) or die('gagal disini');
                               echo "<table>";

                                while($data=mysql_fetch_assoc($hasilquery))
                                {
                                    echo "<tr>";
                    
                                    echo "<td>".$data['title']."</td>";
                                    echo "<td>".$data['isi']."</td>";

                                    echo "<tr>";            
                                 }
                             echo "</table>";
                          ?> 
                                <div id="barang1" class="grid_4">
                                                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                                 tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,</p>
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
