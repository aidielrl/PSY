<?php 
include_once 'db.php';
	
		$stmt = $conn->prepare("SELECT * FROM tbl_admin WHERE admin_id = :admin_id AND admin_password = :admin_password");
		
		$stmt->bindParam(':admin_id', $admin_id, PDO::PARAM_STR);
		$stmt->bindParam(':admin_id', $admin_password, PDO::PARAM_STR);

		$admin_id=$_POST['admin_id'];
		$admin_password=$_POST['admin_password'];
	

		$stmt->execute();
		$result = $stmt->fetchAll();
		$bil_row = $stmt->rowCount();
		
			if($bil_row > 0)
			{
				session_start();
				
				$_SESSION['admin_id']=$admin_id;

				if (isset($admin_id)) {
					# code...
					header("location:HomepageAdmin.php");
				}
				else{
					# code...
					echo"<script> alert('nama pengguna atau kata laluan anda salah!')
					document.location.href = 'IndexAdmin.php'</script>";
				
				}	
				
			}
			else
			{
				header("location:IndexAdmin.php?login=failed");
			}	
?>