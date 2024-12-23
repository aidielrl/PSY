<?php
    session_start();
    require 'user/connect.php';
?>

<!DOCTYPE html>
<html>
<head>
<title>Search IC Pesakit</title>
<meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="description" content="">
  <meta name="author" content="Dashboard">
  <meta name="keyword" content="Dashboard, Bootstrap, Staff, Template, Theme, Responsive, Fluid, Retina">
  <title>PSY</title>

  <!-- Favicons -->
  <link href="img/PSY.png" rel="icon">
  <link href="img/PSY.png" rel="apple-touch-icon">

  <!-- Bootstrap core CSS -->
  <link href="lib/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <!--external css-->
  <link href="lib/font-awesome/css/font-awesome.css" rel="stylesheet" />
  <!-- Custom styles for this template -->
  <link href="css/style.css" rel="stylesheet">
  <link href="css/style-responsive.css" rel="stylesheet">

  <!-- =======================================================
    Template Name: Dashio
    Template URL: https://templatemag.com/dashio-bootstrap-Staff-template/
    Author: TemplateMag.com
    License: https://templatemag.com/license/
  ======================================================= -->
<style>
.button {
  background-color: #7FB3D5; /* Green */
  border: none;
  color: white;
  padding: 15px 32px;
  text-align: center;
  text-decoration: none;
  display: inline-block;
  font-size: 16px;
  margin: 4px 2px;
  cursor: pointer;
}

.button3 {width: 90%;}
</style>
</head>

<body style="background-color:#D1F2EB;">
  <section id="container">
    <!-- **********************************************************************************************************************************************************
        TOP BAR CONTENT & NOTIFICATIONS
        *********************************************************************************************************************************************************** -->
    <!--header start-->
    <?php include_once 'nav_barStaff.php'; ?>
    <!--header end-->

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
  background-image: url('img/BG.jpg');
  background-repeat: no-repeat;
  background-attachment: fixed;
  background-size: 100% 100%;
}

</style>

<body>  

</br>
</br>
</br>
</br>
</br>
</br>
</br>
</br>
</br>
</br>
<table width="100%" border="1" align="center" cellpadding="0" cellspacing="0" bordercolor="#A33FA3" style="background-color:#e6fffa;">
              <tr>
                <td width="100%" align="center"><div align="center">
                <table width="100%" border="0">
                    <tr>
                        <td style="color:#00ffcc;"><div align="center"></td>
                    </tr>
                </table>
  <table width="100%" border="0" >
    <tr>
      <td><div align= "center" ><h3 style="color:black;"><b>SILA MASUKKAN IC PESAKIT</b></h3></div></td>
    </tr>
  </table>
  </br>
  </br>
    <table width="70%" style="background-color:#e6fffa;">
    <form method="post" action="searchProcess.php">
      <tr align="left">
        <td align="center" style="color:black;"><b>IC PESAKIT</b>:
          <input name="pic" type="text" value="" class="w3-input w3-border w3-round" style="width: 455px;" required/>
          <input class="btn btn-default" button style="margin:5px;" style="color:black;" type="submit" value="SEARCH"/>
        </td>
      </tr>
        <td colspan="3" align="center" >
            </br>
            
            <a href="PesakitStaff.php" button style="margin:5px;" class="btn btn-default" style="color:black;" role="button">DAFTAR PESAKIT BAHARU</a>
            <a href="IndexStaff.php" button style="margin:5px;" class="btn btn-default" style="color:black;" role="button">Back</a>
        </td>
  
      </tr>
    </form> 
    </table>
    </br>
</div>
</td>
  </tr>
</table>
</table>
</br>
</br>

</body>
</html>