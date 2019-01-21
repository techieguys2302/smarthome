<?php
//echo "here==>";
	 session_start();
	  $now = time(); // Checking the time now when home page starts.
	   include("../core/header.php");
	if( isset($_SESSION['user']) && ! ($now > $_SESSION['expire']))
	{
		 //session_start();

 ?>

<link href="../../bootstrap/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="../../bootstrap/js/bootstrap.min.js"></script>
<script src="../../js/jquery/jquery.min.js"></script>

<script src="../../js/profile/registration.js"></script>

<!------ Include the above in your HEAD tag ---------->
<link href="../../css/registration.css" rel="stylesheet" id="bootstrap-css">
<script src="../../css/utility.css" rel="stylesheet" id="bootstrap-css"></script>
<!Doctype html>
<html>
<head>
     <meta charset="UTF-8">
     <title>Profile Management</title>
     	<meta name="viewport" content="width=device-width, initial-scale=1">
</head>
<body>
 <div class="container" >
 <!---heading---->
     <header class="heading"> Profile Management </header>
	 <div class = "space"></div>
	<!---Form starting----> 
	<form method="post" name="" >
	<div class="row ">
	<div class="col-sm-12">
             <div class="row">
			     <div class="col-xs-12">
          	         <label class="error hidden" id="error" style="color:red;"></label> </div>
		      </div>
		 </div>
	
	
         <div class="col-sm-12" style="margin-bottom:20px;">
		
		     <div class="col-sm-12">
		         <div  >
				 <input class="btnsubmit btn-warning submit"  id ="edit" name="edit" type="submit" value=
                            "Edit" >
							
							<input class="btnsubmit btn-warning submit" id ="change_pwd_submit" name="change_pwd_submit" type="button" value= "Change password"></div>
				 
		   </div>
		 </div>
	 <!--- For Name---->
         <div class="col-sm-12">
             <div class="row">
			     <div class="col-xs-4">
          	         <label class="firstname">First Name </label> </div>
		         <div class="col-xs-8">
		             <input type="text" name="fname" id="fname"  class="form-control" disabled="disabled">
             </div>
		      </div>
		 </div>
		 
		 
         <div class="col-sm-12">
		     <div class="row">
			     <div class="col-xs-4">
                     <label class="lastname">Last Name </label></div>
				<div class ="col-xs-8">	 
		             <input type="text" name="lname" id="lname" class="form-control last" disabled="disabled">
                </div>
		     </div>
		 </div>
     <!-----For email---->
		 <div class="col-sm-12">
		     <div class="row">
			     <div class="col-xs-4">
		             <label class="mail" >Email </label></div>
			     <div class="col-xs-8"	>	 
			          <input type="email" name="email"  id="email" class="form-control" disabled="disabled">
		         </div>
		     </div>
		 </div>
		 
	
		 

	 <!-----For Password and confirm password---->
    
		  <br/>
		  <br/>
		  
		  <!-----For Password and confirm password---->
		   
          
		  <br/>
		  <br/>
     <!-----------For Phone number-------->
	 
         <div class="col-sm-12" style="margin-top:10px;">
		
		     <div class="col-sm-12" >
		         <div id ="edit_btn_div" >
				 <input class="btnsubmit btn-warning submit"  id ="edit_submit" name="edit_submit" type="button" value="Submit" />
							
							
				 
		   </div>
		 </div>
		 
	 </div>	 
	</form>	 		 
		 
</div>
</div>
	
</body>
	<script src="../../js/profile/user-profile.js"></script>
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
 	 
	