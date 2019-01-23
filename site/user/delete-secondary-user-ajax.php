<?php
 if (isset($_POST['apid'])){
		
	
      include("../../config/config.php");
    session_start();
    $aptid=$_POST['apid'];
	

	
	$statement= "select ID,Email from `domisep`.`users` where ID in (select userId from `domisep`.`user_aptmt_association` where aptId = ".$aptid .") ;";
	
		
	if(mysqli_query($db,$statement)){
		
		
		
		$sth = mysqli_query($db,$statement);
		$rows = array();
		while($r = mysqli_fetch_assoc($sth)) {
			
			$rows[] = $r;
		}
		
		
		header('content-type:application/json');
		echo json_encode($rows);
		
		

	}else {
		echo "deletion failed - room_sensor_association table"; 
	}
		}
		
		
		if (isset($_POST['userid'])){
		
	
      include("../../config/config.php");
    session_start();
    $userid=$_POST['userid'];
	$aptid=$_POST['aptid'];

	
	$statement= "DELETE FROM `domisep`.`user_aptmt_association` where aptId = ".$aptid ." and userId = ".$userid ." ;";
	
		
	if(mysqli_query($db,$statement)){
		echo "deleted sucessfully from user_aptmt_association table";  
		echo "/smarthome/site/user/dashboard-user.php";
		
		

	}else {
		echo "deletion failed - user_aptmt_association table"; 
	}
		}
	
    ?>


