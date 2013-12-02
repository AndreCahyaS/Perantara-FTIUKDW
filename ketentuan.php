<!DOCTYPE html>

        <head>
               
        <title>Ketentuan</title>
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
                             <a href="index.php"> <img src="banner.png" height="100" width="600"></a>
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

                                 <a href="logout.php"> <button>Keluar</button></a>
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
                    <p></pre>Ketentuan:

Perantara menyediakan kebebasan bertransaksi. Dengan menggunakan Perantara, berarti anda setuju dengan persyaratan berikut: <br>
<br>
1. Dalam segala hal kami tidak bertanggung jawab atas kehilangan atau kerusakan termasuk, namun tidak terbatas pada, kehilangan atau kerugian tidak langsung atau kerugian apapun juga yang menyebabkan hilangnya data atau laba yang timbul dari atau dalam hubungannya dengan penggunaan situs web ini.<br>
2. Kami tidak bertanggung jawab atas pemfitnahan atau transaksi illegal yang terjadi melalui situs ini.<br>
3. Melalui situs ini, anda dapat terhubung ke situs web yang lain yang tidak berada di bawah kontrol Perantara. Kami tidak bisa menjamin sifat, isi dan ketersediaan situs-situs tersebut.<br>
4. Setiap upaya dilakukan untuk menjaga agar situs web tetap berjalan mulus. Namun kami tidak bertanggung jawab dan tidak berkewajiban terhadap situs web yang tidak tersedia untuk sementara waktu sehubungan dengan masalah teknis yang berada di luar kendali kami.<br>
<br><br>Aturan<br>
<br>Dilarang mengiklankan barang/jasa sebagai berikut:<br>
<br>
    - Senjata (termasuk senjata api, senapan angin dan benda yang mirip/sejenisnya)<br>
    - Obat-obatan terlarang<br>
    - Blackmarket item<br>
    - Barang kw, super premium, grade AAA/+++, suprem, dll<br>
    - Barang bajakan, copy dari original<br>
    - Barang replika, branded wanna be, look alike<br>
    - Konten vulgar, pornografi, erotis, & sex<br>
    - Produk MLM, money games, PPC, cepat kaya dan sejenisnya<br>
    - Asuransi, kartu kredit, KTA dan sejenisnya<br>
    - Database, jual data nasabah<br>
    - Alat bantu sex, vibrator, obat sex, obat kuat, enlargement, perangsang, pemerah puting, pemutih selangkangan<br>
    - Alkohol dan minuman keras lainnya<br>
    - Organ tubuh manusia dan manusia (human trafficking)<br>
    - Barang hasil kejahatan<br>
    - Tanaman & binatang yang dilindungi (termasuk bagian tubuh, seperti taring, cakar, air keras, kulit dll)<br>
    - Jasa hacking (perentas)<br>
    - Jasa pemalsuan dokumen, jual ijazah, jual sertifikat<br>
    - Jasa pijat (++)<br>
    - Pekerja seks komersial<br>
    - Jasa jailbreak<br>
    -  Minyak pelet, jasa santet, teluh<br>
    - Bahan peledak berbahaya<br>
    - Produk atau jasa yang melanggar undang-undang dan peraturan pemerintah<br>

Keterangan:<br>
Perantara mempunyai hak untuk memutuskan iklan yang ditayangkan dan mencabut iklan yang tidak sesuai dengan peraturan pemasangan iklan, maupun dengan mempertimbangkan berbagai alasan tertentu. Peraturan ini akan selalu diperbaharui dan dapat berubah sewaktu-waktu.

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
                                            <li><a href="tentang-kami.php" class="grid_4"><strong>Tentang Kami</strong></a></li>
                                    </ul>
                    
                    </div>
           </div>
        </body>

</html>
