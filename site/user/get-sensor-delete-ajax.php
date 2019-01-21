<?php
 if (isset($_POST['rid'])){
		
	
      include("../../config/config.php");
    session_start();
    $roomId=$_POST['rid'];
	$sensor_rows[] = null;
  
    $query = mysqli_query($db,"select s.ID,a.Sensor_Name from sensor as s inner join  room_sensor_association as a on s.id=a.sensor_id and a.room_id=".$roomId.";");
     if (mysqli_num_rows($query) != 0){

		$sth = mysqli_query($db,"select s.ID,a.Sensor_Name from sensor as s inner join  room_sensor_association as a on s.id=a.sensor_id and a.room_id=".$roomId.";");
		$sensor_rows = array();
		while($r = mysqli_fetch_assoc($sth)) {
			
			$sensor_rows[] = $r;
		}
		
		
		header('content-type:application/json');
		echo json_encode($sensor_rows);
	
		
      }
      else
      {
		echo "no data found";
	  }
    }
	
	




?>