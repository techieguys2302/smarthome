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
     <title>Add Room</title>
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
     <header class="heading"> Add Room </header>
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
		            <?php
					include("../../config/config.php");
					session_start();
					$sql="SELECT id,name FROM apartment order by name"; 



					echo "<select name= 'apname' id='apname' style= 'width:300px;height:35px;'>"; // list box select command
					echo "<option selected=selected' value='select room name'>select room name</option>";
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
                     <label class="lastname">Room Name </label></div>
				<div class ="col-xs-8">	 
		             <input type="text" name="rname" id="rname" placeholder="Enter the room name" class="form-control last">
					 
                </div>
		     </div>
		 </div>
  
	 
		  <br/>
		  <br/>
		  
		
		  
	
		  
		  
		  <br/>
		  <br/>
     <!-----------For Phone number-------->
	 
         <div class="col-sm-12" style="padding:20px;">
		
		     <div class="col-sm-12">
		         <div  >
				<!-- <input class="btnsubmit btn-warning submit"  name="add_room_submit" id="add_room_submit" type="submit" value=
                            "Add Another Room" onclick=validateRoomFields()>-->
							
							<input class="btnsubmit btn-warning submit"  name="add_sensor_submit" id="add_sensor_submit" type="submit" value="Next" onclick=NextvalidateRoomFields()
                             />
							 
							 <input class="btnsubmit btn-warning submit"  name="add_sensor_submit" id="add_sensor_submit" type="button" value="Cancel" onclick=NextvalidateRoomFields()
                             />
							 </div>
							
							
				 
		   </div>
		 </div>
		 
	 </div>	 
	<!--</form>	--> 		 
		 
</div>

	
</body>
	<script src="../../js/profile/room.js"></script>
</html>

 
	