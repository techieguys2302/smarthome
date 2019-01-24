<?php

$result="";
	function randomPassword() {
    $s_alphabet = 'abcdefghijklmnopqrstuvwxyz';
	$c_alphabet = 'ABCDEFGHIJKLMNOPQRSTUVWXYZ';
	$number = '1234567890';
	$character = '\.\-\#\'\@\`\~\!\$\%\^\&\*\;\:';
    $pass = array(); //remember to declare $pass as an array
    $s_alphaLength = strlen($s_alphabet) - 1;
	$c_alphaLength = strlen($c_alphabet) - 1;
	$numbLength = strlen($number) - 1;
	$characterLength = strlen($character) - 1;	//put the length -1 in cache
    for ($i = 0; $i <2; $i++) {
        $n = rand(0, $s_alphaLength);
        $pass[] = $s_alphabet[$n];
    }
	for ($i = 0; $i <2; $i++) {
        $n = rand(0, $c_alphaLength);
        $pass[] = $c_alphabet[$n];
    }
	for ($i = 0; $i <3; $i++) {
        $n = rand(0, $numbLength);
        $pass[] = $number[$n];
    }
	for ($i = 0; $i <1; $i++) {
        $n = rand(0, $characterLength);
        $pass[] = $character[$n];
    }
    return implode($pass); //turn the array into a string
}

if(isset($_POST['submit'])){
	
	include("../../config/config.php");
			$user_query = mysqli_query($db,"SELECT * FROM Users where Email = '" .$_POST['email']. "'");
			   if (mysqli_num_rows($user_query) != 0){
					
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
					$mail->AddAddress($_POST['email']);
					$mail->AddReplyTo('noreply@smathome.com');
					
					$mail->IsHTML(true);
					$mail->Subject='Smarthome New Password ';
					$newPassword = randomPassword();
					$mail->Body='<h1 align=center>Name:'.$_POST['name'].'<br/><br/>Email: '.$_POST['email'].'<br/
					></h1><br/><br/><h4>Message: Your new password for the SmartHome application is '.$newPassword.'<h4/>';
					
					if(!$mail->send()){
						$result="Something went wrong. Please try again.";
					}
					else{
						$result="Thanks ".$_POST['name']." for contacting us. We have send you an email with the new password!";
						mysqli_query($db, "Update users set Password = '".$newPassword."' where Email = '" .$_POST['email']. "'");
						
					}
			   }else{
				   
				   $result="Email is not valid";
				   
				   
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
  <title>SmartHome Forgot Password</title>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css">
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.13/css/all.css">
  <link rel="stylesheet" href="../../css/forgot-password.css">
</head>

<body class="bg-dark">

<?php
   include("../core/menu.php");
?>
<hr/>
  <div class="container">
    <div class="row justify-content-center">
      <div class="col-md-6 mt-5 bg-light rounded">
        <h1 class="text-center font-weight-bold text-primary">Forgot Password</h1>
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
          <!--<div class="form-group input-group">
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
          </div>-->
          <div class="form-group">
            <input type="submit" name="submit" id="submit" class="btn btn-primary btn-block" value="Send">
          </div>
        </form>
      </div>
    </div>
  </div>
  <br/>
  <?php
	include("../core/footer.php")
?>
</body>

</html>
</html>