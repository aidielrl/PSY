<?php
 
include_once 'db.php';
 
$conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
 
//Create
if (isset($_POST['create'])) {
 
  try {
 
    $stmt = $conn->prepare("INSERT INTO tbl_medicines (patient_id, patient_name, patient_IC, diagnosis, medicine, indent_date, dic) VALUES(:pid, :pname, :pic, :diagnosis, :medicine, :indent_date, :dic)");
   
    $stmt->bindParam(':pid', $pid, PDO::PARAM_STR);
    $stmt->bindParam(':pname', $pname, PDO::PARAM_STR);
    $stmt->bindParam(':pic', $pic, PDO::PARAM_STR);
    $stmt->bindParam(':diagnosis', $diagnosis, PDO::PARAM_STR);
    $stmt->bindParam(':medicine', $medicine, PDO::PARAM_STR);
    $stmt->bindParam(':indent_date', $indent_date, PDO::PARAM_STR);
    $stmt->bindParam(':dic', $dic, PDO::PARAM_STR);

    $pid = $_POST['pid'];
    $pname = $_POST['pname'];      
    $pic = $_POST['pic'];
    $diagnosis = $_POST['diagnosis'];
    $medicine = $_POST['medicine'];
    $indent_date = $_POST['indent_date'];
    $dic = $_POST['dic'];
         
        
    }
 
  catch(PDOException $e)
  {
      echo "Error: " . $e->getMessage();
  }
}
 
//Update
if (isset($_POST['update'])) {
   
  try {
 
    $stmt = $conn->prepare("UPDATE tbl_medicines SET 
      patient_id = :pid, patient_name = :pname, patient_ic= :pic, diagnosis = :diagnosis, medicine = :medicine, indent_date = :indent_date, dic = :dic 
      WHERE patient_id = :oldpid");
   
   $stmt->bindParam(':pid', $pid, PDO::PARAM_STR);
   $stmt->bindParam(':pname', $pname, PDO::PARAM_STR);
   $stmt->bindParam(':pic', $pic, PDO::PARAM_STR);
   $stmt->bindParam(':diagnosis', $diagnosis, PDO::PARAM_STR);
   $stmt->bindParam(':medicine', $medicine, PDO::PARAM_STR);
   $stmt->bindParam(':indent_date', $indent_date, PDO::PARAM_STR);
   $stmt->bindParam(':dic', $dic, PDO::PARAM_STR);
         
   $pid = $_POST['pid'];
    $pname = $_POST['pname'];      
    $pic = $_POST['pic'];
    $diagnosis = $_POST['diagnosis'];
    $medicine = $_POST['medicine'];
    $indent_date = $_POST['indent_date'];
    $dic = $_POST['dic'];
  }
 
  catch(PDOException $e)
  {
      echo "Error: " . $e->getMessage();
  }
}
 
//Delete
if (isset($_GET['delete'])) {
 
  try {
 
    $stmt = $conn->prepare("DELETE FROM tbl_medicines where patient_IC = :pic");
   
    $stmt->bindParam(':pic', $sid, PDO::PARAM_STR);
       
    $sid = $_GET['delete'];
     
    $stmt->execute();
 
    header("Location: PesakitStaff_ubat.php");
    }
 
  catch(PDOException $e)
  {
      echo "Error: " . $e->getMessage();
  }
}
 
//Edit
if (isset($_GET['edit'])) {
   
  try {
 
    $stmt = $conn->prepare("SELECT * FROM tbl_medicines where patient_IC = :pic");
   
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
 

 
?>