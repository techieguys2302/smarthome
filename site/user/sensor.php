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
     <title>Add Sensor</title>
     	<meta name="viewport" content="width=device-width, initial-scale=1">
</head>
<body>
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
					
					session_start();
					



					echo "<select name= 'rname' id='rname' style= 'width:300px;height:35px;'>"; // list box select command
                    echo "<option selected=selected' value='select room name'>select room name</option>";
						foreach ($_SESSION['rooms'] as $row){//Array or records stored in $row
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
          	         <label class="firstname">Sensor Type </label> </div>
		         <div class="col-xs-8">
		            <?php
					include("../../config/config.php");
					//session_start();
					$sql_1="SELECT id,name FROM sensor order by name"; 



					echo "<select name= 'sensortype' id='sensortype' style= 'width:300px;height:35px;'>"; // list box select command
					echo "<option selected=selected' value='select sensor type'>select sensor type</option>";
						foreach ($db->query($sql_1) as $row){//Array or records stored in $row
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
                     <label class="lastname">Sensor Name </label></div>
				<div class ="col-xs-8">	 
		             <input type="text" name="sname" id="sname" placeholder="Enter the sensor name" class="form-control last">
					  
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
				 <input class="btnsubmit btn-warning submit"  name="add_sensor_submit" id="add_sensor_submit" type="submit" value=
                            "Add Another Sensor" >
							
							
							<input class="btnsubmit btn-warning submit"  name="finish_submit" id="finish_submit" type="submit" value=
                            "Finish" >
							
							
				 
		   </div>
		 </div>
		 
	 </div>	 
	</form>	 		 
		 
</div>

	
</body>
	<script src="../../js/profile/sensor.js"></script>
</html>

 
	