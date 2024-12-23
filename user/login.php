<?php
    session_start();
    require 'connect.php';
?>

<!DOCTYPE html>
<html>
<head>
<!--header start-->
<?php include_once "../nav_barPesakit.php"; ?>
    <!--header end-->

<title>Log Masuk Pesakit</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.3.0/css/font-awesome.min.css">
<link rel="stylesheet" href="./css/welcomePage.css">
  <!-- Favicons -->
  <link href="../img/PSY.png" rel="icon">
  <link href="img/PSY.png" rel="apple-touch-icon">

  <!-- Bootstrap core CSS -->
  <link href="../lib/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <!--external css-->
  <link href="../lib/font-awesome/css/font-awesome.css" rel="stylesheet" />
  <!-- Custom styles for this template -->
  <link href="../css/style.css" rel="stylesheet">
  <link href="../css/style-responsive.css" rel="stylesheet">
</head>

<style>
.w3-input
{
  outline-style: solid;
  outline-width: thin;
  outline-color: #d491d4;
}

html
{
    scroll-behavior: smooth;
}

body {
  background-image: url('../img/bgtest6.jpg');
  background-repeat: no-repeat;
  background-attachment: fixed;
  background-size: 100% 100%;
}

</style>

<body>
  <!-- **********************************************************************************************************************************************************
      MAIN CONTENT
      *********************************************************************************************************************************************************** -->
  <div id="login-page">
    <div class="container">
    <form class="form-login" method="post" action="loginprocess.php"> <!------- PROCESS OF LOGIN USING PATIENT IC AND PASSWORD  ------>
    <h2 class="form-login-heading">LOG MASUK PESAKIT</h2>
    <div class="login-wrap" style="background-color:#D1F2EB;">
        <input name="patient_IC" type="text" value="" class="form-control" placeholder="Nombor Kad Pengenalan" autofocus required>
        <br>
        
        <input name="patient_password" type="password" class="form-control" placeholder="Password" value="" required>
        <br>
        <button name="login" class="btn btn-theme btn-block" type="submit"><i class="fa fa-lock"></i>MASUK</button>
        <a href="../index.php"   class="btn btn-theme btn-block"  role="button">HOME</a> <!------- TO GO BACK TO THE HOME PAGE ------>
    </div>
</form>

    </div>
  </div>


  <!-- js placed at the end of the document so the pages load faster -->
    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="js/bootstrap.min.js"></script>
  <script src="lib/jquery/jquery.min.js"></script>
  <script src="lib/bootstrap/js/bootstrap.min.js"></script>
  <!--BACKSTRETCH-->
  <!-- You can use an image of whatever size. This script will stretch to fit in any screen size.-->

</body>
</html>