<?php
//echo "here==>";
	 session_start();
	if( isset($_SESSION['user']) )
	{
		 //session_start();
 ?>
<!DOCTYPE html>
<html>
<head>
    <title>Welcome Home Page</title>
	
</head>
<body>

user==> <?php

		echo $_SESSION["user"];
	 ?>

Welcome Home Page

</body>
</html>
<?php
	}else{
		//die();
		//echo "<script language='javascript' type='text/javascript'> location.href='/smarthome/site/unauthorized/login.php' </script>";   
		 header("Location: http://localhost/smarthome/site/unauthorized/login.php");
		 exit();
	}

?>