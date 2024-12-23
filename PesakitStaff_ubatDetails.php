<?php
  include_once 'db.php';
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
<?php
try {
  $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
  $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $stmt = $conn->prepare("SELECT * FROM tbl_medicines WHERE patient_IC = :pic");
  $stmt->bindParam(':pic', $pic, PDO::PARAM_STR);
    $pic = $_GET['pic'];
  $stmt->execute();
  $readrow = $stmt->fetch(PDO::FETCH_ASSOC);
  }
catch(PDOException $e) {
    echo "Error: " . $e->getMessage();
}
$conn = null;
?>
 
<div class="container-fluid">
  <div class="row">
    <div class="col-xs-12 col-sm-10 col-sm-offset-1 col-md-8 col-md-offset-2">
      <div class="panel panel-default">
      <div class="panel-heading"><strong>Maklumat Pesakit</strong></div>
      <div class="panel-body">
          Berikut merupakan maklumat lanjut mengenai pesakit tersebut:
      </div>
      <table class="table">
        <tr>
          <td class="col-xs-4 col-sm-4 col-md-4"><strong>Nama Pesakit</strong></td>
          <td><?php echo $readrow['patient_name'] ?></td>
        </tr>
        <tr>
          <td><strong>IC Pesakit</strong></td>
          <td><?php echo $readrow['patient_IC'] ?></td>
        </tr>
        <tr>
          <td><strong>Diagnosis</strong></td>
          <td><?php echo $readrow['diagnosis'] ?></td>
        </tr>
        <tr>
          <td><strong>Ubat</strong></td>
          <td><?php echo $readrow['medicine'] ?></td>
        </tr>
        <tr>
          <td><strong>Tarikh Mengambil Ubat</strong></td>
          <td><?php echo $readrow['indent_date'] ?></td>
        </tr>
      </table>
      </div>
    </div>
  </div>
</div>


<div class="text-center">
<a href="PesakitStaff_ubat.php" class="btn btn-default" role="button">Back</a>
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