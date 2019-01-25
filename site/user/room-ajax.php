
	<?php
	include("../../config/config.php");
    session_start();
	
	 if (isset($_POST['apname'])) {
$apname = $_POST['apname'];
$rname = $_POST['rname'];

	$statement="INSERT INTO `domisep`.`room`(`Name`,`Apartment_Id`)VALUES('".$rname."','".$apname."');";

if (mysqli_query($db, $statement)) {
	echo "/smarthome/site/user/sensor.php";
} else {
    echo "falied";
}
	 }
	 
	
    ?>
