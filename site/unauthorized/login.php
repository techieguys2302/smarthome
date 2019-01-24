<?php
	include("../core/header.php")
?>
<!DOCTYPE html>
<html>
<head>
    <title>Smarthome Login</title>
	<!------ Include the above in your HEAD tag ---------->
<link href="../../css/login.css" rel="stylesheet" id="bootstrap-css">
<link href="../../css/menu.css" rel="stylesheet" id="bootstrap-css"> 
</head>
<body>

<?php
   include("../core/menu.php");
?>
   <br/>
	<div class="container">
 <!---heading---->
     <header class="heading"> Login </header><hr></hr>

	<div class="row ">
	
	 <div class="col-sm-12">
             <div class="row">
			     <div class="col-xs-12">
          	         <label class="error hidden" id="error"></label> </div>
		      </div>
		 </div>
	<br/>
	<br/>
	 <!--- For Email---->
         <div class="col-sm-12">
             <div class="row">
			     <div class="col-xs-4">
          	         <label class="email">Email</label> </div>
		         <div class="col-xs-8">
		             <input type="text" name="email" id="email" placeholder="Enter your Email" class="form-control ">
             </div>
		      </div>
		 </div>
		 
		 
         <div class="col-sm-12">
		     <div class="row">
			     <div class="col-xs-4">
                     <label class="password">Password</label></div>
				<div class ="col-xs-8">	 
		             <input type="password" name="password" id="password" placeholder="Enter your Password" class="form-control last">
                </div>
		     </div>
		 </div>
     
		  <br/>
		 
		 
		  
		  <div class="col-sm-12">
		  
					<a id="forgotPassword" class="forgot-password" href="/smarthome/site/unauthorized/forgot-password.php">Forgot password?</a>
		  </div>
     
		     <div class="col-sm-12">
				<div class="row">
					 <div class="button col-xs-8">
						<button class="login-btn" id="login">&nbsp;Login&nbsp;</button>
						<button id="reset" class="reset-btn">&nbsp;Reset&nbsp;</button>
					 </div>
				 </div>
				 
		   </div>
		 </div>
	 </div>	 
		 	<!-- </form> -->
		 

<?php
	include("../core/footer.php")
?>
<script src="../../js/profile/login.js">

</script>
	
    
</body>
</html>