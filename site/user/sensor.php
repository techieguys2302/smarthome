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
<link href="../../css/menu.css" rel="stylesheet" id="bootstrap-css">
<script type="text/javascript">


</script>	

<!Doctype html>
<html>
<head>
     <meta charset="UTF-8">
     <title>Add Sensor - User</title>
     	<meta name="viewport" content="width=device-width, initial-scale=1">
</head>
<body>

<?php
   include("../core/menu.php");
?>

 <div class="container" >
 <!---heading---->
     <header class="heading"> Add Sensor </header>
	 <div class = "space"></div>
	<!---Form starting----> 
	<form method="post" name="">
	<div class="row ">
	
	 <!--- For Name---->
         <div class="col-sm-12">
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
			 <!--- Room name---->
			 <div class="col-sm-12" style="padding-top:10px;">
			   <div class="row" >
			     <div class="col-xs-4">
          	         <label class="firstname">Room Name </label> </div>
		         <div class="col-xs-8">
		            <?php
					include("../../config/config.php");
					echo "<select name= 'rname' id='rname' style= 'width:300px;height:35px;'>"; // list box select command
                    echo "<option selected=selected' value='select room name' id='room_option'>select room name</option>";
					echo "<input type='hidden' id='rooms' />";
					echo "</select>";// Closing of list box
					
					?>
				 </div>
		     </div>
			 </div>
		 
		 
		 
     
		 <div class="col-sm-12" style="padding-top:10px;">
		     <div class="row">
			     <div class="col-xs-4">
          	         <label class="firstname">Sensor Type </label> </div>
		         <div class="col-xs-8">
		            <?php
					include("../../config/config.php");
					//session_start();
					$sql_1="SELECT id,type FROM sensor_type order by type"; 



					echo "<select name= 'sensortype' id='sensortype' style= 'width:300px;height:35px;'>"; // list box select command
					echo "<option selected=selected' value='select sensor type'>select sensor type</option>";
						foreach ($db->query($sql_1) as $row){//Array or records stored in $row
							//echo 'value is : '.$row['name'];
							echo "<option value='$row[id]'>".$row['type']."</option>"; 
							

							/* Option values are added by looping through the array */ 

}

					echo "</select>";// Closing of list box
					
					?>
				 </div>
		     </div>
  </div>
  
      
		 
		 <div class="col-sm-12" style="padding-top:10px;display:none;"id= "mindiv" ">
		     <div class="row">
			     <div class="col-xs-4">
                     <label class="lastname">Min Value </label></div>
				<div class ="col-xs-8">	 
		             <input type="text" name="min" id="min" placeholder="Enter the sensor name" class="form-control last">
					  
                </div>
		     </div>
			 
			 
			 
		 </div>
		 
		 <div class="col-sm-12" style="padding-top:10px;display:none;" id= "maxdiv" >
		     <div class="row">
			     <div class="col-xs-4">
                     <label class="lastname">Max Value </label></div>
				<div class ="col-xs-8">	 
		             <input type="text" name="max" id="max" placeholder="Enter the sensor name" class="form-control last">
					  
                </div>
		     </div>
			 
			 
			 
		 </div>
	 
		  <br/>
		  <br/>
		  
		
		  
	
		  
		  
		  <br/>
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
	<script src="../../js/profile/sensor.js"></script>
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
 
	