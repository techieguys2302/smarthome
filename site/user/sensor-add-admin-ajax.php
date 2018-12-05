<?php

	if (isset($_POST['sname'])){
		
	
    include("../../config/config.php");
    session_start();
    $sname=$_POST['sname'];
	$stype=$_POST['sensortype'];
	$max=$_POST['max'];
	$min=$_POST['min'];
	echo "values... ". $sname." ".$stype." ".$min;
	$statement= "INSERT INTO `domisep`.`sensor`
(
`Name`,
`Sensor_Type_Id`,
`Minimum_Value`,
`Maximum_Value`,
`Created_By`,
`Created_On`,
`Modified_By`,
`Modified_On`)
VALUES
(
'$sname',
'$stype',
'$min',
'$max',
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