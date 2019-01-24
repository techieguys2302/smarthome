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
		
		<link href="../../css/menu.css" rel="stylesheet" id="bootstrap-css">
</head>
<body>

<?php
   include("../core/menu.php");
?>
<br/>
<div class="body">
 <div class="container" >
 <!---heading---->
     <header class="heading"> User Registration </header>
	 <div class = "space"></div>
	<!---Form starting----> 
	<form method="post" name="" action="/smarthome/site/unauthorized/registration-ajax.php">
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
							
				 
		   </div>
		 </div>
		 
	 </div>	 
	 </div>
	</form>	 		 
		 

</div>
</div>
<?php
  include("../core/footer.php");
?>
</body>
	<script src="../../js/profile/registration.js"></script>
</html>
	 
	