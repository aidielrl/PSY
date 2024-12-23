<?php

//connect to the database
include_once 'db.php';
require 'connect.php';

//retrieve the attendance status from the form
$feedback = $_POST['feedback'];
$patient_IC = $_SESSION['patient_IC'];

//update the attendance status in the database
$sql = "UPDATE tbl_patients SET feedback='$feedback' WHERE patient_IC='$patient_IC'";
$result = mysqli_query($conn,$sql);

//redirect the user back to the view appointment page
header("Location: viewforIC1.php");

?>
