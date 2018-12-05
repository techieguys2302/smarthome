
	<?php
	include("config.php");
    session_start();
	
	 if (isset($_POST['apname'])) {
$apname = $_POST['apname'];
$rname = $_POST['rname'];

	header('http://localhost/smarthome/index.php');
	$role = "user";
	echo "statement is ";
	$statement="INSERT INTO `domisep`.`room`
(
`Name`,
`Apartment_Id`,
`Created_By`,
`Created_On`,
`Modified_By`,
`Modified_On`)
VALUES
(
'$rname',
'$apname',
'neethub',
NOW(),
'neethub',
NOW());";
echo $statement;



if (mysqli_query($db, $statement)) {
   echo ("/smarthome/sensor.php");
} else {
    echo "Error: " . $statement . "<br>" . mysqli_error($db);
}
	 }
	 
	
    ?>
