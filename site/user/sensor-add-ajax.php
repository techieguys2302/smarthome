<?php

	    if (isset($_POST['rname'])){
		
	
    include("../../config/config.php");
    session_start();
   
	$rname=$_POST['rname'];
	$stype=$_POST['sensortype'];
	$max=$_POST['max'];
	$min=$_POST['min'];
	$statement= "INSERT INTO `domisep`.`room_sensor_association`(
`Sensor_Id`,
`Room_Id`,
`User_Assigned_Min_Val`,
`User_Assigned_Max_Val`,
`Reading`,
`Energy_Consumed`,
`Start_Date`,
`End_Date`,
`Status`
)
VALUES
(
'".$stype."',
'".$rname."',
'".$min."',
'".$max."',
'0',
'0',
NOW(),
NOW(),
1);";

    
    
	
	if(mysqli_query($db,$statement)){
		echo "/smarthome/site/user/dashboard-user.php";	
	} else {
		echo "failed"; 
	}
		}
	
    ?>