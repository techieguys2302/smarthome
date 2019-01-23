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
    <title>SmartHome Admin Dashboard</title>
	
</head>
<body>
<?php
   include("../core/loginmenu.php");
?>
<?php
  include("../core/dropdownmenu.php");
  
?>

<?php
	include("../core/footer.php")
?>
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