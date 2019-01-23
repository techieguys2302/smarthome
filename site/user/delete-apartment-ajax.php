<?php

    if (isset($_POST['apname'])){
		
	
    include("../../config/config.php");
    session_start();
    $apId=$_POST['apname'];
  
    $query = mysqli_query($db,"DELETE FROM apartment WHERE id=".$apId." and User_Id = ".$_SESSION['user'][0]['ID'].";"); 
    
	if(mysqli_query($db,$query)){
		
		echo "deleted sucessfully from room_sensor_association table";  
		echo "/smarthome/site/user/dashboard-user.php";
		
		

	}else {
		echo "deletion failed - room_sensor_association table"; 
	}
		}
	
	
	
	    
	
	
    ?>