
	<?php
	include("../../config/config.php");
    session_start();
	
	 if (isset($_POST['apname'])) {
$apname = $_POST['apname'];
$rname = $_POST['rname'];


	$role = "Customer";
	echo "statement is ";
	$statement="INSERT INTO `domisep`.`room`
(
`Name`,
`Apartment_Id`,
`Created_On`
)
VALUES
(
'$rname',
'$apname',
NOW());";




if (mysqli_query($db, $statement)) {
	echo "inserted successfully";
} else {
    echo "Error: " . $statement . "<br>" . mysqli_error($db);
}
	 }
	 
	
    ?>
