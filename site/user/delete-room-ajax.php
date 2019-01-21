

<?php
 if (isset($_POST['rname'])){
		
	
      include("../../config/config.php");
    session_start();
   
	$roomId=$_POST['rname'];
	

	
	$statement= "DELETE FROM `domisep`.`room_sensor_association` where  Room_Id = ".$roomId." ;";
	
	//

    
    
	
	if(mysqli_query($db,$statement)){
		
		echo "deleted sucessfully from room_sensor_association table";  
		$stmt= "DELETE FROM `domisep`.`room` where id = ".$roomId." ;";
		if(mysqli_query($db,$stmt)){
			echo "/smarthome/site/user/dashboard-user.php";
			echo "deleted sucessfully from room table"; 
		} else {
		echo "deletion failed - room table"; 
	}
		

	}else {
		echo "deletion failed - room_sensor_association table"; 
	}
		}
	
    ?>


