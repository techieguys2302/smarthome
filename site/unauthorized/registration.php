<link href="../../bootstrap/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="../../bootstrap/js/bootstrap.min.js"></script>
<script src="../../js/jquery/jquery.min.js"></script>
<script src="../../js/profile/registration.js"></script>
<!------ Include the above in your HEAD tag ---------->
<link href="../../css/registration.css" rel="stylesheet" id="bootstrap-css">
<!Doctype html>
<html>
<head>
     <meta charset="UTF-8">
     <title>Registration Form</title>
     	<meta name="viewport" content="width=device-width, initial-scale=1">
</head>
<body>
 <div class="container" >
 <!---heading---->
     <header class="heading"> User Registration </header>
	 <div class = "space"></div>
	<!---Form starting----> 
	<form method="post" name="" action="/smarthome/site/user/apartment.php">
	<div class="row ">
	
	 <!--- For Name---->
         <div class="col-sm-12">
             <div class="row">
			     <div class="col-xs-4">
          	         <label class="firstname">First Name </label> </div>
		         <div class="col-xs-8">
		             <input type="text" name="fname" id="fname" placeholder="Enter your First Name" class="form-control ">
             </div>
		      </div>
		 </div>
		 
		 
         <div class="col-sm-12">
		     <div class="row">
			     <div class="col-xs-4">
                     <label class="lastname">Last Name </label></div>
				<div class ="col-xs-8">	 
		             <input type="text" name="lname" id="lname" placeholder="Enter your Last Name" class="form-control last">
                </div>
		     </div>
		 </div>
     <!-----For email---->
		 <div class="col-sm-12">
		     <div class="row">
			     <div class="col-xs-4">
		             <label class="mail" >Email </label></div>
			     <div class="col-xs-8"	>	 
			          <input type="email" name="email"  id="email"placeholder="Enter your email" class="form-control" >
		         </div>
		     </div>
		 </div>
	 <!-----For Password and confirm password---->
          <div class="col-sm-12">
		         <div class="row">
				     <div class="col-xs-4">
		 	              <label class="pass">Password </label></div>
				  <div class="col-xs-8">
			             <input type="password" name="password" id="password" placeholder="Enter your Password" class="form-control">
				 </div>
          </div>
		  </div>
		  <br/>
		  <br/>
		  
		  <!-----For Password and confirm password---->
		   
            <div class="col-sm-12 col-sm-exr" > 
		         <div class="row">
				     <div class="col-xs-4">
		 	              <label class="pass">Confirm Password &nbsp</label></div>
				  <div class="col-xs-8">
			             <input type="password" name="cpassword" id="cpassword" placeholder="Confirm your Password" class="form-control">
				 </div>
          </div> 
		  </div>
		  <br/>
		  <br/>
     <!-----------For Phone number-------->
	 
         <div class="col-sm-12">
		
		     <div class="col-sm-12">
		         <div  >
				 <input class="btnsubmit btn-warning submit"  name="submit" type="submit" value=
                            "Submit" onclick=validateFields()>
							<input class="btnsubmit btn-warning submit"  name="cancel" type="button" value=
                            "Cancel"></div>
				 
		   </div>
		 </div>
		 
	 </div>	 
	</form>	 		 
		 
</div>

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
	$role = "user";
	echo "statement is ";
	$statement="INSERT INTO domisep.users
(
Last_Name,
First_Name,
Email,
Password,
Status,
User_Role
)
VALUES
(
'$lname',
'$fname',
'$email',
'$password',
 1,
'$role'
)";
echo $statement;



if (mysqli_query($db, $statement)) {
    echo "New record created successfully";
} else {
    echo "Error: " . $statement . "<br>" . mysqli_error($db);
}
	 }
	 
	
    ?>

</body>
	<script src="../../js/profile/registration.js"></script>
</html>
	 
	