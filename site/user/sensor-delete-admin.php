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
     <title>Add Sensor</title>
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
     <header class="heading"> Admin - Add Sensor </header>
	 <div class = "space"></div>
	<!---Form starting----> 
	<form method="post" name=""  >
	<div class="row ">
	
	 <!--- For Name---->
        
			 <!--- Room name---->
			
		 
		 
		 
     
		 <div class="col-sm-12" style="padding-top:10px;">
		     <div class="row">
			     <div class="col-xs-4">
          	         <label class="firstname">Sensor Name </label> </div>
		         <div class="col-xs-8">
		            <?php
					include("../../config/config.php");
					//session_start();
					$sql_1="SELECT id,name FROM sensor order by name"; 



					echo "<select name= 'sname' id='sname' style= 'width:300px;height:35px;'>"; // list box select command
					echo "<option selected=selected' value=''>select sensor </option>";
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
  
		 
	
			 
			 
		 </div>
		 
	
	 
		  <br/>
		  <br/>
		  
		
		  
	
		  
		  
		  <br/>
		  <br/>
     <!-----------For Phone number-------->
	 
         <div class="col-sm-12" style="padding-top:20px;">
		
		     <div class="col-sm-12">
		         <div  >
				 <input class="btnsubmit btn-warning submit"  name="delete_sensor_submit" id="delete_sensor_submit" type="submit" value=
                            "Delete Sensor" >
							
							
							
							
							
				 
		   </div>
		 </div>
		 
	 </div>	 
	</form>	 		 
		 
</div>

	</body>
	<script src="../../js/profile/sensor-delete-admin.js"></script>
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
 