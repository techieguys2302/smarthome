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

<?php

$result="";

if(isset($_POST['submit'])){
	require ('../../../PHPMailer_5.2.4/class.phpmailer.php');
	$mail = new PHPMailer();
	
	$mail->IsSMTP();
	//$mail->SMTPDebug=2;
	$mail->Host='smtp.gmail.com';
	$mail->Port=465;
	$mail->SMTPAuth=true;
	$mail->SMTPSecure='ssl';
	$mail->Username='techieguys2302@gmail.com';
	$mail->Password='Techie@123';
	
	$mail->SetFrom($_POST['email'],$_POST['name']);
	$mail->AddAddress('techieguys2302@gmail.com');
	$mail->AddReplyTo($_POST['email'],$_POST['name']);
	
	$mail->IsHTML(true);
	$mail->Subject='Smarthome User Enquiry: '.$_POST['subject'];
	$mail->Body='<h1 align=center>Name:'.$_POST['name'].'<br/><br/>Email: '.$_POST['email'].'<br/
	></h1><br/><br/><h4>Message: '.$_POST['msg'].'<h4/>';
	
	if(!$mail->send()){
		$result="Something went wrong. Please try again.";
	}
	else{
		$result="Thanks ".$_POST['name']." for contacting us. We'll get back to you soon!";
		$description = 'Name : '.$_POST['name'].'\<br\/\>Subject: '.$_POST['subject'].'\<br\/\> Description: '.$_POST['msg'];
		include("../../config/config.php");
		mysqli_query($db, "Insert into complaint(Description,User_Id,Date) values ('".$description."','" .$_SESSION['user'][0]['ID']. "',NOW()); ");
	}
	
	
}

?>


<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="author" content="">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width,initial-scale=1">
  <title>Contact Form Bootstrap</title>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css">
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.13/css/all.css">
  <link rel="stylesheet" href="../../css/contact-us.css">
</head>

<body class="bg-dark">
<?php
   include("../core/loginmenu.php");
?>
<?php
  include("../core/dropdownmenu.php");
  
?>
  <div class="container">
    <div class="detail">
      <div class=" bg-light rounded">
        <h1 class="text-center font-weight-bold text-primary">Contact Us</h1>
        <hr class="bg-light">
        <h5 class="text-center text-success"><?= $result;?></h5>
        <form action="" method="post" id="form-box" class="p-2">
          <div class="form-group input-group">
            <div class="input-group-prepend">
              <span class="input-group-text"><i class="fas fa-user"></i></span>
            </div>
            <input type="text" name="name" class="form-control" placeholder="Enter your name" required>
          </div>
          <div class="form-group input-group">
            <div class="input-group-prepend">
              <span class="input-group-text"><i class="fas fa-envelope"></i></span>
            </div>
            <input type="email" name="email" class="form-control" placeholder="Enter your email" required>
          </div>
          <div class="form-group input-group">
            <div class="input-group-prepend">
              <span class="input-group-text"><i class="fas fa-at"></i></span>
            </div>
            <input type="text" name="subject" class="form-control" placeholder="Enter subject" required>
          </div>
          <div class="form-group input-group">
            <div class="input-group-prepend">
              <span class="input-group-text"><i class="fas fa-comment-alt"></i></span>
            </div>
            <textarea name="msg" id="msg" class="form-control" placeholder="Write your message" cols="30" rows="4" required></textarea>
          </div>
          <div class="form-group">
            <input type="submit" name="submit" id="submit" class="btn btn-primary btn-block" value="Send">
          </div>
        </form>
      </div>
    </div>
  </div>
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