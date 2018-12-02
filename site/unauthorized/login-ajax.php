<?php

    if (isset($_POST['email'])){
		
	
    include("../../config/config.php");
    session_start();
     $email=$_POST['email'];
     $password=$_POST['password'];
    $_SESSION['login_user']=$email; 
    $query = mysqli_query($db,"SELECT * FROM users WHERE email='$email' and password='$password' and status=1 ");
     if (mysqli_num_rows($query) != 0){

		$sth = mysqli_query($db,"SELECT * FROM users WHERE email='$email' and password='$password' and status=1");
		$rows = array();
		while($r = mysqli_fetch_assoc($sth)) {
			$rows[] = $r;
		}
		
		$_SESSION["user"] = json_encode($rows);

		//echo "User:==>"+$_SESSION["user"];
		
		if($rows[0]['User_Role'] == 'Customer'){
			
			echo ("/smarthome/site/user/dashboard-user.php");  
		}else if($rows[0]['User_Role'] == 'Admin'){
				
			echo ("/smarthome/site/user/dashboard-admin.php");  
		}
		
      }
      else
      {
		echo "error";
	  }
    }
    ?>