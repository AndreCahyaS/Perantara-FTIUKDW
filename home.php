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
                            <option value=""></option>
                            <option value=""></option>
                            <option value=""></option>
                            <option value=""></option>
                            <option value=""></option>
                            <option value=""></option>
                            <option value=""></option>
                            <option value=""></option>
                            <option value=""></option>
                            <option value=""></option>
                            <option value=""></option>
                            <option value=""></option>
                            <option value=""></option>
                            <option value=""></option>
                            <option value=""></option>
                            <option value=""></option>
                            <option value=""></option>
                            <option value=""></option>
                            <option value=""></option>
                            <option value=""></option>
                            <option value=""></option>
                            <option value=""></option>
                            <option value=""></option>
                            <option value=""></option>
                            <option value=""></option>
                            <option value=""></option>
                            <option value=""></option>
                            <option value=""></option>
                            <option value=""></option>
                            
                          </select> 

                           <select id="Kategori">
                            <option value="semua-kategori">Semua Kategori</option>
                            <option value=""></option>
                            <option value=""></option>
                            <option value=""></option>
                            <option value=""></option>
                            <option value=""></option>
                            <option value=""></option>
                            <option value=""></option>
                            <option value=""></option>
                            <option value=""></option>
                            <option value=""></option>
                            <option value=""></option>
                            <option value=""></option>
                            <option value=""></option>
                            <option value=""></option>
                            <option value=""></option>
                            <option value=""></option>
                            <option value=""></option>
                            <option value=""></option>
                            <option value=""></option>
                            <option value=""></option>
                            <option value=""></option>
                            <option value=""></option>
                            <option value=""></option>
                            <option value=""></option>
                            <option value=""></option>
                            <option value=""></option>
                            <option value=""></option>
                            <option value=""></option>
                            <option value=""></option>
                            <option value=""></option>
                            
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
                        
                                    while ( $numbers[0] == $numbers[1] || $numbers[0] == $numbers[2] || $numbers[0] == $numbers[3] || $numbers[1] == $numbers[2] || $numbers[1] == $numbers[3] || $numbers[2] == $numbers[3]  ) {
                                     
                                    
                                    $numbers[0] = rand(1, $total);
                                    $numbers[1] = rand(1, $total);
                                    $numbers[2] = rand(1, $total);
                                    $numbers[3] = rand(1, $total);
                                    }
            
                        
                                echo "$numbers[1] $numbers[2] $numbers[3] $numbers[0]";

                            
                               /*for($i=0;$i<4;$i++) {
                                $query = "SELECT * FROM topik WHERE id_topik='".$numbers[$i]."'" or die('disni');
                                $hasilquery = mysql_query($query) or die('gagal disini');

                              
                                echo $hasilquery['title'];
                               }*/
                                $query = "SELECT * FROM topik WHERE id_topik='".$numbers[$i]."'" or die('disni');
                                $hasilquery = mysql_query($query) or die('gagal disini');
                               echo "<table>";
                                while($data=mysql_fetch_assoc($hasilquery))
                                {
                                  
                                   
                                    echo "<tr>";
                    
                                    echo $data['title'];
                                    echo "<tr>";            
                             }
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
