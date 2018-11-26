$(document).ready(function(){
    console.log("register");
	
	
});

function validateFields(){
	if(!$('#fname').val()){
		alert("Please enter the first name");
	}
	if($('#fname').val()&& !$('#lname').val()){
		alert("Please enter the last name");
	}
	if($('#fname').val() && $('#lname').val() && !$('#email').val()){
		alert("Please enter the email id");
	}
	
	if($('#fname').val() && $('#lname').val() && $('#email').val() && $('#email').val() && !$('#password').val()){
		alert("Please enter the password");
	}
		if($('#fname').val() && $('#lname').val() && $('#email').val() && $('#email').val() && $('#password').val() && !$('#cpassword').val()){
		alert("Please confirm the password");
	}
	
		if(($('#password').val() && $('#cpassword').val()) && ($('#cpassword').val() != ($('#cpassword').val()))){
		alert("Passwords enterd do not match");
	}
	
	
}


function reset(){
	$('#fname').val()='';
	
	
}