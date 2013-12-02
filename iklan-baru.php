<?php 
    include("koneksi.php");
    session_start();

    if(!isset($_SESSION['user'])) {
        header("Location:intruder.php");
    }

    if (isset($_POST['judul']) && isset($_POST['kategori']) && isset($_POST['harga']) && isset($_POST['deskripsi']))
    {
        $judul = $_POST['judul'];
        $deskripsi = $_POST['deskripsi'];
        $kategori = $_POST['kategori'];
        $status = "Belum Terjual";
        $username = $_SESSION['user'];
        $harga = $_POST['harga'];
        $nego = $_POST['nego'];
        $kondisi = $_POST['kondisi'];
        $propinsi = $_POST['propinsi'];
        $tag1 = $_POST['tag1'];
        $tag2 = $_POST['tag2'];
        $tag3 = $_POST['tag3'];
        $tag4 = $_POST['tag4'];
        $date1 = date("D M d, Y G:i , s");
        $date2 = date("D M d, Y G: , s");

            if(isset($_FILES['gambar1']) || isset($_FILES['gambar2'])) {
            $dir = "image/"; 
            $namagambar1 = sha1($username.$date1).$_FILES["gambar1"]["name"];
            $namagambar2 = sha1($username.$date2).$_FILES["gambar2"]["name"];
            $gambar1type = $_FILES['gambar1']["type"];
            $gambar2type = $_FILES['gambar2']["type"];
            if($gambar1type == "image/jpeg" || $gambar1type == "image/pjpeg" || $gambar1type == "image/png" || $gambar1type == "image/gif" || $gambar2type == "image/jpeg" || $gambar2type == "image/pjpeg" || $gambar2type == "image/png" || $gambar2type == "image/gif") { 
 
            move_uploaded_file($_FILES["gambar1"]["tmp_name"], $dir.$namagambar1);
            move_uploaded_file($_FILES["gambar2"]["tmp_name"], $dir.$namagambar2);
            }
            else {
                $namagambar1 = NULL;
                $namagambar2 = NULL;
            }
        }

        $query = "INSERT INTO `u957988429_a`.`topik` (
`id_topik` ,
`title` ,
`isi` ,
`date` ,
`kategori` ,
`username` ,
`nego` ,
`kondisi` ,
`propinsi` ,
`tag1` ,
`tag2` ,
`tag3` ,
`tag4` ,
`status` ,
`harga` ,
`gambar1` ,
`gambar2`
)
VALUES (
NULL , ?, ?,
CURRENT_TIMESTAMP , '".$kategori."', '".$username."', '".$nego."', '".$kondisi."', '".$propinsi."', ?, ?, ?, ?, '".$status."', ?, '".$namagambar1."' , '".$namagambar2."'
);";
        $stmt = mysqli_prepare($mysqli, $query);

        mysqli_stmt_bind_param($stmt, "sssssss", $judul, $deskripsi, $tag1, $tag2, $tag3, $tag4, $harga) or die(mysqli_error());
        $res = mysqli_stmt_execute($stmt);
    
        
        if ($res)
        {
            $query = "SELECT `id_topik` FROM topik WHERE kategori = '$kategori' AND isi = '$deskripsi' AND gambar1 = '$namagambar1'";
                $result = mysql_query($query);
            $data=mysql_fetch_assoc($result);
            $redi = "pages.php?id=".$data['id_topik'];
            header("Location:$redi");
        }
    }
    else {
        $semua = "Harap Isi Semua kolom yang ada";
    }
            

   
?>

<!DOCTYPE html>
<html>
<title>-perantara.com</title>
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
                        <a href="index.php"> <img src="banner.jpeg" height="100" width="600"></a>
                    </div>


                          <div id="masuk" class="grid_5">
                                 <?php
                                    
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
                                <?php
                                        }
                                ?>


                          </div>

                </div>

                <div id="content" class="grid_24">
                  <div id="content_1" class="grid_18">
                    <h4>Iklan Baru</h4>
                    <?php
                    if(isset($_GET['add'])) {
                        echo "Data Berhasil ditambahkan";
                    }
                    
                     else   echo $semua;
                    ?>
                    <form action="iklan-baru.php" method="POST" enctype="multipart/form-data">
                        <table>
                            <tr>
                                <td>judul:</td><td><input type="text" name="judul"></td>
                            </tr>
                            <tr>
                                 <td>Kategori : </td>
                                     <td><select name="kategori">
                                             <option value="Kendaraan">Kendaraan</option>
                                             <option value="properti">Properti</option>
                                             <option value="fashion">Fashion</option>
                                             <option value="elektronikgadget">Elektronik dan Gadget</option>
                                             <option value="kecantikankesehatan">Kecantikan dan Kesehatan</option>
                                             <option value="hobiolahraga">Hobi dan Olahraga</option>
                                             <option value="rumahtangga">Rumah Tangga</option>
                                             <option value="hewanpeliharaan">Hewan Peliharaan</option>
                                          </select></td>
                            </tr>
                            <tr>
                                <td>harga: </td> <td><input type="text" name="harga"></td>
                            </tr>
                            <tr>
                                <td>Nego : </td>
                                     <td><select name="nego">
                                            <option value="nego">Nego</option>
                                            <option value="nonego">No Nego</option>
                                          </select></td>
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
                                          </select></td>
                            </tr>
                            <tr>
                                <td>deskripsi : </td> <td><input type="text" name="deskripsi"></td>
                            </tr>
                            <tr>
                                <td>Gambar 1 : </td><td><input type="file" name="gambar1"></td>
                            </tr>
                            <tr>
                                <td>Gambar 2 : </td><td><input type="file" name="gambar2"></td>
                            </tr>
                            <tr>
                                <td>tag1 : <input type="text" name="tag1"></td>
                                <td>tag3 : <input type="text" name="tag3"></td>
                            </tr>
                            <tr>
                                <td>tag2 : <input type="text" name="tag2"></td>
                                <td>tag4 : <input type="text" name="tag4"></td>
                            </tr>
                        </table>
                        <input type="submit" value="Buat!" class="button2">
                    </form>
                  </div>
                  <div id="nav_right" class="grid_5">
                   
                    </div>
                     

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