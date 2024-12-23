<?php 
include_once("inc/db_connect.php");
include("export.php");
include("inc/header.php"); 
?>
<title>PSY</title>
<?php include('nav_barAdmin.php');?>
    <section id="" style="background-color:#D1F2EB;">
      <section class="wrapper site-min-height">
        <div class="row mt">
          <div class="col-lg-12">
            <div class="row content-panel">
              <h2><center>SENARAI MAKLUMAT TEMUJANJI</center></h2>
            </div>
            <!-- /row -->
          </div>
          <!-- /col-lg-12 -->
          <div class="col-lg-12 mt">
            <div class="row content-panel">
              <div class="panel-heading">
                <ul class="nav nav-tabs nav-justified">
                  <li class="active">
                    <a data-toggle="tab" href="#overview">SENARAI TEMUJANJI</a>
                  </li>
                  <li>
                    <a data-toggle="tab" href="#contact" class="contact-map">CARIAN TEMUJANJI</a>
                  </li>
              </div>
              <!-- /panel-heading -->
              <div class="panel-body">
                <div class="tab-content">
                  <div id="overview" class="tab-pane active">
                    <div class="row">
                      <div class="container">	
                        <h4><center>SENARAI MAKLUMAT TEMUJANJI</center></h4>
	<div class="well-sm col-sm-12">
		<div class="btn-group pull-right">	
			<form action="<?php echo $_SERVER["PHP_SELF"]; ?>" method="post">					
				<button type="submit" id="dataExport" name="dataExport" value="Export to excel" class="btn btn-info">Excel</button>
			</form>
		</div>
	</div>				  
	<table id="" class="table table-striped table-bordered">
		<tr>
			<th>Nama Pesakit</th>
			<th>Nama Doktor</th>
			<th>Tarikh</th>
			<th>Waktu</th>			
			<th>Maklum Balas</th>
		</tr>
		<tbody>
			<?php foreach($developersData as $developer) { ?>
			   <tr>
			   <td><?php echo $developer ['patient_name']; ?></td>
			   <td><?php echo $developer ['staff_name']; ?></td>
			   <td><?php echo $developer ['psdate']; ?></td>  
				<td><?php echo $developer ['pstime']; ?></td>			   
			   <td><?php echo $developer ['feedback']; ?></td>  
			   </tr>
			<?php } ?>
		</tbody>
    </table>		
</div>
                    </div>
                    <!-- /OVERVIEW -->
                  </div>
                  <!-- /tab-pane -->
                  <div id="contact" class="tab-pane">
                    <div class="row">
                      <table width="980" border="1" align="center" cellpadding="0" cellspacing="0" bordercolor="#A33FA3">
    <tr>
    <td width="100%" align="center"><div align="center"> 
    <table width="100%">
        <tr>
            <td><div align="center"><h5><b>MASUKKAN CARIAN ANDA:</b></h5></div></td>
        </tr>
    </table>

    <table width="450" border="0">
        <tr> 
            <form name="index.php" method="POST" action="index.php">
               
                <td><center><b> CARIAN : </b>
                <input type="text" name="keyword" id="btn-keyword" placeholder="Carian.." max length="50"/>
                    <button type="submit" name="search" value="Search" ><i class="fa fa-search"></i></button></center>
                </td>
            </form>
        </tr>
        <tr>
        <td>
<?php 
    
    if(isset($_POST['search']))
    {
        $keyword = $_POST['keyword'];
        searchKey($keyword);
    }
           
    function searchKey($key)
    {
        echo '<h4 style= " text-indent:0em;"><center><strong>Carian untuk " <span style="color:#000080;">'.$key.'</span>":</strong></center></h4>';
        include("inc/db_connect.php");
        $q1 = "SELECT * FROM tbl_appointments WHERE patient_name LIKE '%$key%' OR staff_name LIKE '%$key%' OR psdate LIKE '%$key%' OR pstime LIKE '%$key%' OR feedback LIKE '%$key%' ORDER BY patient_name";
        $result1 = mysqli_query($conn,$q1);

        if(mysqli_num_rows($result1) > 0)
        {   echo "<table width='900' border='1px solid black' align='center' cellpadding='2' cellspacing='0.5' id='t01' bordercolor='#A33FA3'>
            <tr height='30'>
            <th><h6><b><center>  Nama Pesakit </center></b></h6></th>
            <th><h6><b><center>  Nama Doktor </center></b></h6></th>
            <th><h6><b><center>  Tarikh </center></b></h6></th>
            <th><h6><b><center>  Waktu </center></b></h6></th>
            <th><h6><b><center>  MaklumBalas </center></b></h6></th>
            </tr>";

            // output data of each row
            while($row= mysqli_fetch_assoc($result1))
            {   

                if($row['patient_name'] == 'patient_name')
                {
                    $row['patient_name']=$row['patient_name'].' '.$row['patient_name'];
                }
                else
                {
                    $row['patient_name'];
                }
                echo "<tr align = 'center' height = '40'> 
                     <td><h6><input type ='hidden' name='patient_name' value=".$row['patient_name'].">
                     ".$row["patient_name"]."</h6></td>
                     <td><h6>".$row["staff_name"]."</h6></td>
                     <td><h6>".$row["psdate"]."</h6></td>
                     <td><h6>".$row["pstime"]."</h6></td>
                     <td><h6>".$row["feedback"]."</h6></td>";                    
            }
            echo "</table>";
        }
        else
        {
            echo "<center><p><big>' "." $key "."' tidak dijumpai.</big></p></center>";
        }
    }
    
?>
        </td>        
        </tr>
        </br>
    </table>
    </br>
</table>
                    </div>
                    <!-- /row -->
                  </div>
                  <!-- /tab-pane -->
                  <!-- /tab-pane -->
                </div>
                <!-- /tab-content -->
              </div>
              <!-- /panel-body -->
            </div>
            <!-- /col-lg-12 -->
          </div>
          <!-- /row -->
        </div>
        <!-- /container -->
      </section>
      <!-- /wrapper -->
    </section>

<script>
$(document).ready(function(){
    $('a[data-toggle="tab"]').on('show.bs.tab', function(e) {
        localStorage.setItem('activeTab', $(e.target).attr('href'));
    });
    var activeTab = localStorage.getItem('activeTab');
    if(activeTab){
        $('#myTab a[href="' + activeTab + '"]').tab('show');
    }
});
</script>