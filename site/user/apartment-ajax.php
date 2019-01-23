
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
	$role = "Customer";
	
	$statement="INSERT INTO domisep.apartment
(
`Name`,
`House_Name`,
`Street`,
`City`,
`Country`,
`Zipcode`,
`User_Id`,
`Apartment_Role`,
`Status`,
`Number_Of_Rooms`,
`Number_Of_People`,
`Created_By`,
`Created_On`,
`Modified_By`,
`Modified_On`)
VALUES
(
'$apname',
'$hname',
'$street',
'$city',
'$country',
'$zipcode',
1,
'Primary user',
1,
4,
3,
'neethub',
NOW(),
'neethub',
NOW()
)";




if (mysqli_query($db, $statement)) {
   echo "";
} else {
    echo "Error: " . $statement . "<br>" . mysqli_error($db);
}
	 }
	 
	
    ?>
