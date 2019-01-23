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
<link href="../../css/edit-apartment.css" rel="stylesheet" id="bootstrap-css">
<script src="../../css/utility.css" rel="stylesheet" id="bootstrap-css"></script>
<!Doctype html>
<html>
<head>
     <meta charset="UTF-8">
     <title>Edit Apartment</title>
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
     <header class="heading"> Edit Apartment </header>
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
	
	
         <div class="col-sm-12" >
		
		     <div class="col-sm-12" style="margin-bottom:20px;">
		         <div  >
				 <input class="btnsubmit btn-warning submit"  id ="edit" name="edit" type="submit" value=
                            "Edit" >
							
							
				 
		   </div>
		 </div>
     
		 
		  <!-- <div class="col-sm-12" style="margin-top:5px;">
             <div class="row">
			     <div class="col-xs-4">
          	         <label class="firstname">Apartment Name </label> </div>
		         <div class="col-xs-8">
		            <?php
					  include("../../config/config.php");
						$sql="SELECT id,name FROM apartment order by name"; 



					echo "<select name= 'apname' id='apname' style= 'width:280px;height:35px;'>"; // list box select command
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
		     </div> -->
		 
		 <div id = "apartment"  style="display:block;">
		
			 <div class="col-sm-12" style="margin-top: 5px;">
		     <div class="row">
			     <div class="col-xs-4">
		             <label class="mail" > Apartment Name </label></div>
			     <div class="col-xs-8"	>	 
			          <input type="text" name="name"  id="name" class="form-control" disabled="disabled">
		         </div>
		     </div>
		 </div>
		 
		 <div class="col-sm-12" style="margin-top: 5px;">
		     <div class="row">
			     <div class="col-xs-4">
		             <label class="mail" > No/Name </label></div>
			     <div class="col-xs-8"	>	 
			          <input type="text" name="houseName"  id="houseName" class="form-control" disabled="disabled">
		         </div>
		     </div>
		 </div>
		 <div class="col-sm-12">
		     <div class="row">
			     <div class="col-xs-4">
		             <label class="mail" >Street </label></div>
			     <div class="col-xs-8"	>	 
			          <input type="text" name="street"  id="street" class="form-control" disabled="disabled">
		         </div>
		     </div>
		 </div>
		 <div class="col-sm-12">
		     <div class="row" >
			     <div class="col-xs-4">
		             <label class="mail" >City </label></div>
			     <div class="col-xs-8"	>	 
			          <input type="text" name="city"  id="city" class="form-control" disabled="disabled">
		         </div>
		     </div>
		 </div>
		 <div class="col-sm-12">
		     <div class="row">
			     <div class="col-xs-4">
		             <label class="mail" >Country </label></div>
			     <div class="col-xs-8"	>	 
			          <input type="text" name="country"  id="country" class="form-control" disabled="disabled">
		         </div>
		     </div>
		 </div>
		 <div class="col-sm-12">
		     <div class="row">
			     <div class="col-xs-4">
		             <label class="mail" >Zipcode </label></div>
			     <div class="col-xs-8"	>	 
			          <input type="text" name="zipcode"  id="zipcode" class="form-control" disabled="disabled">
		         </div>
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
	 
         <div class="col-sm-12" style="margin-top:15px;">
		
		     <div class="col-sm-12" >
		         <div id ="edit_btn_div" >
				 <input class="btnsubmit btn-warning submit"  id ="edit_submit" name="edit_submit" type="button" value="Submit" />
							
							
				 
		   </div>
		 </div>
		 
	 </div>	 
	</form>	 		 
		
</div>
</div>
</div>
<br/>
<br/>
	<?php
	include("../core/footer.php")
?>
</body>
	<script src="../../js/profile/edit-apartment.js"></script>
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
	