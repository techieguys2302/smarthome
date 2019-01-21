<?php
	include("../../config/config.php");
    session_start();
	
if (isset($_POST['edit'])) {
	$fname=$_POST['fname'];
	$lname=$_POST['lname'];
	$fname=$_POST['fname'];
	$email=$_POST['email'];
	
	
	$role = "Customer";
	
	$statement="Update domisep.users set Last_Name = "."'".$lname."'".", First_Name = "."'".$fname."'".",Email = "."'".$email."'"." where Id = 1;";

if (mysqli_query($db, $statement)) {
	echo "record updated successfully in users table";
	
} else {
    echo "Error: " . $statement . "<br>" . mysqli_error($db);
}
	 }
	 
	 
	 if (isset($_POST['name'])) {
	
	$houseName=$_POST['houseName'];
	$name=$_POST['name'];
	$street=$_POST['street'];
	$city=$_POST['city'];
	$country=$_POST['country'];
	$zipcode=$_POST['zipcode'];
	$apname=$_POST['apname'];
	
	


	
	$stmt="Update domisep.apartment set Name = "."'".$name."'".",House_Name = "."'".$houseName ."'". "Street = "."'".$street."'".",City = "."'".$city."'".",Country = "."'".$country."'".",Zipcode = "."'".$zipcode."'"." where Id = ".$apname.";";
	
		if (mysqli_query($db, $stmt)) {
			echo "record updated successfully in apartment table";
	}
   else {
	  echo "record update failed in apartment table";
	  echo "apartment name is ".$apname;
  }

	 }	 
	 

	
	?>