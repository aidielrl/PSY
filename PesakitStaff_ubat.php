<?php
  include_once 'PesakitStaff_crudubat.php';
?>

<?php 

    //Connection for database
    session_start(); 
    require 'user/connect.php';

     if(isset($_SESSION['patient_ic']))
    {
        header("Location:PesakitStaff_Search.php");
        exit();
    }

    

    //SELECTING DATABASE
    $sql = "SELECT * FROM tbl_patients
            WHERE patient_IC=".$_SESSION['patient_IC']."
            ORDER BY patient_IC DESC LIMIT 1";
    $result = mysqli_query($conn,$sql);

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
        
            <div class="row">
    <div class="col-xs-12 col-sm-8 col-sm-offset-2 col-md-6 col-md-offset-3">
      <div class="page-header">
        <center><h2>Masukkan Maklumat Ubat Pesakit</h2></center>
      </div>
    <form action="PesakitStaff_ubat.php" method="post" class="form-horizontal">
      <div class="form-group">
          <label for="patientid" class="col-sm-3 control-label">ID</label>
          <div class="col-sm-9">
         <input name="pid" type="text" class="form-control" id="patientid" placeholder="Pesakit ID" value="<?php if(isset($_GET['edit'])) echo $editrow['patient_id']; ?>" readonly>
        </div>
        </div>
      <div class="form-group">
          <label for="patientname" class="col-sm-3 control-label">Nama Penuh</label>
          <div class="col-sm-9">
          <input name="pname" type="text" class="form-control" id="patientname" placeholder="Nama" value="<?php if(isset($_GET['edit'])) echo $editrow['patient_name']; ?>" readonly>
        </div>
        </div>
        <div class="form-group">
          <label for="patientic" class="col-sm-3 control-label">IC</label>
          <div class="col-sm-9">
          <input name="pic" type="text" class="form-control" id="patientic" placeholder="IC" value="<?php if(isset($_GET['edit'])) echo $editrow['patient_IC']; ?>" readonly>
        </div>
        </div>
      <div class="form-group">
          <label for="patientdiagnosis" class="col-sm-3 control-label">Diagnosis</label>
          <div class="col-sm-9">
          <input name="diagnosis" type="text" class="form-control" id="patientdiagnosis" placeholder="Diagnosis" value="<?php if(isset($_GET['edit'])) echo $editrow['diagnosis']; ?>" required>
        </div>
        </div>
        <div class="form-group">
          <label for="patientmedicine" class="col-sm-3 control-label">Nama Ubat</label>
          <div class="col-sm-9">
          <input name="medicine" type="text" class="form-control" id="patientmedicine" placeholder="Ubat" value="<?php if(isset($_GET['edit'])) echo $editrow['medicine']; ?>" required>
        </div>
        </div>
        <div class="form-group">
          <label for="indentdate" class="col-sm-3 control-label">Tarikh Ambil Ubat</label>
          <div class="col-sm-9">
          <input name="indent_date" type="text" class="form-control" id="indentdate" placeholder="Tarikh" value="<?php if(isset($_GET['edit'])) echo $editrow['indent_date']; ?>" required>
        </div>
        </div>
        <div class="form-group">
          <label for="dic" class="col-sm-3 control-label">Pegawai Pemeriksa</label>
          <div class="col-sm-9">
          <input name="dic" type="text" class="form-control" id="dic" placeholder="Nama Pegawai" value="<?php if(isset($_GET['edit'])) echo $editrow['dic']; ?>" required>
        </div>
        </div>

       
        <div class="form-group">
          <div class="col-sm-offset-3 col-sm-9">
          <?php if (isset($_GET['edit'])) { ?>
          <input type="hidden" name="pic" value="<?php echo $editrow['patient_IC']; ?>">
         <button class="btn btn-default" type="submit" name="update"><span class="glyphicon glyphicon-pencil" aria-hidden="true"></span> Update</button>
          <?php } else { ?>
          <button class="btn btn-default" type="submit" name="create"><span class="glyphicon glyphicon-plus" aria-hidden="true"></span> Create</button>
          <?php } ?>
          <button class="btn btn-default" type="reset"><span class="glyphicon glyphicon-erase" aria-hidden="true"></span> Clear</button>
          <a href="PesakitStaff_SearchDetails.php" class="btn btn-default" role="button">Back</a>
        </div>
      </div>
    </form>
    </div>
  </div>

     <div class="row">
    <div class="col-xs-12 col-sm-10 col-sm-offset-1 col-md-8 col-md-offset-2">
      <div class="page-header">
        <center><h2>Update Maklumat Pesakit</h2></center>
      </div>
      <br>
        <div class="w3-responsive">
        <table class="tableic" width='100%' border="1px solid black" align="center" cellpadding="2" cellspacing="0.5" >

                <tbody>
                    <tr>
                    
      <table width="92%" >
    
      <table class="table table-striped table-bordered">
        <tr>
          <th>Pesakit ID</th>
          <th>Nama</th>
          <th>Email</th>
          <th>Nombor Telefon</th>
          <th></th>
      </tr>
      <?php
      // Read
       $per_page = 1;
      if (isset($_GET["page"]))
        $page = $_GET["page"];
      else 
        $page = 1;
      $start_from = ($page-1) * $per_page;
      try {
        $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
        $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        $stmt = $conn->prepare("SELECT * FROM tbl_patients 
                                WHERE patient_IC=".$_SESSION['patient_IC']."
                                ORDER BY patient_IC DESC LIMIT 1");
        $stmt->execute();
        $result = $stmt->fetchAll(); 
      }
      catch(PDOException $e){
            echo "Error: " . $e->getMessage();
      }

      foreach($result as $readrow) {
      ?>    
      <tr>
        <td><?php echo $readrow['patient_id']; ?></td>
        <td><?php echo $readrow['patient_name']; ?></td>
        <td><?php echo $readrow['patient_email']; ?></td>
        <td><?php echo $readrow['patient_phone']; ?></td>
        <td>
          <a href="PesakitStaff_ubatDetails.php?pic=<?php echo $readrow['patient_IC']; ?>" class="btn btn-warning btn-xs" role="button">Details</a>
          <a href="PesakitStaff_ubat.php?edit=<?php echo $readrow['patient_IC']; ?>" class="btn btn-success btn-xs" name= "edit" role="button"> Edit </a>
         
        </td>
      </tr>
      <?php } ?>
    
                          
                    </tr>
        </table>
        </div>
         </br>
 
    </table>
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