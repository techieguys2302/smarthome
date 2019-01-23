<?php
//echo "here==>";
	 session_start();
	  $now = time(); // Checking the time now when home page starts.
	   include("../core/header.php");
	if( isset($_SESSION['user']) && ! ($now > $_SESSION['expire']))
	{
		 //session_start();
		 $_SESSION['expire'] = time() + (30 * 60);

 ?>
<link href="../../bootstrap/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="../../bootstrap/js/bootstrap.min.js"></script>
<script src="../../js/jquery/jquery.min.js"></script>

<!------ Include the above in your HEAD tag ---------->
<link href="../../css/apartment.css" rel="stylesheet" id="bootstrap-css">
<link href="../../css/menu.css" rel="stylesheet" id="bootstrap-css">
<!Doctype html>
<html>
<head>
     <meta charset="UTF-8">
     <title>Add Apartment</title>
     	<meta name="viewport" content="width=device-width, initial-scale=1">
</head>
<body>
<?php
   include("../core/loginmenu.php");
?>
<?php
  include("../core/dropdownmenu.php");
  
?>

 <div class="container" >
 <!---heading---->
 
<br/><br/>
     <header class="heading"> Add Apartment </header>
	 <div class = "space"></div>
	<!---Form starting----> 
	<!--<form method="post" name="" >-->
	<div class="row ">
	
	 <!--- For Name---->
         <div class="col-sm-12">
             <div class="row">
			     <div class="col-xs-4">
          	         <label class="firstname">Apartment Name </label> </div>
		         <div class="col-xs-8">
		             <input type="text" name="apname" id="apname" placeholder="Enter the Apartment Name" class="form-control ">
             </div>
		      </div>
		 </div>
		 
		 
         <div class="col-sm-12">
		     <div class="row">
			     <div class="col-xs-4">
                     <label class="lastname">No/Name </label></div>
				<div class ="col-xs-8">	 
		             <input type="text" name="hname" id="hname" placeholder="Enter the house number/name" class="form-control last">
                </div>
		     </div>
		 </div>
     <!-----For email---->
		 <div class="col-sm-12">
		     <div class="row">
			     <div class="col-xs-4">
		             <label class="mail" >Street </label></div>
			     <div class="col-xs-8"	>	 
			          <input type="text" name="street"  id="street" placeholder="Enter the street" class="form-control" >
		         </div>
		     </div>
		 </div>
	 <!-----For Password and confirm password---->
          <div class="col-sm-12">
		         <div class="row">
				     <div class="col-xs-4">
		 	              <label class="pass">Area </label></div>
				  <div class="col-xs-8">
			             <input type="text" name="area" id="area" placeholder="Please enter the area" class="form-control">
				 </div>
          </div>
		  </div>
		  <br/>
		  <br/>
		  
		  <!-----For Password and confirm password---->
		   
            <div class="col-sm-12 col-sm-exr" > 
		         <div class="row">
				     <div class="col-xs-4">
		 	              <label class="pass">City &nbsp</label></div>
				  <div class="col-xs-8">
			             <input type="text" name="city" id="city" placeholder="Please enter city" class="form-control">
				 </div>
          </div> 
		  </div>
		  
		   <div class="col-sm-12 col-sm-exr" > 
		         <div class="row">
				     <div class="col-xs-4">
		 	              <label class="pass">Country</label></div>
				  <div class="col-xs-8">
			             <input type="text" name="country" id="country" placeholder="Please enter country" class="form-control">
				 </div>
          </div> 
		  </div>
		  
		   <div class="col-sm-12 col-sm-exr" > 
		         <div class="row">
				     <div class="col-xs-4">
		 	              <label class="pass">Zipcode &nbsp</label></div>
				  <div class="col-xs-8">
			             <input type="text" name="zipcode" id="zipcode" placeholder="Please enter zipcode" class="form-control">
				 </div>
          </div> 
		  </div>
		  
		  
		  <br/>
		  <br/>
     <!-----------For Phone number-------->
	 
         <div class="col-sm-12" style="padding-top:45px;">
		
		     <div class="col-sm-12">
		         <div  >
				 <input class="btnsubmit btn-warning submit" id="apartment_submit" name="apartment_submit" type="submit" value=
                            "Next" onclick="validateApartmentFields()"/>
							
				<input class="btnsubmit btn-warning submit" id="apartment_submit" name="apartment_submit" type="button" value=
                            "Cancel" onclick="cancel()"/>
							
							
							
							
				 
		   </div>
		 </div>
		 
	 </div>	 
	<!--</form>-->	 		 
		 
</div>
</div>
<br/><br/>
<?php
	include("../core/footer.php")
?>
</body>




	<?php
	include("../../config/config.php");
   // session_start();
	
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
`neethub`,
`Primary user`,
1,
`4`,
`3`,
`neethub`,
date(),
`neethub`,
date()
)";
//echo $statement;



if (mysqli_query($db, $statement)) {
    //echo "New record created successfully";
} else {
    //echo "Error: " . $statement . "<br>" . mysqli_error($db);
}
	 }
	 
	
    ?>


	<script src="../../js/profile/apartment.js"></script>
</html>
<?php
	}else{
		session_destroy();
		//die();
		//echo "<script language='javascript' type='text/javascript'> location.href='/smarthome/site/unauthorized/login.php' </script>";   
		 header("Location: http://localhost/smarthome/site/unauthorized/login.php");
		 exit();
	}

?> 
	