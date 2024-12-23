<?php
  include_once 'Staff_crud.php';
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
    <?php include_once 'nav_barAdmin.php'; ?>
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
        <center><h2>Kemaskini Maklumat Staff</h2></center>
      </div>
    <form action="StaffEdit.php" method="post" class="form-horizontal">
      <div class="form-group">
          <label for="staffid" class="col-sm-3 control-label">ID</label>
          <div class="col-sm-9">
         <input name="staff_id" type="text" class="form-control" id="staffid" placeholder="Staff ID" value="<?php if(isset($_GET['edit'])) echo $editrow['staff_id']; ?>" readonly>
        </div>
        </div>
      <div class="form-group">
          <label for="staffname" class="col-sm-3 control-label">Nama Penuh</label>
          <div class="col-sm-9">
          <input name="staff_name" type="text" class="form-control" id="staffname" placeholder="Nama" value="<?php if(isset($_GET['edit'])) echo $editrow['staff_name']; ?>" readonly>
        </div>
        </div>
        <div class="form-group">
          <label for="staffic" class="col-sm-3 control-label">IC</label>
          <div class="col-sm-9">
          <input name="staff_IC" type="text" class="form-control" id="staffic" placeholder="IC" value="<?php if(isset($_GET['edit'])) echo $editrow['staff_IC']; ?>" readonly>
        </div>
        </div>
        <div class="form-group">
          <label for="staffage" class="col-sm-3 control-label">Umur</label>
          <div class="col-sm-9">
          <input name="staff_age" type="text" class="form-control" id="staffage" placeholder="Umur" value="<?php if(isset($_GET['edit'])) echo $editrow['staff_age']; ?>" required>
        </div>
        </div>
        <div class="form-group">
          <label for="gender" class="col-sm-3 control-label">Jantina</label>
          <div class="col-sm-9">
          <div class="radio">
            <label>
              <input name="staff_gender" type="radio" id="gender" value="Lelaki" <?php if(isset($_GET['edit'])) if($editrow['staff_gender']=="Lelaki") echo "checked"; ?>required> Lelaki
            </label>
            </div>

          <div class="radio">
            <label>
              <input name="staff_gender" type="radio" id="gender" value="Perempuan" <?php if(isset($_GET['edit'])) if($editrow['staff_gender']=="Perempuan") echo "checked"; ?>required> Perempuan
            </label>
            </div>   
          </div>
      </div>
      <div class="form-group">
          <label for="staffaddress" class="col-sm-3 control-label">Alamat</label>
          <div class="col-sm-9">
          <input name="staff_address" type="text" class="form-control" id="staffaddress" placeholder="Alamat" value="<?php if(isset($_GET['edit'])) echo $editrow['staff_address']; ?>" required>
        </div>
        </div>
        <div class="form-group">
          <label for="staffphone" class="col-sm-3 control-label">Nombor Telefon</label>
          <div class="col-sm-9">
          <input name="staff_phone" type="text" class="form-control" id="staffphone" placeholder="Nombor Telefon" value="<?php if(isset($_GET['edit'])) echo $editrow['staff_phone']; ?>" required>
        </div>
        </div>
        <div class="form-group">
          <label for="staff_gred" class="col-sm-3 control-label">Gred</label>
          <div class="col-sm-9">
          <input name="staff_gred" type="text" class="form-control" id="staff_gred" placeholder="Gred" value="<?php if(isset($_GET['edit'])) echo $editrow['staff_gred']; ?>" required>
        </div>
        </div>
        <div class="form-group">
          <label for="staffemail" class="col-sm-3 control-label">Email</label>
          <div class="col-sm-9">
          <input name="staff_email" type="text" class="form-control" id="staffemail" placeholder="Email" value="<?php if(isset($_GET['edit'])) echo $editrow['staff_email']; ?>" required>
        </div>
        </div>
        <div class="form-group">
          <label for="staffpassword" class="col-sm-3 control-label">Password</label>
          <div class="col-sm-9">
          <input name="staff_password" type="text" class="form-control" id="staffpassword" placeholder="Password" value="<?php if(isset($_GET['edit'])) echo $editrow['staff_password']; ?>" required>
        </div>
        </div>

        <div class="form-group">
          <label for="repassword" class="col-sm-3 control-label">Retype Password</label>
          <div class="col-sm-9">
          <input name="staff_repassword" type="text" class="form-control" id="repassword" placeholder="Retype Password" value="<?php if(isset($_GET['edit'])) echo $editrow['staff_repassword']; ?>" required>
        </div>
        </div>


        <div class="form-group">
          <div class="col-sm-offset-3 col-sm-9">
          <?php if (isset($_GET['edit'])) { ?>
          <input type="hidden" name="oldpid" value="<?php echo $editrow['staff_id']; ?>">
         <button class="btn btn-default" type="submit" name="update"><span class="glyphicon glyphicon-pencil" aria-hidden="true"></span> Update</button>
          <?php } ?>
          <a href="StaffRegister.php" class="btn btn-default" role="button">Back</a>
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