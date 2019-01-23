<?php
	include("../../config/config.php");
    session_start();
	
	 if (isset($_POST['edit'])) {
	$fname=$_POST['fname'];
	$lname=$_POST['lname'];
	$email=$_POST['email'];
	
	
	
	echo "statement is ";
	$statement="Update domisep.users set Last_Name = ".$lname.", First_Name = ".$fname.",Email = "."'".$email."'"." where User_Id = ".$_SESSION['user'][0]['ID'].";";

if (mysqli_query($db, $statement)) {
	echo "record updated successfully in users table";
	
} else {
    echo "Error: " . $statement . "<br>" . mysqli_error($db);
}
	 }
	 
	if (isset($_POST['getdata'])) {
		
	
        $select_user_detail="select First_Name,Last_Name,Email from domisep.users where id=".$_SESSION['user'][0]['ID'].";";
		$result = mysqli_query($db,$select_user_detail);
		$user_detail_rows = array();
		 if (mysqli_num_rows($result) != 0){
		while($r = mysqli_fetch_assoc($result)) {
			
			$user_detail_rows[] = $r;
		}
		
		 } else {
			 echo "no data found";
		 }
		header('content-type:application/json');
		echo json_encode($user_detail_rows);
		
	} 
	
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
