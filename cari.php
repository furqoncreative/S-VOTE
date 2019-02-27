<?php

    require_once("session.php");
    require_once("class.user.php");
    $auth_user = new USER();
    
    $NIS = $_SESSION['NIS'];
    
    $stmt = $auth_user->runQuery("SELECT Nama FROM rpl_1 WHERE NIS='$NIS'");
    $stmt->execute(array("$NIS"=>$NIS));
    
    $userRow=$stmt->fetch(PDO::FETCH_ASSOC);

?>
<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>CARI</title>
 <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/agency.css" rel="stylesheet">
    <link href="css/animate.css" rel="stylesheet" />
     <link href="css/style.css" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <link href='https://fonts.googleapis.com/css?family=Kaushan+Script' rel='stylesheet' type='text/css'>

<link rel="shortcut icon" href="img/icon.ico">

</head>

<body id="page-top" class="index" background="img/jurusan.jpg">
<div id="preloader">
      <div id="load"></div>
    </div>
    <nav class="navbar navbar-default navbar-fixed-top">
        <div class="container">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header page-scroll">
                <a class="navbar-brand page-scroll" href="index.php">ALMAMATER ONLINE</a>
            </div>

            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav navbar-right">
                    <li class="hidden">
                        <a href="#page-top"></a>

                    <li>
                     <li> <a class="btn-primary" href="galery.php">GALERY</a></li>
                     <li>   <a class="btn-primary" href="form_login.php">LOGIN</a></li>
                    <li><a class="btn-primary" href="about.php">ABOUT</a> </li>
                    <li class="dropdown">
                     <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">
                    <span class="glyphicon glyphicon-user"></span>&nbsp;Hi'<?php echo $userRow['Nama']; ?> &nbsp;<span class="caret"></span></a>
                    <ul class="dropdown-menu">
                    <li><a href="logout.php?logout=true"><span class="glyphicon glyphicon-log-out"></span>&nbsp;Logout</a></li>
              </ul>
            </li>
            
                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </div>
   
        <!-- /.container-fluid -->
    </nav>

    <!-- Header -->
    
    <font color="#ff0072" face="algerian">
    <!-- Team Section -->
    <section id="team" >
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                <div class="wow bounceInDown" data-wow-delay="0.1s">
                    <h2 class="section-heading">CARI</h2>
                    <h3 class="section-subheading text-muted">
                        <form role="form" action="masuk.php" method="post" enctype="plain"> 
      <div class="form-group">
 
  <input type="id" name="id" class="subscribe-input" placeholder="Masukan ID anda ..." required>
      </div>
          <button class='btn btn-conf btn-green' type="submit" name="submit">SUBMIT</button>
              </form>
                    </h3>
                </div>
                </div>
            </div>
            
           
        </div>
    </section>
    </font>

    <!-- jQuery -->
      <script src="js/jquery.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/jquery.easing.min.js"></script> 
    <script src="js/jquery.scrollTo.js"></script>
    <script src="js/wow.min.js"></script>
    <!-- Custom Theme JavaScript -->
    <script src="js/custom.js"></script>


</body>

</html>
