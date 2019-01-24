	<?php
	include("../../config/config.php");
    session_start();
	
	 if (isset($_POST['submit'])) {
	$fname=$_POST['fname'];
	
	
	$lname=$_POST['lname'];
	$fname=$_POST['fname'];
	$email=$_POST['email'];
	$password=$_POST['password'];
	$cpassword=$_POST['cpassword'];
	$password=$_POST['password'];
	header('http://localhost/smarthome/index.php');
	$role = "Customer";
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
'$fname',
NOW()
)";




if (mysqli_query($db, $statement)) {
    echo "New record created successfully";
	
	header("Location: http://localhost/smarthome/site/user/apartment.php"); /* Redirect browser */
	exit();
} else {
    echo "Error: " . $statement . "<br>" . mysqli_error($db);
}
	 }
	 
	
    ?>

	 
	