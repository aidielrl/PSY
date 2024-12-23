<?php
  include_once 'PesakitStaff_crud.php';
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
        <center><h2>Masukkan Maklumat Pesakit Baharu</h2></center>
      </div>
    <form action="PesakitStaff_Appointment.php" method="post" class="form-horizontal">
      <div class="form-group">
          <label for="patientid" class="col-sm-3 control-label">ID</label>
          <div class="col-sm-9">
         <input name="patient_id" type="text" class="form-control" id="patientid" placeholder="Pesakit ID" value="<?php if(isset($_GET['edit'])) echo $editrow['patient_id']; ?>" readonly>
        </div>
        </div>
      <div class="form-group">
          <label for="patientname" class="col-sm-3 control-label">Nama Penuh</label>
          <div class="col-sm-9">
          <input name="patient_name" type="text" class="form-control" id="patientname" placeholder="Nama" value="<?php if(isset($_GET['edit'])) echo $editrow['patient_name']; ?>" readonly>
        </div>
        </div>
        <div class="form-group">
          <label for="patientic" class="col-sm-3 control-label">IC</label>
          <div class="col-sm-9">
          <input name="patient_IC" type="text" class="form-control" id="patientic" placeholder="IC" value="<?php if(isset($_GET['edit'])) echo $editrow['patient_IC']; ?>" readonly>
        </div>
        </div>
        <div class="form-group">
          <label for="patientage" class="col-sm-3 control-label">Umur</label>
          <div class="col-sm-9">
          <input name="patient_age" type="text" class="form-control" id="patientage" placeholder="Umur" value="<?php if(isset($_GET['edit'])) echo $editrow['patient_age']; ?>" required>
        </div>
        </div>
        <div class="form-group">
          <label for="gender" class="col-sm-3 control-label">Jantina</label>
          <div class="col-sm-9">
          <div class="radio">
            <label>
              <input name="patient_gender" type="radio" id="gender" value="Lelaki" <?php if(isset($_GET['edit'])) if($editrow['patient_gender']=="Lelaki") echo "checked"; ?>required> Lelaki
            </label>
            </div>

          <div class="radio">
            <label>
              <input name="patient_gender" type="radio" id="gender" value="Perempuan" <?php if(isset($_GET['edit'])) if($editrow['patient_gender']=="Perempuan") echo "checked"; ?>required> Perempuan
            </label>
            </div>   
          </div>
      </div>
      <div class="form-group">
          <label for="patientaddress" class="col-sm-3 control-label">Alamat</label>
          <div class="col-sm-9">
          <input name="patient_address" type="text" class="form-control" id="patientaddress" placeholder="Alamat" value="<?php if(isset($_GET['edit'])) echo $editrow['patient_address']; ?>" required>
        </div>
        </div>
        <div class="form-group">
          <label for="patientphone" class="col-sm-3 control-label">Nombor Telefon</label>
          <div class="col-sm-9">
          <input name="patient_phone" type="text" class="form-control" id="patientphone" placeholder="Nombor Telefon" value="<?php if(isset($_GET['edit'])) echo $editrow['patient_phone']; ?>" required>
        </div>
        </div>
        <div class="form-group">
          <label for="patientemail" class="col-sm-3 control-label">Email</label>
          <div class="col-sm-9">
          <input name="patient_email" type="text" class="form-control" id="patientemail" placeholder="Email" value="<?php if(isset($_GET['edit'])) echo $editrow['patient_email']; ?>" required>
        </div>
        </div>
        <div class="form-group">
          <label for="patientpassword" class="col-sm-3 control-label">Password</label>
          <div class="col-sm-9">
          <input name="patient_password" type="text" class="form-control" id="patientpassword" placeholder="Password" value="<?php if(isset($_GET['edit'])) echo $editrow['patient_password']; ?>" required>
        </div>
        </div>

        <div class="form-group">
          <label for="repassword" class="col-sm-3 control-label">Retype Password</label>
          <div class="col-sm-9">
          <input name="patient_repassword" type="text" class="form-control" id="repassword" placeholder="Retype Password" value="<?php if(isset($_GET['edit'])) echo $editrow['patient_repassword']; ?>" required>
        </div>
        </div>

        <div class="form-group">
          <label for="event_dt" class="col-sm-3 control-label">Tarikh dan Masa Temujanji</label>
          <div class="col-sm-9">
          <input name="event_dt" type="datetime-local" class="form-control" id="event_dt" placeholder="Temujanji" value="<?php if(isset($_GET['edit'])) echo $editrow['event_dt']; ?>" required>
        </div>
        </div>

        <div class="form-group">
        <label for="dr_name" class="col-sm-3 control-label">Choose a Doctor:</label>
        <div class="col-sm-9">
        <select name="dr_name" class="form-control" id="dr_name">
        <?php
        // Connect to the database
        require 'user/connect.php';

        // Retrieve the list of doctors from the database
        $sql = "SELECT dr_name FROM tbl_doctor";
        $result = mysqli_query($conn, $sql);

        // Loop through the list of doctors and display them as options in the dropdown menu
          while ($row = mysqli_fetch_assoc($result)) {
            echo "<option value='" . $row['dr_name'] . "'>" . $row['dr_name'] . "</option>";
          }
        ?>
        </select><br>
        </div>
        </div>

        <div class="form-group">
        <label for="feedback" class="col-sm-3 control-label">Feedback:</label>
        <div class="col-sm-9">
        <select name="feedback" class="form-control" id="feedback">
	      <option value="Hadir">Hadir</option>
	      <option value="Tidak Hadir">Tidak Hadir</option>
        </select>
        </div>
        </div>


        <div class="form-group">
          <div class="col-sm-offset-3 col-sm-9">
          <?php if (isset($_GET['edit'])) { ?>
          <input type="hidden" name="oldpid" value="<?php echo $editrow['staff_id']; ?>">
         <button class="btn btn-default" type="submit" name="update"><span class="glyphicon glyphicon-pencil" aria-hidden="true"></span> Update</button>
          <?php } ?>
          <a href="Staff_SearchDetails.php" class="btn btn-default" role="button">Back</a>
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