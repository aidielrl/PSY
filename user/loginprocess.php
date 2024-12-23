<!------- THE PROCESS TO IDENTIFY PATIENT TO LOGIN ------>
<!------- USING $SESSION TO PASS THE DATA AND OUTPUT THE DATA AT viewforIC1.php  ------>

<?php
    session_start();
    require 'connect.php';

 
    //check whether the form is filled or not
    if(isset($_POST['patient_IC']) && isset ($_POST['patient_password']))
{
    $patient_IC = $_POST['patient_IC'];
    $_SESSION['patient_IC'] = $patient_IC;
    $patient_password = $_POST['patient_password'];
    $_SESSION['patient_password'] = $patient_password;
   
            $sql = " SELECT * FROM tbl_patients WHERE patient_IC = '$patient_IC' AND patient_password ='$patient_password' ";
            $result = mysqli_query($conn,$sql);

            //check database row available or not
            if(mysqli_num_rows($result) == 1)
            {   
                
                $row = mysqli_fetch_assoc($result);
                $_SESSION['patient_IC']= $row['patient_IC'];
                $_SESSION['patient_password']= $row['patient_password'];

              
                //SUCCESSFUL ---> viewforIC1.php
                echo "<script> alert ('Log Masuk Berjaya! ');
                document.location.href = '../user/viewforIC1.php'</script>";
                
            }
            else
            {
                //UNSUCCESSFUL ---> login.php
                echo"<script> alert('nama pengguna atau kata laluan anda salah!')
                document.location.href = 'login.php'</script>";
            }
    }

    else
        {
            echo"<script> alert('Log Masuk Gagal!');
            document.location.href='login.php'
            </script>";
        }
?>