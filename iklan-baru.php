<?php 
    include("koneksi.php");

    session_start();

    if (isset($_POST['judul']) && isset($_POST['kategori']) && isset($_POST['harga']) && isset($_POST['nego']) && isset($_POST['kondisi']) && isset($_POST['propinsi']) && isset($_POST['deskripsi']) && isset($_FILES["gambar1"]) && isset($_FILES["gambar2"]))
    {
        $judul = $_POST['judul'];
        $deskripsi = $_POST['deskripsi'];
        $kategori = $_POST['kategori'];
        $username = $_SESSION['user'];
        $nego = $_POST['nego'];
        $kondisi = $_POST['kondisi'];
        $propinsi = $_POST['propinsi'];
        $tag1 = $_POST['tag1'];
        $tag2 = $_POST['tag2'];
        $tag3 = $_POST['tag3'];
        $tag4 = $_POST['tag4'];
        $gambar1 = $_FILES['gambar1'];
        $gambar2 = $_FILES['gambar2'];
        $status = $_POST['status'];
        $harga = $_POST['harga'];
        $query = "INSERT INTO `perantara`.`user` (`id_topik`,`title`, `isi`, `date`, `kategori`, `username`, `nego`, `kondisi`, `propinsi`, `tag1`, `tag2`, `tag3`, `tag4`, 'status', 'harga') VALUES ( NULL,'".$judul."','".$deskripsi."',  CURRENT_TIMESTAMP, '".$kategori."', '".$username."', '".$nego."', '".$kondisi."', '".$propinsi."','".tag1."','".tag2."','".tag3."','".tag4."','".status."','".harga."')";

        $res = mysql_query("$query");

        if ($res)
        {   

            echo "query berhasil ditambahkan";
             $directoryPath="images/";
             $query = "SELECT id_topik FROM topik WHERE judul='".$judul."'";
            move_uploaded_file($_FILES["upload"]["tmp_name"], $directoryPath."".$gambar1."1");
            move_uploaded_file($_FILES["upload"]["tmp_name"], $directoryPath."".$gambar2."2");
        }

       
    }
    else
        echo "Isi semua yang bertanda bintang";



            //buat code untuk upload gambar, pindahkan file yang diupload ke images/
            //  dengan nama avatar.png
        
                

            


    mysql_close($koneksi);
?>

<!DOCTYPE html>
<html>
        <head>
                  
                <script type="text/javascript" src="jquery-1.10.2.js"></script>
                <link rel="stylesheet" href="css/960_24_col.css" type="text/css"/>
                <link rel="stylesheet" href="css/iklan-baru.css" type="text/css"/>
                <link rel="stylesheet" href="css/headerfooter.css" type="text/css"/>
                <meta charset="utf-8">

        </head>

        <body>
            <div id="wrap" class="container_24">
                <div id="header" class="grid_24">

                    <div id="banner" class="grid_18">
                        <a href="home.html">SEMENTARA<img src="banner.jpeg" height="300" width="600"></a>
                    </div>

                    <form id="login" method="POST" class="grid_5" action="login.php">
                        <label for="username">username</label><input type="text" name="username" class="placeholder" placeholder="Akun Pengguna"><br/>
                        <label for="password">password</label><input type="password" name="password" class="placeholder" placeholder="Kata Sandi"><br/>
                        <input type="submit" value="Masuk">
                        <input type="submit" value="Daftar?">
                    </form> 
                </div>

                <div id="content" class="grid_24">
                  <div id="content_1" class="grid_18">
                    <h4>Iklan Baru</h4>
                    <form id="new-post" method="POST" action="iklan-baru.php" >
                        <table>
                            <tr>
                                <td>judul:</td><td><input type="text" name"judul"/></td>
                            </tr>
                            <tr>
                                <td>kategori: </td> <td><input type="text" name="kategori"/></td>
                            </tr>
                            <tr>
                                <td>harga: </td> <td><input type="text" name="harga"/></td>
                            </tr>
                            <tr>
                                <td>nego : </td> <td><input type="checkbox" name="nego" value="iya"/></td>
                            </tr>
                            <tr>
                                <td>kondisi : </td>
                                     <td><select name="kondisi">
                                            <option value="baru">Baru</option>
                                            <option value="bekas">Bekas</option>
                                          </select></td>
                            </tr>
                            <tr>
                                <td>propinsi : </td>
                                     <td><select name="propinsi">
                                            <option>Pilih Propinsi</option>
                                            <option value="aceh">Aceh</option>
                                            <option value="Bekasi">Bekasi</option>
                                            <option value="Jawa Timur">Jawa Timur</option>
                                          </select></td>
                            </tr>
                            <tr>
                                <td>deskripsi : </td> <td><input type="text" name="deskripsi"/></td>
                            </tr>
                            <tr>
                                <td>Harga : </td> <td><input type="text" name="harga"/></td>
                            </tr>
                            <tr>
                                <td>status : </td> <td><input type="text" name="status"/></td>
                            </tr>
                            <tr>
                                <td>gambar1 : </td> <td><input type="file" name="gambar1"/></td>
                            </tr>
                            <tr>
                                <td>gambar2 : </td><td><input type="file" name="gambar2"/></td>
                            </tr>
                        </table>
                        <table>
                            <tr>
                                <td>tag1 : <input type="text" name="tag1"/></td>
                                <td>tag3 : <input type="text" name="tag3"/></td>
                            </tr>
                            <tr>
                                <td>tag2 : <input type="text" name="tag2"/></td>
                                <td>tag4 : <input type="text" name="tag4"/></td>
                            </tr>
                        </table>
                        <input type="submit" value="Buat!" class="button2">
                    </form>
                  </div>
                  <div id="nav_right" class="grid_5">
                    <div id="pencarian_mini">
                       <form id="cari" method="GET" action="hasil-pencarian.html">
                        
                          <input  type="text" name="search" placeholder="Kata Pencarian" autocomplete="off"  <?php if($_GET[carian]== "wew")echo "value='1'"; ?>/>
                        
                          <input type="submit" value="Cari" class="button3"/>
                        
                       </form>
                    </div>
                     <div id="daftar_iklan">
                        Iklan saya
                            <?php 
                            #echo "
                            #       <ul>
                                    # while() {
                                        # code...
                                    # }
                            #       </ul>
                            #     "
                            ?>
                        <a href="iklan-baru.php"> buat iklan</a>
                    </div>
  
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
