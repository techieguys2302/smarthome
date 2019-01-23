<?php
	include("../core/header.php")
?>
<!DOCTYPE html>
<html>
<head>
    <title></title>
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
		  <br/>
     
		     <div class="col-sm-12">
				<div class="row">
					 <div class="button col-xs-8">
						<div class="btn btn-warning submit" id="login" ><button class="login-btn">Login</button></div>
						<div class="btn btn-warning reset"><button id="reset" class="reset-btn">Reset</button></div>
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