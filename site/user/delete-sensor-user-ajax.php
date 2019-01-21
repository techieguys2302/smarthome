<?php
 if (isset($_POST['sid'])){
		
	
      include("../../config/config.php");
    session_start();
    $sensorId=$_POST['sid'];
	$roomId=$_POST['rid'];

	
	$statement= "DELETE FROM `domisep`.`room_sensor_association` where Sensor_Id = ".$sensorId ." and Room_Id = ".$roomId." ;";
	
	//

    
    
	
	if(mysqli_query($db,$statement)){
		
		echo "deleted sucessfully from room_sensor_association table";  
		echo "/smarthome/site/user/dashboard-user.php";
		
		

	}else {
		echo "deletion failed - room_sensor_association table"; 
	}
		}
	
    ?>


