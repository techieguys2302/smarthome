<?php

    if (isset($_POST['apid'])){
		
	
    include("../../config/config.php");
    session_start();
    $apId=$_POST['apid'];
  
    $query = mysqli_query($db,"SELECT id,name  FROM room WHERE apartment_id=".$apId);
     if (mysqli_num_rows($query) != 0){

		$sth = mysqli_query($db,"SELECT id,name  FROM room WHERE apartment_id=".$apId);
		$rows = array();
		while($r = mysqli_fetch_assoc($sth)) {
			$room_rows[] = $r;
		}
		
		$_SESSION['rooms'] = ($room_rows);
		echo ("/smarthome/sensor.php");
	
		
      }
      else
      {
		echo "no data found";
	  }
    }
	
	
	
	
	    
	
	
    ?>