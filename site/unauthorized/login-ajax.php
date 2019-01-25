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
		
		$_SESSION["user"] = ($rows);
		
		 $_SESSION['start'] = time(); // Taking now logged in time.
            // Ending a session in 30 minutes from the starting time.
            $_SESSION['expire'] = $_SESSION['start'] + (30 * 60);

		//echo "User:==>"+$_SESSION["user"];
		
		if($rows[0]['User_Role'] == 'Customer' || $rows[0]['User_Role'] == 'Secondary'){
			
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