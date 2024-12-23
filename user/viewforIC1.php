<?php
session_start();
// rest of your PHP code here
?>


<?php
  include_once '../PesakitStaff_crud.php';
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
  <link href="../img/PSY.png" rel="icon">
  <link href="../img/PSY.png" rel="apple-touch-icon">

  <!-- Bootstrap core CSS -->
  <link href="../lib/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <!--external css-->
  <link href="../lib/font-awesome/css/font-awesome.css" rel="stylesheet" />
  <!-- Custom styles for this template -->
  <link href="../css/style.css" rel="stylesheet">
  <link href="../css/style-responsive.css" rel="stylesheet">

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
    <?php include_once '../nav_barPesakit.php'; ?>
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
  <div style="font-family: 'Figtree', sans-serif;font-size: 16px;">
    <div class="col-xs-12 col-sm-10 col-sm-offset-1 col-md-8 col-md-offset-2">
      <div class="panel panel-default">
      <div class="panel-heading"><strong>Maklumat Pesakit</strong></div>
      <div class="panel-body">
          Berikut merupakan maklumat lanjut mengenai pesakit tersebut:
      </div>
      <table class="table">

      <?php
      //SUCCESSFUL LOGIN WILL PASS THE DATA OF THE PATIENT BY USING THEIR $SESSION 'patient_IC'
$patient_IC = $_SESSION['patient_IC'];
//connect to the database
$conn = mysqli_connect("localhost","root","","psy");
//query to select patient details using the ID
//event_dt = appointment date and time
$query = "SELECT patient_id, patient_name, patient_IC, patient_age, patient_gender, patient_address, patient_phone, 
                 patient_email, patient_password, event_dt, dr_name, patient_reports, patient_guardianP FROM tbl_patients WHERE patient_IC = '$patient_IC'";
$result = mysqli_query($conn, $query);
$patient = mysqli_fetch_assoc($result);

?>

        <tr>
          <td class="col-xs-4 col-sm-4 col-md-4"><strong>Pesakit ID</strong></td>
          <td><?php echo  $patient['patient_id']  ?></td>
        </tr>
        <tr>
          <td><strong>Nama</strong></td>
          <td><?php echo  $patient['patient_name']  ?></td>
        </tr>
        <tr>
          <td><strong>IC</strong></td>
          <td><?php echo  $patient['patient_IC']  ?></td>
        </tr>
        <tr>
          <td><strong>Umur</strong></td>
          <td><?php echo  $patient['patient_age']  ?></td>
        </tr>
        <tr>
          <td><strong>Jantina</strong></td>
          <td><?php echo  $patient['patient_gender']  ?></td>
        </tr>
        <tr>
          <td><strong>Alamat</strong></td>
          <td><?php echo  $patient['patient_address']  ?></td>
        </tr>
        <tr>
          <td><strong>Nombor Telefon</strong></td>
          <td><?php echo $patient['patient_phone']  ?></td>
        </tr>
        <tr>
          <td><strong>Nombor Telefon Penjaga</strong></td>
          <td><?php echo $patient['patient_guardianP']  ?></td>
        </tr>
        <tr>
          <td><strong>Email</strong></td>
          <td><?php echo  $patient['patient_email']  ?></td>
        </tr>
        <tr>
          <td><strong>Kata Laluan</strong></td>
          <td><?php echo  $patient['patient_password']  ?></td>
        </tr>
        <tr>
          <td><strong>Nama Doctor</strong></td>
          <td><?php echo  $patient['dr_name']  ?></td>
        </tr>
        <tr>
          <td><strong>Tarikh dan Masa Temujanji</strong></td>
          <td><?php echo  $patient['event_dt']  ?></td>
        </tr>
        <tr>
          <td><strong>Reports</strong></td>
          <td><?php echo  $patient['patient_reports']  ?></td>
        </tr>
      </table>
     
      </div>
      <div class="text-center">
      <a href="User_Edit.php?edit=<?php echo $patient['patient_IC']; ?>" class="btn btn-success" role="button"> Edit </a>
</div>
    </div>
  </div>
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