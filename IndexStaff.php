<?php
include_once 'db.php';
error_reporting(0);
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="description" content="">
  <meta name="author" content="Dashboard">
  <meta name="keyword" content="Dashboard, Bootstrap, Admin, Template, Theme, Responsive, Fluid, Retina">
  <title>PSY</title>

  <!--header start-->
    <?php include_once 'nav_barLogin.php'; ?>
    <!--header end-->
  
  <!-- Favicons -->
  <link href="icon.png" rel="icon">
  <link href="img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Bootstrap core CSS -->
  <link href="lib/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <!--external css-->
  <link href="lib/font-awesome/css/font-awesome.css" rel="stylesheet" />
  <!-- Custom styles for this template -->
  <link href="css/style.css" rel="stylesheet">
  <link href="css/style-responsive.css" rel="stylesheet">
  
  <!-- =======================================================
    Template Name: Dashio
    Template URL: https://templatemag.com/dashio-bootstrap-admin-template/
    Author: TemplateMag.com
    License: https://templatemag.com/license/
  ======================================================= -->
</head>

<style>
  /* The container <div> - needed to position the dropdown content */
/* Style the select element */
select {
  padding: 10px;
  font-size: 14px;
  border-radius: 5px;
  border: none;
  margin-bottom: 20px;
  box-shadow: 0 0 5px #ccc;
  width: 250px;
}

/* Style the options */
option {
  padding: 10px;
  border-radius: 5px;
  background-color: #f1f1f1;
}

/* Style the label */
label {
  font-size: 14px;
  margin-right: 10px;
}

/* Style the options when hovered over */
option:hover {
  background-color: #ddd;
  cursor: pointer;
}

/* Style the options when selected */
option:active {
  background-color: #bbb;
}


  </style>



<body>
  <!-- **********************************************************************************************************************************************************
      MAIN CONTENT
      *********************************************************************************************************************************************************** -->
  <div id="login-page">
    <div class="container">
    <form class="form-login" method="post" action="loginStaff.php">
    <h2 class="form-login-heading">LOG MASUK (STAFF ONLY)</h2>
    <div class="login-wrap" style="background-color:#D1F2EB;">
        <input name="sid" type="text" value="" class="form-control" placeholder="User ID" autofocus required>
        <br>
        <select id="user-type" name="pos" required>
            <option value="">Pilih Jawatan</option>
            <option value="Admin">Admin</option>
            <option value="Staff">Staff</option>
        </select>
        <input type="hidden" id="position" name="position" value="">
        
        <input name="pass" type="password" class="form-control" placeholder="Password" value="" required>
        <br>
        <button name="login" class="btn btn-theme btn-block" type="submit"><i class="fa fa-lock"></i>MASUK</button>
        <a href="index.php"   class="btn btn-theme btn-block"  role="button">HOME</a>
    </div>
</form>

    </div>
  </div>

  <script>
    var select = document.getElementById("user-type");
    var hiddenInput = document.getElementById("position");
    select.addEventListener("change", function(){
        hiddenInput.value = this.value;
    });
</script>


  <!-- js placed at the end of the document so the pages load faster -->
    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="js/bootstrap.min.js"></script>
  <script src="lib/jquery/jquery.min.js"></script>
  <script src="lib/bootstrap/js/bootstrap.min.js"></script>
  <!--BACKSTRETCH-->
  <!-- You can use an image of whatever size. This script will stretch to fit in any screen size.-->
  <script type="text/javascript" src="lib/jquery.backstretch.min.js"></script>
  <script>
    $.backstretch("img/bgtest6.jpg", {
      speed: 500
    });
  </script>
</body>

</html>
