<?php
 if (isset($_POST['apid'])){
		
	
      include("../../config/config.php");
    session_start();
    $apId=$_POST['apid'];
	$room_rows[] = null;
  
    $query = mysqli_query($db,"SELECT id,name  FROM room WHERE apartment_id=".$apId);
     if (mysqli_num_rows($query) != 0){

		$sth = mysqli_query($db,"SELECT id,name  FROM room WHERE apartment_id=".$apId);
		$room_rows = array();
		while($r = mysqli_fetch_assoc($sth)) {
			
			$room_rows[] = $r;
		}
		
		
		header('content-type:application/json');
		echo json_encode($room_rows);
	
		
      }
      else
      {
		echo "no data found";
	  }
    }
	
	




?>