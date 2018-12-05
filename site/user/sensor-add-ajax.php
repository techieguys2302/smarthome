<?php

	    if (isset($_POST['sname'])){
		
	
    include("../../config/config.php");
    session_start();
    $sname=$_POST['sname'];
	$rname=$_POST['rname'];
	$stype=$_POST['sensortype'];
	$max=$_POST['max'];
	$min=$_POST['min'];
	$statement= "INSERT INTO `domisep`.`room_sensor_association`
(
`Sensor_Id`,
`Room_Id`,
`User_Assigned_Sensor_Minimum_Value`,
`User_Assigned_Sensor_Maximum_Value`,
`Reading`,
`Energy_Consumed`,
`Start_Date`,
`Created_By`,
`Created_On`,
`Modified_By`,
`Modified_On`)
VALUES
(
$stype,
$rname,
$min,
$max,
'',
'',
NOW(),
'neethub',
NOW(),
'neethub',
NOW());";

    
    
	
	if(mysqli_query($db,$statement)){
		echo "inserterd sucessfully to room_sensor_assosciation";  
		
	} else {
		echo "insertion failed - room_sensor_assosciation"; 
	}
		}
	
    ?>