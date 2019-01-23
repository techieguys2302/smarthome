<!DOCTYPE html>
<html>
<head>
    <title>Logout</title>
</head>
<body>
Logged out!!
<?php
session_start();
if(session_destroy())
{
header("Location: http://localhost/smarthome/site/unauthorized/login.php");
exit();
}
?>
</body>
</html>