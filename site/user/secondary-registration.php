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
     <title>Registration Form</title>
     	<meta name="viewport" content="width=device-width, initial-scale=1">
</head>
<body>
 <div class="container" >
 <!---heading---->
     <header class="heading"> Add Secondary User </header>
	 <div class = "space"></div>
	<!---Form starting----> 
	<form method="post" name="" action="/smarthome/site/user/apartment.php">
	<div class="row ">
	<div class="col-sm-12">
             <div class="row">
			     <div class="col-xs-12">
          	         <label class="error hidden" id="error" style="color:red;"></label> </div>
		      </div>
		 </div>
	
	
	 <!--- For Name---->
	 
	    <div class="col-sm-12" style = "padding-bottom:5px;">
             <div class="row">
			     <div class="col-xs-4">
          	         <label class="firstname">Apartment Name </label> </div>
		         <div class="col-xs-8">
		            <?php
					  include("../../config/config.php");
						$sql="SELECT id,name FROM apartment order by name"; 



					echo "<select name= 'apname' id='apname' style= 'width:300px;height:35px;'>"; // list box select command
					echo "<option selected=selected' value='select apartment name'>select apartment name</option>";
						foreach ($db->query($sql) as $row){//Array or records stored in $row
							//echo 'value is : '.$row['name'];
							echo "<option value='$row[id]'>".$row['name']."</option>"; 
							

							/* Option values are added by looping through the array */ 

}

					echo "</select>";// Closing of list box
					
					?>
					</div>
				 </div>
		     </div>
	 
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
				 <input class="btnsubmit btn-warning submit"  id ="submit" name="submit" type="submit" value=
                            "Submit" >
							
				 
		   </div>
		 </div>
		 
	 </div>	 
	</form>	 		 
		 
</div>

	

</body>
	<script src="../../js/profile/registration-secondary.js"></script>
</html>
	 
	