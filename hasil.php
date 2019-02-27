<!DOCTYPE html>
<html lang="en">


<head>
<?php

require 'fungsi.php';

?>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>PEMILIHAN KETUA & WAKIL KETUA OSIS ONLINE - SMKN SITURAJA</title>
 
    <!-- Bootstrap Core CSS -->
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Lato" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Catamaran:100,200,300,400,500,600,700,800,900" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Muli" rel="stylesheet">

    <!-- Plugin CSS --> 
    <link rel="stylesheet" href="vendor/font-awesome/css/font-awesome.min.css">
    <link rel="stylesheet" href="vendor/simple-line-icons/css/simple-line-icons.css">
    <link rel="stylesheet" href="vendor/device-mockups/device-mockups.min.css">
    <link href="css/full-slider.css" rel="stylesheet">

    <!-- Theme CSS -->
    <link href="css/new-age.min.css" rel="stylesheet">
        <!-- Fonts -->
    <link href="font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
  <link href="css/animate.css" rel="stylesheet" />
    <!-- Squad theme CSS -->
    <link href="css/style1.css" rel="stylesheet">
  <link href="color/default.css" rel="stylesheet">
      <!-- Core JavaScript Files -->
    <script src="js/jquery.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/jquery.easing.min.js"></script> 
  <script src="js/jquery.scrollTo.js"></script>
  <script src="js/wow.min.js"></script>
    <!-- Custom Theme JavaScript -->
    <script src="js/custom.js"></script>

</head>

<body id="page-top">

    <nav id="mainNav" class="navbar navbar-default navbar-fixed-top">
        <div class="container">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                    <span class="sr-only">Toggle navigation</span> Menu <i class="fa fa-bars"></i>
                </button>

                <a class="navbar-brand page-scroll" href="index.php">S-VOTE</a>

            </div>

            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav navbar-right">
                <li>






                </li>
                    <li>
                        <a class="page-scroll" href="index.php #tentang">Tentang</a>
                    </li>
                    <li>
                        <a class="page-scroll" href="index.php #caramemilih">Cara Memilih</a>
                    </li>
                
                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container-fluid -->
    </nav>
<header id="h">
     <section id="about" class="home-section text-center">
    <div class="heading-about">
      <div class="container">
      <div class="row">
        <div class="col-lg-8 col-lg-offset-2">
          <div class="wow bounceInDown" data-wow-delay="0.4s">
          <div class="section-heading">
          <h2>PEROLEHAN SUARA SEMENTARA</h2>
          <i class="fa fa-2x fa-angle-down"></i>

          </div>
          </div>
        </div>
      </div>
      </div>
    </div>
    <div class="container">

    <div class="row">
      <div class="col-lg-2 col-lg-offset-5">
        <hr class="marginbot-50">
      </div>
    </div>
        <div class="row">
            <div class="col-xs-4 col-sm-3 col-md-3">
        <div class="wow bounceInUp" data-wow-delay="0.2s">
                    <div class="inner">
<?php
include "koneksi.php";

$query = "SELECT * FROM calon WHERE id='1'"; // Tampilkan semua data gambar
$sql = mysqli_query($connect, $query); // Eksekusi/Jalankan query dari variabel $query
$row = mysqli_num_rows($sql); // Ambil jumlah data dari hasil eksekusi $sql

if($row > 0){ // Jika jumlah data lebih dari 0 (Berarti jika data ada)
    while($data = mysqli_fetch_array($sql)){ // Ambil semua data dari hasil eksekusi $sql
        
        echo $data['nama'];
        
       
    }
}
?>


                        <p class="subtitle">CALON 1</p>
                        <div class="avatar"><img src="img/team/1.jpg" alt="" class="img-responsive img-circle" /></div>
                    </div>
        </div>
            </div>
      <div class="col-xs-4 col-sm-3 col-md-3">
        <div class="wow bounceInUp" data-wow-delay="0.5s">
                    <div class="inner">
<?php
include "koneksi.php";

$query = "SELECT * FROM calon WHERE id='2'"; // Tampilkan semua data gambar
$sql = mysqli_query($connect, $query); // Eksekusi/Jalankan query dari variabel $query
$row = mysqli_num_rows($sql); // Ambil jumlah data dari hasil eksekusi $sql

if($row > 0){ // Jika jumlah data lebih dari 0 (Berarti jika data ada)
    while($data = mysqli_fetch_array($sql)){ // Ambil semua data dari hasil eksekusi $sql
        
        echo $data['nama'];
        
       
    }
}
?>
                        <p class="subtitle">CALON 2</p>
                        <div class="avatar"><img src="img/team/2.jpg" alt="" class="img-responsive img-circle" /></div>
                    </div>
        </div>
            </div>
      <div class="col-xs-4 col-sm-3 col-md-3">
        <div class="wow bounceInUp" data-wow-delay="0.8s">
                    <div class="inner">
<?php
include "koneksi.php";

$query = "SELECT * FROM calon WHERE id='3'"; // Tampilkan semua data gambar
$sql = mysqli_query($connect, $query); // Eksekusi/Jalankan query dari variabel $query
$row = mysqli_num_rows($sql); // Ambil jumlah data dari hasil eksekusi $sql

if($row > 0){ // Jika jumlah data lebih dari 0 (Berarti jika data ada)
    while($data = mysqli_fetch_array($sql)){ // Ambil semua data dari hasil eksekusi $sql
        
        echo $data['nama'];
        
       
    }
}
?>
                        <p class="subtitle">CALON 3</p>

<?php
$calon3=query("SELECT SUM(calon3) FROM voting");
foreach ($calon3 as $c) :
?>

                                    <tr>
                                    
                                        <td><?php echo $c["SUM(calon3)"];?></td>
                                       
                                    </tr>
                                    
<?php endforeach ; ?>
                      
                </div>
        </div>
            </div>  
    </div>
  </section>
    </header>
    <footer>
        <div class="container">
            <p>&copy; COPYRIGHT OSIS SMKN SITURAJA 2016</p>
            
        </div>
    </footer>

    <!-- jQuery -->
    <script src="vendor/jquery/jquery.min.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="vendor/bootstrap/js/bootstrap.min.js"></script>

    <!-- Plugin JavaScript -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.3/jquery.easing.min.js"></script>

    <!-- Theme JavaScript -->
    <script src="js/new-age.min.js"></script>

</body>

</html>
