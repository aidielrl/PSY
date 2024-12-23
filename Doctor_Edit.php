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
        
            <div class="row">
    <div class="col-xs-12 col-sm-8 col-sm-offset-2 col-md-6 col-md-offset-3">
    <div style="font-family: 'Figtree', sans-serif;font-size: 16px;">
      <div class="page-header">
        <center><h2>Kemaskini Maklumat Doctor</h2></center>
      </div>
    <form action="Doctor_Edit.php" method="post" class="form-horizontal">
      <div class="form-group">
          <label for="doctorid" class="col-sm-3 control-label">ID</label>
          <div class="col-sm-9">
         <input name="doctor_id" type="text" class="form-control" id="doctorid" placeholder="Doctor ID" value="<?php if(isset($_GET['edit'])) echo $editrow['doctor_id']; ?>" readonly>
        </div>
        </div>
      <div class="form-group">
          <label for="doctorname" class="col-sm-3 control-label">Nama Penuh</label>
          <div class="col-sm-9">
          <input name="dr_name" type="text" class="form-control" id="drname" placeholder="Nama" value="<?php if(isset($_GET['edit'])) echo $editrow['dr_name']; ?>" readonly>
        </div>
        </div>
        <div class="form-group">
          <label for="doctoric" class="col-sm-3 control-label">IC</label>
          <div class="col-sm-9">
          <input name="dr_IC" type="text" class="form-control" id="dric" placeholder="IC" value="<?php if(isset($_GET['edit'])) echo $editrow['dr_IC']; ?>" readonly>
        </div>
        </div>
        <div class="form-group">
          <label for="doctorage" class="col-sm-3 control-label">Umur</label>
          <div class="col-sm-9">
          <input name="dr_age" type="text" class="form-control" id="drage" placeholder="Umur" value="<?php if(isset($_GET['edit'])) echo $editrow['dr_age']; ?>" required>
        </div>
        </div>
        <div class="form-group">
          <label for="gender" class="col-sm-3 control-label">Jantina</label>
          <div class="col-sm-9">
          <div class="radio">
            <label>
              <input name="dr_gender" type="radio" id="gender" value="Lelaki" <?php if(isset($_GET['edit'])) if($editrow['dr_gender']=="Lelaki") echo "checked"; ?>required> Lelaki
            </label>
            </div>

          <div class="radio">
            <label>
              <input name="dr_gender" type="radio" id="gender" value="Perempuan" <?php if(isset($_GET['edit'])) if($editrow['dr_gender']=="Perempuan") echo "checked"; ?>required> Perempuan
            </label>
            </div>   
          </div>
      </div>
      <div class="form-group">
          <label for="draddress" class="col-sm-3 control-label">Alamat</label>
          <div class="col-sm-9">
          <input name="dr_address" type="text" class="form-control" id="draddress" placeholder="Alamat" value="<?php if(isset($_GET['edit'])) echo $editrow['dr_address']; ?>" required>
        </div>
        </div>
        <div class="form-group">
          <label for="drphone" class="col-sm-3 control-label">Nombor Telefon</label>
          <div class="col-sm-9">
          <input name="dr_phone" type="text" class="form-control" id="drphone" placeholder="Nombor Telefon" value="<?php if(isset($_GET['edit'])) echo $editrow['dr_phone']; ?>" required>
        </div>
        </div>
        <div class="form-group">
          <label for="dr_gred" class="col-sm-3 control-label">Gred</label>
          <div class="col-sm-9">
          <input name="dr_gred" type="text" class="form-control" id="dr_gred" placeholder="Gred" value="<?php if(isset($_GET['edit'])) echo $editrow['dr_gred']; ?>" required>
        </div>
        </div>
        <div class="form-group">
          <label for="dremail" class="col-sm-3 control-label">Email</label>
          <div class="col-sm-9">
          <input name="dr_email" type="text" class="form-control" id="dremail" placeholder="Email" value="<?php if(isset($_GET['edit'])) echo $editrow['dr_email']; ?>" required>
        </div>
        </div>
        <div class="form-group">
          <label for="drpassword" class="col-sm-3 control-label">Password</label>
          <div class="col-sm-9">
          <input name="dr_password" type="text" class="form-control" id="drpassword" placeholder="Password" value="<?php if(isset($_GET['edit'])) echo $editrow['dr_password']; ?>" required>
        </div>
        </div>

        <div class="form-group">
          <label for="repassword" class="col-sm-3 control-label">Retype Password</label>
          <div class="col-sm-9">
          <input name="dr_repassword" type="text" class="form-control" id="repassword" placeholder="Retype Password" value="<?php if(isset($_GET['edit'])) echo $editrow['dr_repassword']; ?>" required>
        </div>
        </div>

        <div class="form-group">
          <div class="col-sm-offset-3 col-sm-9">
          <?php if (isset($_GET['edit'])) { ?>
          <input type="hidden" name="oldpid" value="<?php echo $editrow['doctor_id']; ?>">
         <button class="btn btn-default" type="submit" name="update"><span class="glyphicon glyphicon-pencil" aria-hidden="true"></span> Update</button>
          <?php } ?>
          <a href="Doctor_Register.php" class="btn btn-default" role="button">Back</a>
        </div>
      </div>

    </form>
    </div>
  </div>



 
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