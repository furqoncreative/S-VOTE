<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>SB Admin 2 - Bootstrap Admin Theme</title>

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
<?php 
include_once "fungsi.php";
session_start();
if (isset($_SESSION["username"])) {
    header("Location: index.php");
}

// data user ini hanya untuk demo, pada kenyataannya nanti menggunakan database


if (isset($_POST["submit"])) {
    // simpan data $_POST ke dalam variabel
    $username = $_POST["username"];
    $password = $_POST["password"];

 // lakukan select data admin ke database. untuk memastikan data ada di database

  $res = $con -> query("SELECT * FROM admin where username='$username' and password='$password'");
  $row = $res->fetch(PDO::FETCH_ASSOC);
  $user =$row['username'];
  $pass =$row['password'];
  if($user==$username && $pass==$password)
 {
      // login berhasil

      // set session user, variabel yang dapat digunakan di semua halaman
      $_SESSION["username"] = $username;

      // redirect user ke halaman admin
      header("Location: index.php");
      exit;
  
    } else {
      // login gagal

      // apabila username & password kosong atau tidak sesuai
      $error = true;
       echo "<script>
             alert('Mohon Maaf, Anda siapa yah??');
             document.location.href='login.php';
             </script>"; 
    }
}
?>

 <div class="container">
        <div class="row">
            <div class="col-md-4 col-md-offset-4">
                <div class="login-panel panel panel-default">
                    <div class="panel-heading">
                    </div>
                    <div class="panel-body">
                  <h1>Form Login</h1>
 <form role="form" action="login.php" method="post" class="form-group" role="forml">
      <div class="form-group">
 <label for="username">Username</label>
 <input type="text" class="form-control" id="username" name="username">
      </div>
      <div class="form-group">
 <label for="password">Password</label>
 <input type="password" class="form-control" id="password" name="password">
      </div>
      <button type="submit" name="submit" class="btn btn-primary">Login</button>
        <a href="../"> <button type="button"  class="btn btn-warning">Cancel</button></a>
    </form>
                    </div>
                </div>
            </div>
        </div>


    <script src="../vendor/jquery/jquery.min.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="../vendor/bootstrap/js/bootstrap.min.js"></script>

    <!-- Metis Menu Plugin JavaScript -->
    <script src="../vendor/metisMenu/metisMenu.min.js"></script>

    <!-- Custom Theme JavaScript -->
    <script src="../dist/js/sb-admin-2.js"></script>
</body>