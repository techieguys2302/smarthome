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

<!------ Include the above in your HEAD tag ---------->
<link href="../../css/registration.css" rel="stylesheet" id="bootstrap-css">
<script type="text/javascript">


</script>	

<!Doctype html>
<html>
<head>
     <meta charset="UTF-8">
     <title>Delete Secondary User</title>
     	<meta name="viewport" content="width=device-width, initial-scale=1">
</head>
<body>
 <div class="container" >
 <!---heading---->
     <header class="heading"> Delete User </header>
	 <div class = "space"></div>
	<!---Form starting----> 
	<form method="post" name="">
	<div class="row ">
	
	 <!--- For Name---->
         <div class="col-sm-12">
             <div class="row">
			     <div class="col-xs-4">
          	         <label class="firstname">Select Apartment </label> </div>
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
			 
			 
		 <div class="col-sm-12" style="padding-top:10px;">
		     <div class="row">
			     <div class="col-xs-4">
          	         <label class="firstname">User Id </label> </div>
		         <div class="col-xs-8">
		            <?php
					include("../../config/config.php");
					//session_start();
					



					echo "<select name= 'userid' id='userid' style= 'width:300px;height:35px;'>"; // list box select command
					echo "<option selected=selected' value='select user '>select user </option>";
						

					echo "</select>";// Closing of list box
					
					?>
				 </div>
		     </div>
  </div>
			 
	 
	
		  <br/>
     <!-----------For Phone number-------->
	 
         <div class="col-sm-12" style="padding-top:20px;">
		
		     <div class="col-sm-12">
		         <div  >
				 		
							
							<input class="btnsubmit btn-warning submit"  name="finish_submit" id="finish_submit" type="submit" value=
                            "Submit" >
							
							
				 
		   </div>
		 </div>
		 
	 </div>	 
	</form>	 		 
		 
</div>

	
</body>
	<script src="../../js/profile/delete-secondary-user.js"></script>
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
	