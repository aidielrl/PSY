<?php
 
include_once 'db.php';
 
$conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
 
//Create
if (isset($_POST['create'])) {
 
  try {
 
    $stmt = $conn->prepare("INSERT INTO tbl_doctor (doctor_id, dr_name, dr_gred, dr_IC, dr_gender, dr_address, dr_phone, dr_email, dr_password, dr_repassword) VALUES(:doctor_id, :dr_name, :dr_gred, :dr_IC, :dr_gender, :dr_address, :dr_phone, :dr_email, :dr_password, :dr_repassword)");
   
    $stmt->bindParam(':doctor_id', $doctor_id, PDO::PARAM_STR);
    $stmt->bindParam(':dr_name', $dr_name, PDO::PARAM_STR);
    $stmt->bindParam(':dr_gred', $dr_gred, PDO::PARAM_STR);
    $stmt->bindParam(':dr_IC', $dr_IC, PDO::PARAM_STR);
    $stmt->bindParam(':dr_gender', $dr_gender, PDO::PARAM_STR);
    $stmt->bindParam(':dr_address', $dr_address, PDO::PARAM_STR);
    $stmt->bindParam(':dr_phone', $dr_phone, PDO::PARAM_STR);
    $stmt->bindParam(':dr_email', $dr_email, PDO::PARAM_STR);
    $stmt->bindParam(':dr_password', $dr_password, PDO::PARAM_STR);
     $stmt->bindParam(':dr_repassword', $dr_repassword, PDO::PARAM_STR);
       
    $doctor_id = $_POST['doctor_id'];
    $dr_name = $_POST['dr_name'];
    $dr_gred = $_POST['dr_gred'];
    $dr_IC = $_POST['dr_IC'];
    $dr_gender = $_POST['dr_gender'];
    $dr_address = $_POST['dr_address'];
    $dr_phone = $_POST['dr_phone'];
    $dr_email = $_POST['dr_email'];
    $dr_password = $_POST['dr_password'];
    $dr_repassword = $_POST['dr_repassword'];
    

         if ($_POST["dr_password"] === $_POST["dr_repassword"]) {
   // success!
          $stmt->execute();
          header("location:Doctor_Register.php");
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
 
    $stmt = $conn->prepare("UPDATE tbl_doctor SET 
      doctor_id = :doctor_id, dr_name = :dr_name, dr_gred = :dr_gred, dr_IC= :dr_ic, dr_gender= :dr_gender, dr_address= :dr_address, dr_phone= :dr_phone, dr_email= :dr_email, dr_password = :dr_password, dr_repassword= :dr_repassword
      WHERE doctor_id = :doctor_id");
   
   $stmt->bindParam(':doctor_id', $doctor_id, PDO::PARAM_STR);
   $stmt->bindParam(':dr_name', $dr_name, PDO::PARAM_STR);
   $stmt->bindParam(':dr_gred', $dr_gred, PDO::PARAM_STR);
   $stmt->bindParam(':dr_IC', $dr_IC, PDO::PARAM_STR);
   $stmt->bindParam(':dr_gender', $dr_gender, PDO::PARAM_STR);
   $stmt->bindParam(':dr_address', $dr_address, PDO::PARAM_STR);
   $stmt->bindParam(':dr_phone', $dr_phone, PDO::PARAM_STR);
   $stmt->bindParam(':dr_email', $dr_email, PDO::PARAM_STR);
   $stmt->bindParam(':dr_password', $dr_password, PDO::PARAM_STR);
    $stmt->bindParam(':dr_repassword', $dr_repassword, PDO::PARAM_STR);
      
   $doctor_id = $_POST['doctor_id'];
   $dr_name = $_POST['dr_name'];
   $dr_gred = $_POST['dr_gred'];
   $dr_IC = $_POST['dr_IC'];
   $dr_gender = $_POST['dr_gender'];
   $dr_address = $_POST['dr_address'];
   $dr_phone = $_POST['dr_phone'];
   $dr_email = $_POST['dr_email'];
   $dr_password = $_POST['dr_password'];
   $dr_repassword = $_POST['dr_repassword'];
         


                if ($_POST["dr_password"] === $_POST["dr_repassword"]) {
   // success!
          $stmt->execute();
}
          else {
   // failed :(
       $message = "Password does not match";
echo "<script type='text/javascript'>alert('$message');</script>";
}
    
 
    header("Location: Doctor_Register.php");
    }
 
  catch(PDOException $e)
  {
      echo "Error: " . $e->getMessage();
  }
}
 
//Delete
if (isset($_GET['delete'])) {
 
  try {
 
    $stmt = $conn->prepare("DELETE FROM tbl_doctor where doctor_id = :doctor_id");
   
    $stmt->bindParam(':doctor_id', $doctor_id, PDO::PARAM_STR);
       
    $doctor_id = $_GET['delete'];
     
    $stmt->execute();
 
    header("Location: Doctor_Register.php");
    }
 
  catch(PDOException $e)
  {
      echo "Error: " . $e->getMessage();
  }
}
 
//Edit
if (isset($_GET['edit'])) {
   
  try {
 
    $stmt = $conn->prepare("SELECT * FROM tbl_doctor where doctor_id = :doctor_id");
   
    $stmt->bindParam(':doctor_id', $doctor_id, PDO::PARAM_STR);
       
    $doctor_id = $_GET['edit'];
     
    $stmt->execute();
 
    $editrow = $stmt->fetch(PDO::FETCH_ASSOC);
    }
 
  catch(PDOException $e)
  {
      echo "Error: " . $e->getMessage();
  }
}
 

 
?>