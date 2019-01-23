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
<!DOCTYPE html>
<html>
<head>
    <title>Smarthome Dashborad</title>
	<link href="../../css/dashboard.css" rel="stylesheet" id="bootstrap-css"> 
	<link href="../../css/menu.css" rel="stylesheet" id="bootstrap-css">	
</head>
<body>

<?php
   include("../core/menu.php");
?>
<?php
  include("../core/dropdownmenu.php");
  
?>
<br/><br/><br/>
	 <div class="container-body">
 <!---heading---->
     <h1 class="heading dashboard"> DASHBOARD</h1><hr style="color:grey;"></hr>
	 
	<!---Form starting----> 
	<!--<br/>-->
	<!-- <form method="post" name=""> -->
	
		<?php
		//$user = json_decode($_SESSION['user'], true);
			 
				include("../../config/config.php");
			$apartment_query = mysqli_query($db,"SELECT * FROM Apartment where User_Id = '" .$_SESSION['user'][0]['ID']. "'");
			   if (mysqli_num_rows($apartment_query) != 0){

				$sth = mysqli_query($db,"SELECT * FROM Apartment where User_Id = '" .$_SESSION['user'][0]['ID']. "'");
				$apartements = array();
				while($r = mysqli_fetch_assoc($sth)) {
					$apartements[] = $r;
				
				
			 
				
				
			?>
			<div class="aparment-row centers" >
			 <!--- For Apartment---->
				 
					 <div>
						 <div class="ap-row">
							 <h4 class="apartment-id"><label class="apartment-name" id="apartmentName"><?php echo $r['Name']?></label><a href="javascript:void(0)" class="del-btn" id="deleApart<?php echo $r['ID']?>">Delete</a/><a href="javascript:void(0)" class="edi-btn" id="editApart<?php echo $r['ID']?>"></a></h4>
						</div>
						 
					 </div>
				 
			<?php
			
				$room_query = mysqli_query($db,"SELECT * FROM Room where Apartment_Id = '" .$r['ID']. "'");
			   if (mysqli_num_rows($room_query) != 0){

				$room_sth = mysqli_query($db,"SELECT * FROM Room where Apartment_Id = '" .$r['ID']. "'");
				$rooms = array();
				while($room = mysqli_fetch_assoc($room_sth)) {
					$rooms[] = $room;
					echo "room";
				
				
			?>
				 
				 
				<div class="rooms-row centers">
					 <div class="room-row">
							<h4 class="room-id"><label class="room-name" id="roomName">Room: <?php echo $room['Name'];?></label>
							  <a href="javascript:void(0)" class="del-btn" id="deleRoom<?php echo $room['ID']?>">Delete</a/><a href="javascript:void(0)" class="edi-btn" id="editRoom<?php echo $room['ID']?>"></a></h4>
					 </div>
				 <hr/>
				<?php
								
							$sensor_query = mysqli_query($db,"
							
															SELECT RSA.*,S.`NAME`,S.Sensor_Type_Id,S.Minimum_Value,S.Maximum_Value,ST.`Type`
															FROM SENSOR AS S INNER JOIN  Room_Sensor_Association RSA ON S.ID = RSA.Sensor_Id
															INNER JOIN Room as R ON R.ID = RSA.Room_ID
															INNER JOIN Apartment as A ON A.ID = R.Apartment_ID
															INNER JOIN SENSOR_TYPE as ST ON ST.ID = S.Sensor_Type_Id
															INNER JOIN USERS as U ON U.ID = A.User_Id 
															where  RSA.Room_Id = '" .$room['ID']. "' and Apartment_Id = '" .$r['ID']. "' and U.ID ='" .$_SESSION['user'][0]['ID']. "'");
															
						   if (mysqli_num_rows($sensor_query) != 0){

									$sensor_sth = mysqli_query($db,"
							
															SELECT RSA.*,S.`NAME`,S.Sensor_Type_Id,S.Minimum_Value,S.Maximum_Value,ST.`Type`
															FROM SENSOR AS S INNER JOIN  Room_Sensor_Association RSA ON S.ID = RSA.Sensor_Id
															INNER JOIN Room as R ON R.ID = RSA.Room_ID
															INNER JOIN Apartment as A ON A.ID = R.Apartment_ID
															INNER JOIN SENSOR_TYPE as ST ON ST.ID = S.Sensor_Type_Id
															INNER JOIN USERS as U ON U.ID = A.User_Id 
															where  RSA.Room_Id = '" .$room['ID']. "' and Apartment_Id = '" .$r['ID']. "' and U.ID ='" .$_SESSION['user'][0]['ID']. "'");
							$sensors = array();
							
				
				?>
				 
				 
				 <div  class="sensors-row centers">
						 <div class="sensor-row">
							 <div >
								  <label class="sensor-names" id="sensorName">Sensors</label>
							 </div>
							 
						 </div>
						 <div class="row centers">
						 <?php
								
								$index=0;
								while($sensor = mysqli_fetch_assoc($sensor_sth)) {
								$sensors = $sensor;
						 ?>
						
							
							
							<div class="column" id="sensor<?php echo $index;?>">
								<div class="sensor-label">
									<label class="sensor-name"><?php echo $sensor['NAME']; ?></label>
									<a href="javascript:void(0)" class="delete-btns" id="deleSensor<?php echo $sensor['ID']?>">Delete</a/><a href="javascript:void(0)" class="edit-btns" id="editSensor<?php echo $sensor['ID']?>"></a>
								</div>
							<hr class="divider"/>
							<?php 
								if($sensor['Type'] == 'Bulb' || $sensor['Type'] == 'bulb'){
							?>
								<img class="img" src="../../images/bulb1.png" />
							<?php 
								} else if($sensor['Type'] == 'Heater' || $sensor['Type'] == 'heater'){
							?>
								<img class="img" src="../../images/heater.png" />
								
							<?php 
								} else if($sensor['Type'] == 'Humidity' || $sensor['Type'] == 'humidity'){
							?>
								<img class="img" src="../../images/humidity.png" />
							<?php 
								} else if($sensor['Type'] == 'Temperature' || $sensor['Type'] == 'temperature'){
							?>
								<img class="img" src="../../images/temperature.png" />
							<?php 
								} else if($sensor['Type'] == 'Movement' || $sensor['Type'] == 'movement'){
							?>
								<img class="img" src="../../images/movement.png" />
							<?php 
								} else if($sensor['Type'] == 'Gas' || $sensor['Type'] == 'gas'){
							?>
								<img class="img" src="../../images/gas.png" />
							<?php 
								} else if($sensor['Type'] == 'Water' || $sensor['Type'] == 'water'){
							?>
								<img class="img" src="../../images/gas.png" />
							<?php 
								} else if($sensor['Type'] == 'Camera' || $sensor['Type'] == 'camera'){
							?>
								<img class="img" src="../../images/camera.png" />
							<?php
								}
							?>
							
								<div class="sensor-toggle">
									<input type="hidden" class="sensorId" value="<?php echo $sensor['ID'];?>" />
									<button class="sensor-on" id="sensorOn" style="<?php if($sensor['Status'] == 1) { echo 'background-color:#0095ff; background-image: linear-gradient(to bottom, #0095ff, #2079b0);';} else echo 'background-color:white'; ?>">ON</button>
									<button class="sensor-off" id="sensorOff" style="<?php if($sensor['Status'] == 0) { echo 'background-color:#0095ff;background-image: linear-gradient(to bottom, #0095ff, #2079b0);';} else echo 'background-color:white'; ?>">OFF</button>&nbsp;
								</div>
							</div>
					 
					  <?php
								
							$index = $index + 1;
						}
						?>
						</div>
					</div>
						<br/>
						<br/>
						<?php
						
					}else{
					 ?>
					 
					  <div  class="sensors-row centers">
								<div class="sensor-row">
								
										 <div >
												<label class="sensor-names" id="sensorName">Sensors</label> 
										</div>
											 <div>
												 <label class="error" id="error">No sensor assigned to apartment!!</label> 
											</div>
												
										
								
								</div>
						</div>
						<br/>
						<br/>
					 <?php

						}
					 ?>
						</div>
						
					<?php
						}
					  }else{
					?>
					
							<div class="rooms-row centers">
								<div>
									 <div>
										 <label class="room" id="room">Room</label> 
									 </div>
										<div>
												<label class="error" id="error">No room assigned to apartment!!</label> 
										</div>
								</div>
							</div>
							
					<?php
					}
					?>
				
				
				 
				 
				  <br/>
				  <br/>
		
				</div>
			<?php
						}
					}else{
			?>
			<div class="aparment-row centers" >
									<!--- For Apartment---->
				 
				 <div>
					 <div class="ap-row">
						 <label class="apartment" id="apartment">Apartment</label>
					</div>
					 
					 <div>
							 <label class="error" id="error">No apartment assigned to you!!</label> 
					 </div>
				 </div>
			</div>
			<br/>
			<br/>
			 <?php
			  }
			 ?>
					
			 	 
				
			
		 

<script src="../../js/profile/dashboard-user.js">

</script>
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