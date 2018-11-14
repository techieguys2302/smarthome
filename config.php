<?php
	$hostname='localhost';
	$user = 'root';
	$password = 'Admin@123';
	$mysql_database = 'domisep';
	$db = mysqli_connect($hostname, $user, $password,$mysql_database);
	if(!$db){
		echo "not";
	}else{
		echo "con";
	}
	#mysqli_select_db("domisep", $db);
?>