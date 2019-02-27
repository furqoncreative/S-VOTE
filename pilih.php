<!DOCTYPE html>
<html lang="en">


<head>

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
      <div class="container">
        <div class="row">
        <div class="header-content">
        <div class="header-content-inner">
         <div class="col-xl-12">
         <div class="content  table-full-width">
         <div class="team-member">
                         <div class="team-member">
                                <table border="0" class="table table-hover">
                                    <thead>
                                        <th><center>NO URUT 1</center></th>
                                        <th><center>NO URUT 2</center></th>
                                        <th><center>NO URUT 3</center></th>
                                        <tr>
                                            <th> <center>
<?php
session_start();

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



                                            </center></th>
                                            <th><center>
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

                                            </center></th>
                                            <th><center>
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


                                            </center></th>
                                        </tr>
                                        <tr>
                                        <form method="post" action="">
                                            <th>
<?php
// Load file koneksi.php
include "koneksi.php";

$query = "SELECT * FROM gambar WHERE id='1'"; // Tampilkan semua data gambar
$sql = mysqli_query($connect, $query); // Eksekusi/Jalankan query dari variabel $query
$row = mysqli_num_rows($sql); // Ambil jumlah data dari hasil eksekusi $sql

if($row > 0){ // Jika jumlah data lebih dari 0 (Berarti jika data ada)
    while($data = mysqli_fetch_array($sql)){ // Ambil semua data dari hasil eksekusi $sql
      
        echo "<img src='admin/pages/images/".$data['nama']."' width='375' height='300' class='img-responsive img-rounded' alt='CALON 3'>";
       
    }
}
?>

                                            </th>
                                            <th>
                                              <?php
// Load file koneksi.php
include "koneksi.php";

$query = "SELECT * FROM gambar WHERE id='2'"; // Tampilkan semua data gambar
$sql = mysqli_query($connect, $query); // Eksekusi/Jalankan query dari variabel $query
$row = mysqli_num_rows($sql); // Ambil jumlah data dari hasil eksekusi $sql

if($row > 0){ // Jika jumlah data lebih dari 0 (Berarti jika data ada)
    while($data = mysqli_fetch_array($sql)){ // Ambil semua data dari hasil eksekusi $sql
      
        echo "<img src='admin/pages/images/".$data['nama']."' width='375' height='300' class='img-responsive img-rounded' alt='CALON 3'>";
       
    }
}
?>
  

                                            </th>
                                            <th>
<?php
// Load file koneksi.php
include "koneksi.php";

$query = "SELECT * FROM gambar WHERE id='3'"; // Tampilkan semua data gambar
$sql = mysqli_query($connect, $query); // Eksekusi/Jalankan query dari variabel $query
$row = mysqli_num_rows($sql); // Ambil jumlah data dari hasil eksekusi $sql

if($row > 0){ // Jika jumlah data lebih dari 0 (Berarti jika data ada)
    while($data = mysqli_fetch_array($sql)){ // Ambil semua data dari hasil eksekusi $sql
      
        echo "<img src='admin/pages/images/".$data['nama']."' width='375' height='300' class='img-responsive img-rounded' alt='CALON 3'>";
       
    }
}
?>

                                            </th>
                                        </tr>
                                        
                                        <th><center>
                                        <form action="" method="post">
                                        <?php


$a=$_SESSION["id"];

// cek apabila user mencoba mengakses langsung halaman ini
if (!isset($_GET["id"])){


}
?>
<input type="hidden" name="id" value='<?= htmlspecialchars($a); ?>'>


                                        <input type="submit" class="btn btn-transparent" name="a" value="pilih"></input>
                                        </center></th>
                                        <input type="hidden" name="i" value='<?= htmlspecialchars($a); ?>'>
                                        <th><center><input type="submit" class="btn btn-transparent" name="b" value="pilih"></input></center></th>
                                        <input type="hidden" name="d" value='<?= htmlspecialchars($a); ?>'>
                                        <th><center><input type="submit" class="btn btn-transparent" name="c" value="pilih"></input></center></th>
                                        </form>
                                        </form>

                                        </tr>
                                    </thead>
                                </table>
         <div class="team-member">
        </div>
        </div>
        </div>
        </div>
        </div><!--/row-->
      </div><!--/container-->
    </div>

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

<?php require 'fungsi.php';


    if(isset($_POST['a'])) {

    if(a($_POST) > 0 ) {

        echo "<script>
             alert('terima kasih telah melakukan hak pilih');
              document.location.href='logout.php';
             </script>"; 



         }
        else {
            echo "<script>
             alert('ahhhh gagal');
              document.location.href='pilih.php';
             </script>";
        }
    }


 if(isset($_POST['b'])) {

    if(b($_POST) > 0 ) {

        echo "<script>
             alert('terima kasih telah melakukan hak pilih');
              document.location.href='logout.php';
             </script>"; 



         }
        else {
            echo "<script>
             alert('ahhhh gagal');
              document.location.href='pilih.php';
             </script>";
        }
    }


 if(isset($_POST['c'])) {

    if(c($_POST) > 0 ) {

        echo "<script>
             alert('terima kasih telah melakukan hak pilih');
              document.location.href='logout.php';
             </script>";


  
         }
        else {
            echo "<script>
             alert('ahhhh gagal');
              document.location.href='pilih.php';
             </script>";
        }
    }


if(isset($_POST['id'])) 

    if(id($_POST) > 0 ) 
?>