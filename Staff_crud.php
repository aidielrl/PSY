<?php
 
include_once 'db.php';
 
$conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
 
//Create
if (isset($_POST['create'])) {
 
  try {
 
    $stmt = $conn->prepare("INSERT INTO tbl_staffs (staff_id, staff_name, staff_gred, staff_IC, staff_gender, staff_address, staff_phone, staff_email, staff_password, staff_repassword, staff_position) VALUES(:staff_id, :staff_name, :staff_gred, :staff_IC, :staff_gender, :staff_address, :staff_phone, :staff_email, :staff_password, :staff_repassword, :staff_position)");
   
    $stmt->bindParam(':staff_id', $staff_id, PDO::PARAM_STR);
    $stmt->bindParam(':staff_name', $staff_name, PDO::PARAM_STR);
    $stmt->bindParam(':staff_gred', $staff_gred, PDO::PARAM_STR);
    $stmt->bindParam(':staff_IC', $staff_IC, PDO::PARAM_STR);
    $stmt->bindParam(':staff_gender', $staff_gender, PDO::PARAM_STR);
    $stmt->bindParam(':staff_address', $staff_address, PDO::PARAM_STR);
    $stmt->bindParam(':staff_phone', $staff_phone, PDO::PARAM_STR);
    $stmt->bindParam(':staff_email', $staff_email, PDO::PARAM_STR);
    $stmt->bindParam(':staff_password', $staff_password, PDO::PARAM_STR);
     $stmt->bindParam(':staff_repassword', $staff_repassword, PDO::PARAM_STR);
     $stmt->bindParam(':staff_position', $staff_position, PDO::PARAM_STR);
       
    $staff_id = $_POST['staff_id'];
    $staff_name = $_POST['staff_name'];
    $staff_gred = $_POST['staff_gred'];
    $staff_IC = $_POST['staff_IC'];
    $staff_gender = $_POST['staff_gender'];
    $staff_address = $_POST['staff_address'];
    $staff_phone = $_POST['staff_phone'];
    $staff_email = $_POST['staff_email'];
    $staff_password = $_POST['staff_password'];
    $staff_repassword = $_POST['staff_repassword'];
    $staff_position = $_POST['staff_position'];

         if ($_POST["staff_password"] === $_POST["staff_repassword"]) {
   // success!
          $stmt->execute();
          header("location:HomepageAdmin.php");
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
 
    $stmt = $conn->prepare("UPDATE tbl_staffs SET 
      staff_id = :staff_id, staff_name = :staff_name, staff_gred = :staff_gred, staff_IC= :staff_ic, staff_gender= :staff_gender, staff_address= :staff_address, staff_phone= :staff_phone, staff_email= :staff_email, staff_password = :staff_password, staff_repassword= :staff_repassword, staff_position = :staff_position
      WHERE staff_id = :staff_id");
   
   $stmt->bindParam(':staff_id', $staff_id, PDO::PARAM_STR);
   $stmt->bindParam(':staff_name', $staff_name, PDO::PARAM_STR);
   $stmt->bindParam(':staff_gred', $staff_gred, PDO::PARAM_STR);
   $stmt->bindParam(':staff_IC', $staff_IC, PDO::PARAM_STR);
   $stmt->bindParam(':staff_gender', $staff_gender, PDO::PARAM_STR);
   $stmt->bindParam(':staff_address', $staff_address, PDO::PARAM_STR);
   $stmt->bindParam(':staff_phone', $staff_phone, PDO::PARAM_STR);
   $stmt->bindParam(':staff_email', $staff_email, PDO::PARAM_STR);
   $stmt->bindParam(':staff_password', $staff_password, PDO::PARAM_STR);
    $stmt->bindParam(':staff_repassword', $staff_repassword, PDO::PARAM_STR);
    $stmt->bindParam(':staff_position', $staff_position, PDO::PARAM_STR);
      
   $staff_id = $_POST['staff_id'];
   $staff_name = $_POST['staff_name'];
   $staff_gred = $_POST['staff_gred'];
   $staff_IC = $_POST['staff_IC'];
   $staff_gender = $_POST['staff_gender'];
   $staff_address = $_POST['staff_address'];
   $staff_phone = $_POST['staff_phone'];
   $staff_email = $_POST['staff_email'];
   $staff_password = $_POST['staff_password'];
   $staff_repassword = $_POST['staff_repassword'];
   $staff_position = $_POST['staff_position'];
         


                if ($_POST["staff_password"] === $_POST["staff_repassword"]) {
   // success!
          $stmt->execute();
}
          else {
   // failed :(
       $message = "Password does not match";
echo "<script type='text/javascript'>alert('$message');</script>";
}
    
 
    header("Location: StaffRegister.php");
    }
 
  catch(PDOException $e)
  {
      echo "Error: " . $e->getMessage();
  }
}
 
//Delete
if (isset($_GET['delete'])) {
 
  try {
 
    $stmt = $conn->prepare("DELETE FROM tbl_staffs where staff_id = :staff_id");
   
    $stmt->bindParam(':staff_id', $staff_id, PDO::PARAM_STR);
       
    $sid = $_GET['delete'];
     
    $stmt->execute();
 
    header("Location: StaffRegister.php");
    }
 
  catch(PDOException $e)
  {
      echo "Error: " . $e->getMessage();
  }
}
 
//Edit
if (isset($_GET['edit'])) {
   
  try {
 
    $stmt = $conn->prepare("SELECT * FROM tbl_staffs where staff_id = :staff_id");
   
    $stmt->bindParam(':staff_id', $staff_id, PDO::PARAM_STR);
       
    $staff_id = $_GET['edit'];
     
    $stmt->execute();
 
    $editrow = $stmt->fetch(PDO::FETCH_ASSOC);
    }
 
  catch(PDOException $e)
  {
      echo "Error: " . $e->getMessage();
  }
}
 

 
?>