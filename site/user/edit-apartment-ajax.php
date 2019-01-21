<?php
	include("../../config/config.php");
    session_start();
	
		if (isset($_POST['apname'])) {
		
	    $apid = $_POST['apname'];
        $select_aptmt_detail="select Name,House_Name,Street,City,Country,Zipcode from domisep.apartment where ID = ".$apid .";";
		$ap_result = mysqli_query($db,$select_aptmt_detail);
		$ap_detail_rows = array();
		 if (mysqli_num_rows($ap_result) != 0){
		while($r = mysqli_fetch_assoc($ap_result)) {
			
			$ap_detail_rows[] = $r;
		}
		
		 } else {
			 echo "no data found";
		 }
		header('content-type:application/json');
		echo json_encode($ap_detail_rows);
		
	} 
	 
	
    ?>
