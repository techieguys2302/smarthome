<?php
	include("../../config/config.php");
    session_start();
	
	 if (isset($_POST['apid'])) {
	$fname=$_POST['fname'];
	
	
	$lname=$_POST['lname'];
	$fname=$_POST['fname'];
	$email=$_POST['email'];
	
	$password=$_POST['cpassword'];
	$apid = $_POST['apid'];
	$userid = $_SESSION['user'][0]['ID'];
	
	$role = "Secondary";
	echo "statement is ";
	$statement="INSERT INTO domisep.users
(
Last_Name,
First_Name,
Email,
Password,
Status,
User_Role,
Created_By,
Created_On
)
VALUES
(
'$lname',
'$fname',
'$email',
'$password',
 1,
'$role',
$userid,
NOW()
)";




if (mysqli_query($db, $statement)) {
    echo "New record created successfully";
	$id = mysqli_insert_id($db);
	
	
	$stmt = "INSERT INTO `domisep`.`user_aptmt_association`
(
`aptId`,
`userId`)
VALUES
(
$apid,
$id);";
	if(mysqli_query($db, $stmt)){
		echo "New record created successfully to user_aptmt_association ";
	}
	
} else {
    echo "Error: " . $statement . "<br>" . mysqli_error($db);
}
	 }
	 
	
    ?>