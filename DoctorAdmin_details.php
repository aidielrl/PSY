<?php
  include_once 'Doctor_crud.php';
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="description" content="">
  <meta name="author" content="Dashboard">
  <meta name="keyword" content="Dashboard, Bootstrap, Staff, Template, Theme, Responsive, Fluid, Retina">
  <title>PSY</title>

  <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Figtree&display=swap" rel="stylesheet">

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
    <?php include_once 'nav_barAdminD.php'; ?>
    <!--header end-->

    <!-- **********************************************************************************************************************************************************
        MAIN CONTENT
        *********************************************************************************************************************************************************** -->
    <!--main content start-->
    <div class="container-fluid">
    <section>
        <br>
        <br>
        <br>
        <br>
        <br>

 
<div class="container-fluid">
  <div class="row">
    <div class="col-xs-12 col-sm-10 col-sm-offset-1 col-md-8 col-md-offset-2">
    <div style="font-family: 'Figtree', sans-serif;font-size: 16px;">
      <div class="panel panel-default">
      <div class="panel-heading"><strong>Maklumat Doctor</strong></div>
      <div class="panel-body">
          Berikut merupakan maklumat lanjut mengenai Doctor tersebut:
      </div>
      <table class="table">

      <?php
$doctor_id = $_POST['doctor_id'];
//connect to the database
$conn = mysqli_connect("localhost","root","","psy");
//query to select patient details using the ID
$query = "SELECT doctor_id, dr_name, dr_IC, dr_gender, dr_address, dr_phone, 
                 dr_email, dr_gred, dr_password FROM tbl_doctor WHERE doctor_id = '$doctor_id'";
$result = mysqli_query($conn, $query);
$doctor = mysqli_fetch_assoc($result);

?>

        <tr>
          <td class="col-xs-4 col-sm-4 col-md-4"><strong>Doctor ID</strong></td>
          <td><?php echo  $doctor['doctor_id']  ?></td>
        </tr>
        <tr>
          <td><strong>Nama</strong></td>
          <td><?php echo  $doctor['dr_name']  ?></td>
        </tr>
        <tr>
          <td><strong>IC</strong></td>
          <td><?php echo  $doctor['dr_IC']  ?></td>
        </tr>
          <td><strong>Jantina</strong></td>
          <td><?php echo  $doctor['dr_gender']  ?></td>
        </tr>
        <tr>
          <td><strong>Alamat</strong></td>
          <td><?php echo  $doctor['dr_address']  ?></td>
        </tr>
        <tr>
          <td><strong>Nombor Telefon</strong></td>
          <td><?php echo $doctor['dr_phone']  ?></td>
        </tr>
        <tr>
          <td><strong>Email</strong></td>
          <td><?php echo  $doctor['dr_email']  ?></td>
        </tr>
        <tr>
          <td><strong>Gred</strong></td>
          <td><?php echo  $doctor['dr_gred']  ?></td>
        </tr>
          <td><strong>Kata Laluan</strong></td>
          <td><?php echo  $doctor['dr_password']  ?></td>
        </tr>
      </table>
      
      </div>
    </div>
  </div>
</div>

<div class="text-center">
      <a href="Doctor_Edit.php?edit=<?php echo $doctor['doctor_id']; ?>" class="btn btn-success" role="button"> Edit </a>
      <a href="DoctorRegister.php" class="btn btn-default" role="button">Back</a>
      <a href="DoctorAdmin_details.php?delete=<?php echo $doctor['doctor_id']; ?>" class="btn btn-danger" onclick="return confirm('Are you sure you want to delete this account?')">Delete Account</a>

</div>






    </section>
    </div>
    <!-- /MAIN CONTENT -->
    <!--main content end-->
  </section>
  <!-- js placed at the end of the document so the pages load faster -->
  <script src="lib/jquery/jquery.min.js"></script>
  <script src="lib/bootstrap/js/bootstrap.min.js"></script>
  <script src="lib/jquery-ui-1.9.2.custom.min.js"></script>
  <script src="lib/jquery.ui.touch-punch.min.js"></script>
  <script class="include" type="text/javascript" src="lib/jquery.dcjqaccordion.2.7.js"></script>
  <script src="lib/jquery.scrollTo.min.js"></script>
  <script src="lib/jquery.nicescroll.js" type="text/javascript"></script>
  <!--common script for all pages-->
  <script src="lib/common-scripts.js"></script>
  <!--script for this page-->

</body>

</html>