

<?php
 if (isset($_POST['rname'])){
		
	
      include("../../config/config.php");
    session_start();
   
	$roomId=$_POST['rname'];
	

	
	$statement= "DELETE FROM `domisep`.`room_sensor_association` where  Room_Id = ".$roomId." ;";
	mysqli_query($db,$statement);
	
	if(mysqli_query($db,"DELETE FROM ROOM where ID = ".$roomId." ;")){
		
		
			echo "/smarthome/site/user/dashboard-user.php";
	}else {
		echo "deletion failed - room_sensor_association table"; 
	}
		}
	
    ?>


