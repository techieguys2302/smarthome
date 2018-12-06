<?php
//echo "here==>";
	 session_start();
	  $now = time(); // Checking the time now when home page starts.
	   include("../core/header.php");
	if( isset($_SESSION['user']) && ! ($now > $_SESSION['expire']))
	{
		 //session_start();

 ?>
<!DOCTYPE html>
<html>
<head>
    <title>Dashborad</title>
	<link href="../../css/dashboard.css" rel="stylesheet" id="bootstrap-css"> 
</head>
<body>

	 <div class="container-body">
 <!---heading---->
     <h1 class="heading dashboard"> Dashboard </h1><hr style="color:grey;"></hr>
	<!---Form starting----> 
	<!--<br/>-->
	<!-- <form method="post" name=""> -->
	<div class="main-row">
	
	 <div class="col-sm-12">
             <div class="row">
			     <div class="col-xs-12">
          	         <label class="error hidden" id="error"></label> 
				</div>
		     </div>
	 </div>
	 </div>
	<div class="aparment-row center" >
	 <!--- For Apartment---->
         
             <div>
			     <div class="ap-row">
          	         <h4 class="apartment-id"><label class="apartment" id="apartment">Apartment</label> <label class="apartment-name" id="apartmentName">Name</label><button class="delete-btn">Delete</button><button id="edit" class="edit-btn">Edit</button></h4>
					 </div>
					 
				 
		         
             </div>
		 
	
		 
		 
		<div class="rooms-row center">
             <div class="room-row">
			     <div>
          	         <label class="apartment" id="apartment">Room</label> <label class="apartment-name" id="apartmentName">Name</label>
					 <button class="edit-btn">Edit</button><button id="delete" class="delete-btn">Delete</button>
				 </div>
		        
             </div>
		 
		 
		 
		 <div  class="sensors-row center">
             <div class="sensor-row">
			     <div >
          	         <label class="apartment" id="apartment">Sensor</label> <label class="apartment-name" id="apartmentName">Name</label>
				 </div>
		         
             </div>
			 </div>
		 </div>
		 
		  <br/>
		  <br/>
    
		     <div class="col-sm-12">
				<div class="row">
					 <div class="button col-xs-8">
						
					 </div>
				 </div>
				 
		   </div>

	 </div>	 
		 	<!-- </form> -->
		 
</div>

</body>
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