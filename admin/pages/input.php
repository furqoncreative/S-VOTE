
<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Admin - Pemilihan Osis SMKN SITURAJA</title>

    <!-- Bootstrap Core CSS -->
    <link href="../vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- MetisMenu CSS -->
    <link href="../vendor/metisMenu/metisMenu.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="../dist/css/sb-admin-2.css" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="../vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>

<body>

    <div id="wrapper">

        <!-- Navigation -->
        <nav class="navbar navbar-default navbar-static-top" role="navigation" style="margin-bottom: 0">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="index.php">Pemilihan Osis SMKN SITURAJA</a>
            </div>
            <!-- /.navbar-header -->

            <ul class="nav navbar-top-links navbar-right">
                <li class="dropdown">
                    <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                        <i class="fa fa-user fa-fw"></i> <i class="fa fa-caret-down"></i>
                    </a>
                    <ul class="dropdown-menu dropdown-user">
                        <li class="divider"></li>
                        <li><a href="logout.php"><i class="fa fa-sign-out fa-fw"></i> Logout</a>
                        </li>
                    </ul>
                    <!-- /.dropdown-user -->
                </li>
                <!-- /.dropdown -->
            </ul>
            <!-- /.navbar-top-links -->

            <div class="navbar-default sidebar" role="navigation">
                <div class="sidebar-nav navbar-collapse">
                    <ul class="nav" id="side-menu">
                        <li class="sidebar-search">
                            <div class="input-group custom-search-form">
                                <input type="text" class="form-control" placeholder="Search...">
                                <span class="input-group-btn">
                                <button class="btn btn-default" type="button">
                                    <i class="fa fa-search"></i>
                                </button>
                            </span>
                            </div>
                            <!-- /input-group -->
                        </li>
                        <li>
                            <a href="index.php"><i class="fa fa-dashboard fa-fw"></i> Dashboard</a>
                        </li>
                        <li>
                            <a href="#"><i class="fa fa-bar-chart-o fa-fw"></i> Hasil <span class="fa arrow"></span></a>
                            <ul class="nav nav-second-level">
                                <li>
                                    <a href="hasil.php">Grafik</a>
                                </li>
                            </ul>
                            <!-- /.nav-second-level -->
                        </li>
                        <li>
                            <a href="#"><i class="fa fa-table fa-fw"></i> Tabel <span class="fa arrow"></span></a>
                            <ul class="nav nav-second-level">
                                <li>
                                    <a href="tabel_pemilih.php">Tabel Pemilih </a>
                                </li>
                                <li>
                                    <a href="tabel_calon.php"> Tabel Calon </a>
                                </li>
                            </ul>
                        </li>
                        <li>
                            <a href="input.php"><i class="fa fa-edit fa-fw"></i> Input </a>
                        </li>
                        <li>
                            <a href="#"><i class="fa fa-wrench fa-fw"></i> Elemen <span class="fa arrow"></span></a>
                            <ul class="nav nav-second-level">
                                <li>
                                    <a href="buttons.php">Tombol</a>
                                </li>
                                <li>
                                    <a href="icons.php"> Icon </a>
                                </li>
                            </ul>
                            <!-- /.nav-second-level -->
                        </li>
                    </ul>
                </div>
                <!-- /.sidebar-collapse -->
            </div>
            <!-- /.navbar-static-side -->
        </nav>

        <div id="page-wrapper">
            <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header">Input</h1>
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->
            <div class="row">
                <div class="col-lg-12">
                    <div class="panel panel-default">
                        <div class="panel-heading" ><li class="fa fa-pencil"></li>
                            INPUT PEMILIH
                        </div>
                        <div class="panel-body">
                            <div class="row">
                                <div class="col-lg-6">

                                    <!-- untuk input -->
                                    <form role="form" method="post" action="">
                                        <div class="form-group">
                                            <label>NAMA PEMILIH</label>
                                            <input name="nama" class="form-control" placeholder="nama pemilih">
                                            <p class="help-block">Nama pemilih harus jelas dan asli</p>
                                        </div>
                                        <div class="form-group">
                                            <label>POSISI</label>
                                            <input name="kelas" class="form-control" placeholder="status">
                                            <p class="help-block">jika murid sebutkan kelasnya, jika guru sebutkan guru mata pelajarannya</p>
                                        </div>

                                        <button type="submit" class="btn btn-success" name="inputpemilih">SIMPAN</button>
                                        </form>


                                      
                                </div>
                                <!-- /.col-lg-6 (nested) -->
                            </div>
                            <!-- /.row (nested) -->

                        <div class="panel-body">
                            <div class="row">
                                <div class="col-lg-6">

                                    <!-- untuk input -->
                                    <form role="form" method="post" enctype="multipart/form-data" action="upload.php">
                                        
                                        <div class="form-group">
                                            <label>FOTO CALON</label>
                                            <input type="file" name="gambar" class="form-control" >
                                            <p class="help-block">Foto Calon adalah Foto Kedua Pasangan dengan Latar warna biru. </p>
                                        </div>


                                       
                                        <button type="submit" class="btn btn-info" name="gambar">UPLOAD</button>
                                 
                                </div>
                                        

                                    </form>

                                </div>
                                <!-- /.col-lg-6 (nested) -->
                            </div>
                            <!-- /.row (nested) -->
                        </div>
                        <!-- /.panel-body -->
                    </div>
                    <!-- /.panel -->

                </div>
                <!-- /.col-lg-12 -->

            </div>
            <!-- /.row -->



        </div>
        <!-- /#page-wrapper -->

    </div>
    <!-- /#wrapper -->

    <!-- jQuery -->
    <script src="../vendor/jquery/jquery.min.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="../vendor/bootstrap/js/bootstrap.min.js"></script>

    <!-- Metis Menu Plugin JavaScript -->
    <script src="../vendor/metisMenu/metisMenu.min.js"></script>

    <!-- Custom Theme JavaScript -->
    <script src="../dist/js/sb-admin-2.js"></script>

</body>



<?php require "fungsi.php";
if(isset($_POST['inputpemilih'])) {
    if(inputpemilih($_POST)> 0 ) {
        echo "<script>
             alert('data berhasil ditambah');
             document.location.href='input.php';
             </script>"; 
         }
        else {
            echo "<script>
             alert('data gagal ditambah');
             document.location.href='input.php';
             </script>";
        }
    }


    if(isset($_POST['gambar'])) {

    if(gambar($_POST)> 0 ) {

        echo "<script>
             alert('data berhasil ditambah');
             document.location.href='input.php';
             </script>"; 
         }
        else {
            echo "<script>
             alert('data gagal ditambah');
             document.location.href='input.php';
             </script>";
        }
    }

?>


<?php require "crud.php";
    if(isset($_POST['tambahdata'])) {
    $nama = $_POST['nama'];
    $visi = $_POST['visi'];
    $misi = $_POST['misi'];
    $Lib = new Crud();
    $upd = $Lib->tambahdata($nama, $visi, $misi);
}
?>