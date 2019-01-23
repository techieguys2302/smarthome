<?php
	include("../../config/config.php");
    session_start();
	
		if (isset($_POST['roomid'])) {
		
	    $roomid = $_POST['roomid'];
		$_SESSION['roomid'] = $roomid;
        $select_room_detail="select Name from domisep.room where ID = ".$roomid .";";
		$ap_result = mysqli_query($db,$select_room_detail);
		$detail_rows = array();
		 if (mysqli_num_rows($ap_result) != 0){
		while($r = mysqli_fetch_assoc($ap_result)) {
			
			$detail_rows[] = $r;
		}
		
		 } else {
			 echo "no data found";
		 }
		header('content-type:application/json');
		echo json_encode($detail_rows);
		
	} 
	
	
	if (isset($_POST['rname'])) {
		
	    $rname = $_POST['rname'];
		$roomid = $_SESSION['roomid'] ;
        $select_room_detail="Update domisep.room set Name  = "."'"."$rname"."'"." where ID = ".$roomid.";";
		echo "stmt : ".$select_room_detail;
		 if (mysqli_query($db,$select_room_detail)){
		
		 echo "data updated in table room";
		 } else {
			 echo "no data found";
		 }
		
		
	} 
	 
	
    ?>
