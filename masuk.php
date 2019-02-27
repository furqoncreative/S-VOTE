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
    <link href="css/style.css" rel="stylesheet">

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
          <div class="col-md-8 col-md-offset-2 centered">
            <h2>MASUKAN ID DAN NAMA ANDA !</h2>
            <div class="mtb">
          

<?php 
include_once 'fungsi.php';
session_start();
if (isset($_SESSION["id"])) {
    header("Location: pilih.php");
}

// data user ini hanya untuk demo, pada kenyataannya nanti menggunakan database


if (isset($_POST["submit"])) {
    // simpan data $_POST ke dalam variabel
    $id = $_POST["id"];
    $nama = $_POST["nama"];


    
 // lakukan select data admin ke database. untuk memastikan data ada di database


  $res = $con->query("SELECT * FROM temp where id='$id'");
  $row = $res->fetch(PDO::FETCH_ASSOC);
   $user = $row['id'];
  
  if($user==$id)
 {
    $error = true;
    echo "<script>
             alert('Anda Sudah Memilih');
              document.location.href='masuk.php';
             </script>"; 

      // login berhasil


    } else {
      // login gagal

      // apabila username & password kosong atau tidak sesuai


 $res = $con->query("SELECT * FROM pemilih where id='$id' and nama='$nama'");
  $row = $res->fetch(PDO::FETCH_ASSOC);
   $user = $row['id'];
   $name = $row['nama'];
  
  if($user==$id && $name==$nama)
 {
      // login berhasil

      // set session user, variabel yang dapat digunakan di semua halaman
      $_SESSION["id"] = $id;

      // set cookie untuk username dan password selama 1 minggu
      
      // redirect user ke halaman admin
      header("Location: pilih.php");
      exit;
  
    } else {

         $error = true;
          echo "<script>
             alert('Anda Belum Terdaftar');
              document.location.href='masuk.php';
             </script>"; 
    }



    }
}
?>    <form role="form" action="masuk.php" method="post" enctype="plain"> 
      <div class="form-group">
 
  <input type="id" name="id" class="subscribe-input" placeholder="Masukan ID anda ..." required>
  <input type="nama" name="nama" class="subscribe-input" placeholder="Masukan NAMA anda ..." required>
      </div>


          <button class='btn btn-conf btn-green' type="submit" name="submit">SUBMIT</button>
              </form>
            </div><!--/mt-->
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

