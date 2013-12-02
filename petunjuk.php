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
                    <p></pre>Petunjuk dan Aturan Umum Memasang Iklan
Perantara ingin menyediakan media jual-beli yang berkualitas bagi semua pengguna, mudah untuk diakses, menyenangkan dan memenuhi standar etika serta peraturan. <br>Oleh karena itu kami memiliki beberapa peraturan untuk pemasangan iklan di Perantara yang harus dipatuhi oleh semua pengguna website.<br><br>
<br>
1. Produk / Jasa<br>
1 iklan hanya diperuntukkan untuk 1 produk / jasa saja. Jangan menjual lebih dari 1 produk / jasa dalam 1 iklan.<br>
<br>
2. Kategori<br>
Pilihlah kategori yang tepat dan sesuai dengan produk yang anda jual. Apabila kategori yang tepat belum tersedia, silahkan pilih kategori yang paling mendekati.<br>
<br>
3. Judul Iklan<br>
- Gunakan judul yang mencerminkan produk / jasa yang anda jual. Hindari judul yang hanya 1 kata atau tidak fokus dengan produk yang anda jual.<br>
- Tidak diperbolehkan mencantumkan harga pada bagian judul.<br>
<br>
4. Harga<br>
- Pasang harga sebenarnya atau harga yang paling mendekati produk yang anda jual.<br>
- Untuk kategori mobil, harga adalah harga pokok dan bukan harga cicilan.<br>
<br>
5. Gambar<br>
- Gunakan gambar yang sesuai dengan produk / jasa yang anda jual.<br>
- Tidak diperbolehkan untuk menggunakan gambar yang mengandung unsur pornografi. Untuk produk lingerie harap menggunakan manequin sebagai peraga.<br>
- Tidak diperbolehkan menggunakan gambar yang terdapat tanda kepemilika, watermark, nama situs/URL atau hyperlink website lain.<br>
- Untuk kategori Lowongan kerja dan jasa diperbolehkan menggunakan gambar logo perusahaan.<br>
<br>
6. Deskripsi<br>
- Berikan penjelasan spesifikasi produk/jasa yang anda tawarkan secara jelas.<br>
- Penggunaan email, alamat rumah/kantor, pin BB, nomor telepon, atau lokasi kontak yang biasanya digunakan untuk COD (Cash on Delivery) diperbolehkan.<br>
- Tidak diperbolehkan mengandung hyperlink/html yang mengarah ke website lain.<br>
- Tidak diperbolehkan memberikan deskripsi yang melanggar etika dan undang-undang.<br>
<br>
7. Link<br>
Dilarang memberikan link website atau mereferensi situs lain yang merupakan kompetitor dari Perantara baik di dalam deskripsi atau di judul iklan.<br>
<br>
<br>
Dilarang mengiklankan barang/jasa sebagai berikut:<br>
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
<br>
Keterangan<br>
Perantara mempunyai hak untuk memutuskan iklan yang ditayangkan dan mencabut iklan yang tidak sesuai dengan peraturan pemasangan iklan, maupun dengan mempertimbangkan berbagai alasan tertentu. Peraturan ini akan selalu diperbaharui dan dapat berubah sewaktu-waktu.<br></pre></p>
                
                               
                    </div>
                
                     <div id="iklan" class="grid_5">
                                  <?php 
                            $result = mysql_query("Select * from topik");
                            $total = mysql_num_rows($result);       
                            $numbers = array(1,1,1,1);
                        
                                                                 
                                        $numbers[0] = rand(1, $total);
                                        $numbers[1] = rand(1, $total);
                                        $numbers[2] = rand(1, $total);
                                        $numbers[3] = rand(1, $total);
                                  
            
                        
                              

                            
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
                                    <img src="image/<?php echo $data['gambar1'];?>" width="150" heigth="150">
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
