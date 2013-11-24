<!DOCTYPE html>

        <head>
               
        
                <script type="text/javascript" src="jquery-1.10.2.js"></script>
                <link rel="stylesheet" href="css/960_24_col.css" type="text/css"/>
                <link rel="stylesheet" href="css/headerfooter.css" type="text/css"/>
                <link rel="stylesheet" type="text/css" href="css/maintenis.css">
                <meta charset="utf-8">

                <?php 
                  if(include("koneksi.php"))
                  {
                    mysql_close();
                    header("location:index.php");
                  }
                ?>

        </head>

        <body>
                <div id="wrap" class="container_24">
                  
                  <div id="content" class="grid_24 push_3">

                    <img src="image/maintenis.jpg">
                                        
                  </div>

                 </div>

           
        </body>

</html>
