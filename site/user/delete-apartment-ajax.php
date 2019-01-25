<?php

    if (isset($_POST['apname'])){
		
	
    include("../../config/config.php");
    session_start();
    $apId=$_POST['apname'];
  
    //$query = mysqli_query($db,"DELETE FROM apartment WHERE id=".$apId." and User_Id = ".$_SESSION['user'][0]['ID'].";"); 
    
	$room_query = mysqli_query($db,"SELECT * FROM ROOM where Apartment_Id = '" .$apId. "'");
			   if (mysqli_num_rows($room_query) != 0){

					$sth = mysqli_query($db,"SELECT * FROM ROOM where Apartment_Id = '" .$apId. "'");
					while($r = mysqli_fetch_assoc($sth)) {
					
						mysqli_query($db,"DELETE FROM room_sensor_association WHERE Room_Id=".$r['ID'].";");
						mysqli_query($db,"DELETE FROM room WHERE Id=".$r['ID'].";");
					}
			   }
	
	if(mysqli_query($db,"DELETE FROM apartment WHERE id=".$apId." and User_Id = ".$_SESSION['user'][0]['ID'].";")){
		
		echo "/smarthome/site/user/dashboard-user.php";
	}else {
		echo "deletion failed - apartment table"; 
	}
		}
	
	
	
	    
	
	
    ?>