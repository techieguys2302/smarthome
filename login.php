<script src="js/jquery/jquery.min.js"></script>
<link href="bootstrap/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="bootstrap/js/bootstrap.min.js"></script>

<!------ Include the above in your HEAD tag ---------->
<link href="css/login.css" rel="stylesheet" id="bootstrap-css">
<!DOCTYPE html>
<html>
<head>
    <title></title>
</head>
<body>
    <!--<table align="center" bgcolor="#CCCCCC" border="0" cellpadding="0"
    cellspacing="1" width="300">
        <tr>
            <td>
                <form method="post" name="">
                    <table bgcolor="#FFFFFF" border="0" cellpadding="3"
                    cellspacing="1" width="100%">
                        <tr>
                            <td align="center" colspan="3"><strong></strong></td>
                        </tr>
                        <tr>
                            <td width="78">Email id</td>
                            <td width="6">:</td>
                            <td width="294"><input id="email" name=
                            "email" type="text"></td>
                        </tr>
                        <tr>
                            <td>Password</td>
                            <td>:</td>
                            <td><input id="password" name="password" type=
                            "password"></td>
                        </tr>
                        <tr>
                            <td>&nbsp;</td>
                            <td>&nbsp;</td>
                            <td><input name="submit" type="submit" value=
                            "Login"> <input name="reset" type="reset" value=
                            "reset"></td>
                        </tr>
                    </table>
                
            </td>
        </tr>
    </table>-->
	
	<div class="container">
 <!---heading---->
     <header class="heading"> Login </header><hr></hr>
	<!---Form starting----> 
	
	<!-- <form method="post" name=""> -->
	<div class="row ">
	 <!--- For Name---->
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
     <!-----------For Phone number-------->
         <div class="col-sm-12">
		     <!--<div class ="row">
                 <div class="col-xs-4 ">
			       <label class="gender">Gender:</label>
				 </div>
			 
			     <div class="col-xs-4 male">	 
				     <input type="radio" name="gender"  id="gender" value="boy">Male</input>
				 </div>
				 
				 <div class="col-xs-4 female">
				     <input type="radio"  name="gender" id="gender" value="girl" >Female</input>
			     </div>
			
		  	 </div> -->
		     <div class="col-sm-12">
		         <div class="btn btn-warning submit"><button id="login" onclick="login()" class="login-btn">Login</button></div>
				 <div class="btn btn-warning reset"><button id="reset" class="reset-btn">Reset</button></div>
		   </div>
		 </div>
	 </div>	 
		 	<!-- </form> -->
		 
</div>
<script type="text/javascript">
$('#login').click(function() {

 $.ajax({
  type: "POST",
  url: "",
  data: { email: $('#email').val(), password: $('#password').val()  }
}).done(function( msg ) {
  alert( "Data Saved: " + msg );
});    

    });
</script>
	
    <?php
    //if (isset($_POST['submit']))
		
	function login()
    {   
		console.log("here");
    include("config.php");
    session_start();
    $email=$_POST['email'];
    $password=$_POST['password'];
    $_SESSION['login_user']=$email; 
    $query = mysqli_query($db,"SELECT email FROM users WHERE email='$email' and password='$password'");
     if (mysqli_num_rows($query) != 0)
    {
     echo "<script language='javascript' type='text/javascript'> location.href='home.php' </script>";   
      }
      else
      {
    echo "<script type='text/javascript'>alert('User Name Or Password Invalid!')</script>";
    }
    }
    ?>
</body>
</html>