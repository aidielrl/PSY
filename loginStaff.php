<?php 
include_once 'db.php';
	
$stmt = $conn->prepare("SELECT * FROM tbl_staffs WHERE staff_id = :sid AND staff_password = :pass AND staff_position = :pos");
$stmt->bindParam(':sid', $sid, PDO::PARAM_STR);
$stmt->bindParam(':pass', $pass, PDO::PARAM_STR);
$stmt->bindParam(':pos', $pos, PDO::PARAM_STR);

$sid = $_POST['sid'];
$pass = $_POST['pass'];
$pos = $_POST['position']; // retrieve the position from the hidden input field

$stmt->execute();
$result = $stmt->fetchAll();
$bil_row = $stmt->rowCount();

		
if($bil_row > 0)
{
    session_start();
    $_SESSION['staff_id'] = $sid;
    if($pos == "Admin"){
        header("location:StaffRegister.php");
    }elseif($pos == "Staff"){
        header("location:viewAppointmentPatient.php");
    }
}
else
{
    echo"<script> alert('nama pengguna atau kata laluan anda salah!')
    document.location.href = 'IndexStaff.php'</script>";
}

?>