<?php

    if (isset($_POST['apid'])){
		
	
    include("../../config/config.php");
    session_start();
    $apId=$_POST['apid'];
    $room_rows = array();
    $sth = array();
    $query = mysqli_query($db,"SELECT id,name FROM room WHERE apartment_id=".$apId.";");
     if (mysqli_num_rows($query) != 0){
        
		$sth = mysqli_query($db,"SELECT id,name FROM room WHERE apartment_id=".$apId.";");
		
		while($r = mysqli_fetch_assoc($sth)) {
			$room_rows[] = $r;
		}
		
      }
      header('content-type:application/json');
      echo json_encode($room_rows);
    }
	
	    if (isset($_POST['sensor'])){
		
	
    include("../../config/config.php");
    session_start();
    
  
    $query = mysqli_query($db,"SELECT id,name FROM sensor order by name");
     if (mysqli_num_rows($query) != 0){
        $sth = array();
		$sth = mysqli_query($db,"SELECT id,name FROM sensor order by name");
		$sensor_rows = array();
		while($r = mysqli_fetch_assoc($sth)) {
			$sensor_rows[] = $r;
		}
		
      }
      header('content-type:application/json');
      echo json_encode($sensor_rows);
    }
	
	
	
	
	    
	
	
    ?>