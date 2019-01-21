$(document).ready(function(){
	$("#edit_btn_div").prop('hidden', true);
  $.ajax({
			  type: "POST",
			  url: "user-profile-ajax.php",
			  data: { getdata: 'getdata'},
			  success:  function( msg ) {
				 $.each(msg,function(id,item){
					 $("#fname").val(msg[id].First_Name); 
					 $("#lname").val(msg[id].Last_Name); 
					 $("#email").val(msg[id].Email); 
					 					 	
				 });
			  console.log(msg);
		}	}); 
			
});

$('#edit_submit').click(function() {
	
  var flag= validateFields();
  if(flag){
	
	 $.ajax({
			  type: "POST",
			  url: "user-profile-edit-ajax.php",
			  data: { edit : 'edit',fname : $('#fname').val(),lname : $('#lname').val(),
			  email : $('#email').val()},
			  success: function(msg){
			
    			document.location.href = "/smarthome/site/user/user-profile.php";
			    console.log(msg);
			  }
			  
			});
  } else {
	  return false;
  }

});


$('#apname').change(function() {
    var id = this.value;
	if(id == 'select apartment name' || id == ''){
		$('#apartment').hide();
		
	} else {
		$('#apartment').show();
		$.ajax({
			  type: "POST",
			  url: "user-profile-ajax.php",
			  data: { apname:  $("#apname").val()},
			  success:  function( msg ) {
				 $.each(msg,function(id,item){
					 
					 $('#name').val(msg[id].Name); 
					 $('#houseName').val(msg[id].House_Name);  
				     $('#street').val(msg[id].Street); 
					 $('#city').val(msg[id].City);  
					 $('#country').val(msg[id].Country); 
					 $('#zipcode').val(msg[id].Zipcode); 
					 					 	
				 });
			  console.log(msg);
		}	}); 
	}

});

$('#edit').click(function(event) {
  enableFields(event);
 });




function validateFields(){
	return validateUserDetails();
}	
		
function validateUserDetails(){
	if(!$('#fname').val()){
		setErrorMessage("Please enter the first name");
		return false;
	} 
	if($('#fname').val()&& !$('#lname').val()){
		setErrorMessage("Please enter the last name");
		return false;
	}
	
		
	var email = $('#email').val();
	
	if(typeof undefined == typeof email || null == email || "" == email ||
		   (email.indexOf('@') == -1 || email.indexOf('.') == -1 || (email.substring(0,email.indexOf('@'))).length < 1 || (email.substring(email.lastIndexOf('.'),email.length)).length <= 1 || (email.substring(email.indexOf('@'),email.lastIndexOf('.')).length < 1 ))){
			$("#error").text("Please enter a valid email id");
			$("#error").removeClass('hidden');
			$("#error").addClass('show');
			return false;
		} else {
			return true;
		}  
			
		}

function setErrorMessage(msg){
	
		$("#error").text(msg);
		$("#error").removeClass('hidden');
		$("#error").addClass('show');
	
	
	
}

function enableFields(event){
$("#edit_btn_div").prop('hidden', false);
$('#fname').prop('disabled', false); 
$('#lname').prop('disabled', false); 
$('#email').prop('disabled', false);  

event.preventDefault();
	
}