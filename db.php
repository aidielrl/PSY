<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "psy";

    $conn = mysqli_connect($servername,$username,$password,$dbname);
    $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

if(!$conn){
    die("Connection failed: ".mysqli_connect_error());
}
?>