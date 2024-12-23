<?php
  include_once 'PesakitStaff_crudubat.php';
?>
<?php
  include_once 'PesakitStaff_crud.php';
?>

<!DOCTYPE html>
<html>
<head>
<title> PSY : Paparan Butiran Temujanji Pesakit </title>
</head>

<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.3.0/css/font-awesome.min.css">
<link rel="stylesheet" href="css/welcomePage.css">
<link rel="stylesheet" href="css/viewforIC1.css">
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Figtree&display=swap" rel="stylesheet">

<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Comfortaa:wght@700&display=swap" rel="stylesheet">

<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@600&display=swap" rel="stylesheet">
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
<style>
html
{
    scroll-behavior: smooth;
}
body {
  background-image: url('img/bgtest6.jpg');
  background-repeat: no-repeat;
  background-attachment: fixed;
  background-size: 100% 100%;
}
h3 {
color: #05998C;

font-family: 'Montserrat', sans-serif;
font-size: 40px;
font-weight: bold;
margin-top: 0px;
margin-bottom: 1px;
}
h4 {
color: #05998C;

font-family: 'Montserrat', sans-serif;
font-size: 30px;
font-weight: bold;
margin-top: 0px;
margin-bottom: 1px;
}
</style>

<body>
      <section id="container">
<!--Header -->
<?php include("nav_barStaff.php");?>  
<!-- Header END -->
</br>
</br>
</br>

    </br>
    <br>
    <section>
        <div class="container" align="center">
            <h3 class="page-head-line"><b>PAPARAN MAKLUMAT PESAKIT</b></h3>
            <h4 class="page-head-line"><b>SENARAI TEMUJANJI HARI INI</b></h4>
        </div>
        </br>
        </br>


  <div class="text-center">
<form class="form-inline" role="search" method="post" action="viewAppointmentPatient.php">
  <div style="font-family: 'Figtree', sans-serif;font-size: 14px;">
  <label for="date">Pilih Tarikh Temujanji:</label>
  <input type="date" name="date" class="form-control" >
  <input type="submit" name="view_appointments" class=" btn btn-info" value="CARI">
  </div>
</form>

<br>



        <style>
  /* Add some styling to the table */
  table {
    border-collapse: collapse;
    width: 90%;
    margin: 0 auto;
    padding: 70px 0;
   
  }


  th, td {
    text-align: left;
    padding: 8px;
  }

  tr:nth-child(even) {
    background-color: #f2f2f2;
  }

  tbody tr:nth-child(odd) {
  background-color: #fff;
}

  th {
    background-color: #4CAF50;
    color: white;
  }


</style>

<?php
  // Connect to the database
  require 'user/connect.php';
  session_start();

  // Set the default date to today's date
  $date = date("Y-m-d");
$newFormat = date("d-m-Y", strtotime($date));



  // Check if the form has been submitted
  if(isset($_POST['view_appointments'])){
    // Check if the "date" input is present and not empty
    if(!empty($_POST['date'])) {
      $date = $_POST['date'];
    }
  }

  // Retrieve the appointment records from the database
  $sql = "SELECT * FROM tbl_patients WHERE DATE(event_dt) = '$date' ORDER BY event_dt ASC";
  $result = mysqli_query($conn, $sql);
  
  

?>

<!-- Table to display the list of appointments -->
<table style="font-family: 'Figtree', sans-serif;font-size: 16px;">
  <tr>
    <th>Bil.</th>
    <th>No Kad Pengenalan</th>
    <th>Nama Pesakit</th>
    <th>Doktor</th>
    <th>Tarikh dan Masa Temujanji</th>
    <th>Maklumbalas</th>
    <th>Tindakan</th>
  

    <?php
    session_start();
 
  $counter = 1;
   // Check if there are any records returned by the query
   if(mysqli_num_rows($result) > 0) {
  while($row = mysqli_fetch_array($result)) {
    echo "<tr>";
    echo "<td>" . $counter . "</td>";
    echo "<td>" . $row['patient_IC'] . "</td>";
    echo "<td>" . $row['patient_name'] . "</td>";
    echo "<td>" . $row['dr_name'] . "</td>";
    echo "<td>" . $row['event_dt'] . "</td>";
    $feedback = "";
    if($row['feedback'] == "Tidak Hadir"){
      $feedback = '<button type="button" class="btn btn-danger">Tidak Hadir</button></a>';
    }
    else{
      $feedback = '<button type="button" class="btn btn-success">Hadir</button>';
    }
    echo "<td>". $feedback ."</td>";
     // unique form for each patient
    // add the buttons for update and delete in the same row
    echo "<td>";
    echo "<form action='PesakitStaff_details.php' method='post'>";
    echo "<input type='hidden' name='patient_IC' value='" . $row['patient_IC'] . "'>";
    echo "<input type='submit' class='btn btn-primary' value='Information'>";
    echo "&nbsp;"; //or <br>
    echo "&nbsp;"; //or <br>
    echo "<a href='PesakitStaff_Update.php?edit=" . $row['patient_IC'] . "'>";
    echo "<button type='button' name='edit' class='btn btn-info'>Update</button>";
    echo "</a>";
    echo "&nbsp;"; //or <br>
    echo "&nbsp;"; //or <br>
    echo "<a href='viewAppointmentPatient.php?delete=" . $row['patient_IC'] . "' onclick=\"return confirm('Are you sure you want to delete this appointment?')\">";
    echo "<button type='button' class='btn btn-danger'>Delete</button>";
    echo "</a>";
    
    echo "</form>";
    
  echo "</td>";
  echo "</tr>";

  $counter++;
}
   }
   else {
    // If no records are returned, display a message
    echo '<tr><td colspan="7">No appointments found on '. $date .'.</td></tr>';
  }

?>
  


</table>

</section>
</section>
</body>
</html>