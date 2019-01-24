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
<link href="../../bootstrap/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="../../bootstrap/js/bootstrap.min.js"></script>
<script src="../../js/jquery/jquery.min.js"></script>

<!------ Include the above in your HEAD tag ---------->
<link href="../../css/registration.css" rel="stylesheet" id="bootstrap-css">
<!DOCTYPE html>
<html>
<head>
     <meta charset="UTF-8">
     <title>Customer Complaints</title>
     	<meta name="viewport" content="width=device-width, initial-scale=1">
</head>
<body>

<?php
   include("../core/loginmenu.php");
?>
<?php
  include("../core/dropdownmenu.php");
  
?>
<div class="table-container" >
 <!---heading---->
     <header class="heading"> Customer Complaints </header>
	 <div class = "space"></div>
	 <table border='1' style = "margin-top:-70px;">   
	  <tr>
	    <th class="mail" >Complaint Description</th>
		<th class="mail" >Customer Name</th>
	    <th class="mail">Customer Email Id</th>
		<th class="mail">Complaint Registered Date</th>
	  </tr>
<?php
   	
    include("../../config/config.php");
    //session_start();
	$query = "select c.Description,u.First_Name,u.Last_Name,u.Email,c.Date from domisep.complaint as c inner join domisep.users as u on c.User_Id = u.ID ;";
			$sth = mysqli_query($db,$query);
		while($row = mysqli_fetch_assoc($sth)) {
			echo "data";
			echo " <tr> ";
			echo " <td class='mail'>{$row['Description']}</td> ";
			echo " <td class='mail'>{$row['First_Name']} {$row['Last_Name']} </td> ";
			echo " <td class='mail'>{$row['Email']}</td> ";
			echo " <td class='mail'>{$row['Date']}</td> ";
   			echo " </tr> ";
			
			
		}
 
?>
</table>
</div>
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