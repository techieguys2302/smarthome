<?php

	if (isset($_POST['sname'])){
		
	
    include("../../config/config.php");
    session_start();
    $sname=$_POST['sname'];
	
	$statement= "DELETE FROM `domisep`.`sensor` where id = ".$sname;

    echo "statement...  ".$statement;
    
	
	if(mysqli_query($db,$statement)){
		echo "deleted sucessfully to sensor table";  
		
	} else {
		echo "deletion failed - sensor table"; 
	}
		}
	
    ?>