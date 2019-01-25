
	<?php
	include("../../config/config.php");
    session_start();
	
	 if (isset($_POST['apname'])) {
$apname = $_POST['apname'];
$hname = $_POST['hname'];
$street = $_POST['street'];
$city = $_POST['city'];
$country = $_POST['country'];
$zipcode = $_POST['zipcode'];
$userid = $_SESSION['user'][0]['ID'];
	
	$role = "user";
	
	$statement="INSERT INTO domisep.apartment
(
`Name`,
`House_Name`,
`Street`,
`City`,
`Country`,
`Zipcode`,
`User_Id`,
`Apartment_Role`
)
VALUES
(
'$apname',
'$hname',
'$street',
'$city',
'$country',
'$zipcode',
 $userid,
'primary'
);";




if (mysqli_query($db, $statement)) {
   echo ("/smarthome/site/user/room.php");
} else {
    echo "failed";
}
	 }
	 
	
    ?>
