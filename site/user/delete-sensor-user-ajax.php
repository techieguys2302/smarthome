<?php
 if (isset($_POST['sid'])){
		
	
      include("../../config/config.php");
    session_start();
    $sensorId=$_POST['sid'];

	
	$statement= "DELETE FROM `domisep`.`room_sensor_association` where Id = ".$sensorId ." ;";
	
	//

    
    
	
	if(mysqli_query($db,$statement)){
		echo "/smarthome/site/user/dashboard-user.php";
	}else {
		echo "deletion failed - room_sensor_association table"; 
	}
		}
	
    ?>


