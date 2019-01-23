<?php
//echo "here==>";
	 session_start();
	  $now = time(); // Checking the time now when home page starts.

	if( isset($_SESSION['user']) && ! ($now > $_SESSION['expire']))
	{
		 //session_start();
		 $_SESSION['expire'] = time() + (30 * 60);
		 
		 include("../../config/config.php");
		 
		 if(! $db ) {
			die('Could not connect: ' . mysqli_error());
		}

		 if (mysqli_query($db, "Update room_sensor_association set Status = '" .$_POST['status']. "' where ID = '" .$_POST['ID']. "'")) {
			  echo "Success";
		} else {
			  echo "Error updating record: " . mysqli_error($db);
		}
		mysqli_close($db);

	}else{
		
		session_destroy();
		echo "Login";
	}
 ?>