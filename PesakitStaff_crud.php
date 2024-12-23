<?php
 
include_once 'db.php';
 
$conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
 
//Create
if (isset($_POST['create'])) {
 
  try {
 
    $stmt = $conn->prepare("INSERT INTO tbl_patients (patient_id, patient_name, patient_IC, patient_age, patient_gender, patient_address, patient_phone, patient_email, patient_password, patient_repassword, event_dt, dr_name, feedback, patient_reports) VALUES(:patient_id, :patient_name, :patient_IC, :patient_age, :patient_gender, :patient_address, :patient_phone, :patient_email, :patient_password, :patient_repassword, :event_dt, :dr_name, :feedback, :patient_reports)");
   
    $stmt->bindParam(':patient_id', $patient_id, PDO::PARAM_STR);
    $stmt->bindParam(':patient_name', $patient_name, PDO::PARAM_STR);
    $stmt->bindParam(':patient_IC', $patient_IC, PDO::PARAM_STR);
    $stmt->bindParam(':patient_age', $patient_age, PDO::PARAM_STR);
    $stmt->bindParam(':patient_gender', $patient_gender, PDO::PARAM_STR);
    $stmt->bindParam(':patient_address', $patient_address, PDO::PARAM_STR);
    $stmt->bindParam(':patient_phone', $patient_phone, PDO::PARAM_STR);
    $stmt->bindParam(':patient_email', $patient_email, PDO::PARAM_STR);
    $stmt->bindParam(':patient_password', $patient_password, PDO::PARAM_STR);
     $stmt->bindParam(':patient_repassword', $patient_repassword, PDO::PARAM_STR);
     $stmt->bindParam(':event_dt', $event_dt, PDO::PARAM_STR);
     $stmt->bindParam(':dr_name', $dr_name, PDO::PARAM_STR);
     $stmt->bindParam(':feedback', $feedback, PDO::PARAM_STR);
     $stmt->bindParam(':patient_reports', $patient_reports, PDO::PARAM_STR);

    $patient_id = $_POST['patient_id'];
    $patient_name = $_POST['patient_name'];
    $patient_IC = $_POST['patient_IC'];
    $patient_age = $_POST['patient_age'];
    $patient_gender = $_POST['patient_gender'];
    $patient_address = $_POST['patient_address'];
    $patient_phone = $_POST['patient_phone'];
    $patient_email = $_POST['patient_email'];
    $patient_password = $_POST['patient_password'];
    $patient_repassword = $_POST['patient_repassword'];
    $event_dt = $_POST['event_dt'];
    $dr_name = $_POST['dr_name'];
    $feedback = $_POST['feedback'];
    $patient_reports = $_POST['patient_reports'];
         
         if ($_POST["patient_password"] === $_POST["patient_repassword"]) {
   // success!
          $stmt->execute();
          header("location:viewAppointmentPatient.php");
              }
                else {
   // failed :(
                $message = "Password does not match";
                echo "<script type='text/javascript'>alert('$message');</script>";
              }
    }
 
  catch(PDOException $e)
  {
      echo "Error: " . $e->getMessage();
  }
}
 
//Update
if (isset($_POST['update'])) {
   
  try {
 
    $stmt = $conn->prepare("UPDATE tbl_patients SET 
      patient_id = :patient_id, patient_name = :patient_name, patient_IC= :patient_IC, patient_age= :patient_age, patient_gender= :patient_gender, patient_address= :patient_address, patient_phone= :patient_phone, patient_email= :patient_email, patient_password = :patient_password, patient_repassword= :patient_repassword, event_dt = :event_dt, dr_name = :dr_name, feedback = :feedback, patient_reports = :patient_reports
      WHERE patient_IC = :patient_IC");
   
   $stmt->bindParam(':patient_id', $patient_id, PDO::PARAM_STR);
   $stmt->bindParam(':patient_name', $patient_name, PDO::PARAM_STR);
   $stmt->bindParam(':patient_IC', $patient_IC, PDO::PARAM_STR);
   $stmt->bindParam(':patient_age', $patient_age, PDO::PARAM_STR);
   $stmt->bindParam(':patient_gender', $patient_gender, PDO::PARAM_STR);
   $stmt->bindParam(':patient_address', $patient_address, PDO::PARAM_STR);
   $stmt->bindParam(':patient_phone', $patient_phone, PDO::PARAM_STR);
   $stmt->bindParam(':patient_email', $patient_email, PDO::PARAM_STR);
   $stmt->bindParam(':patient_password', $patient_password, PDO::PARAM_STR);
    $stmt->bindParam(':patient_repassword', $patient_repassword, PDO::PARAM_STR);
    $stmt->bindParam(':event_dt', $event_dt, PDO::PARAM_STR);
    $stmt->bindParam(':dr_name', $dr_name, PDO::PARAM_STR);
    $stmt->bindParam(':feedback', $feedback, PDO::PARAM_STR);
    $stmt->bindParam(':patient_reports', $patient_reports, PDO::PARAM_STR);


   $patient_id = $_POST['patient_id'];
   $patient_name = $_POST['patient_name'];
   $patient_IC = $_POST['patient_IC'];
   $patient_age = $_POST['patient_age'];
   $patient_gender = $_POST['patient_gender'];
   $patient_address = $_POST['patient_address'];
   $patient_phone = $_POST['patient_phone'];
   $patient_email = $_POST['patient_email'];
   $patient_password = $_POST['patient_password'];
   $patient_repassword = $_POST['patient_repassword'];
   $event_dt = $_POST['event_dt'];
   $dr_name = $_POST['dr_name'];
   $feedback = $_POST['feedback'];
   $patient_reports = $_POST['patient_reports'];

        
        if ($_POST["patient_password"] === $_POST["patient_repassword"]) {
  // success!
         $stmt->execute();
         header("location:viewAppointmentPatient.php");
         echo '<script language="javascript">alert("Laporan Pesakit Telah Dikemaskini.") </script>';
             }
               else {
  // failed :(
               $message = "Password does not match";
               echo "<script type='text/javascript'>alert('$message');</script>";
             }
   }

 catch(PDOException $e)
 {
     echo "Error: " . $e->getMessage();
 }
}

 
//Delete
if (isset($_GET['delete'])) {
 
  try {
 
    $stmt = $conn->prepare("DELETE FROM tbl_patients where patient_IC = :pic");
   
    $stmt->bindParam(':pic', $pic, PDO::PARAM_STR);
       
    $pic = $_GET['delete'];
     
    $stmt->execute();
 
    header("Location: viewAppointmentPatient.php");
    }
 
  catch(PDOException $e)
  {
      echo "Error: " . $e->getMessage();
  }
}
 
//Edit
if (isset($_GET['edit'])) {
   
  try {
 
    $stmt = $conn->prepare("SELECT * FROM tbl_patients where patient_IC = :pic");
   
    $stmt->bindParam(':pic', $pic, PDO::PARAM_STR);
       
    $pic = $_GET['edit'];
     
    $stmt->execute();
 
    $editrow = $stmt->fetch(PDO::FETCH_ASSOC);
    }
 
  catch(PDOException $e)
  {
      echo "Error: " . $e->getMessage();
  }
}


