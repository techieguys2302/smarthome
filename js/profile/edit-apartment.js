
function getUrlVars()
{
    var vars = [], hash;
    var hashes = window.location.href.slice(window.location.href.indexOf('?') + 1).split('&');
    for(var i = 0; i < hashes.length; i++)
    {
        hash = hashes[i].split('=');
        vars.push(hash[0]);
        vars[hash[0]] = hash[1];
    }
    return vars;
}

$(document).ready(function(){
	//$("#edit_btn_div").prop('hidden', true);
  
  aparDetails();
			
});

$('#edit_submit').click(function() {
	
  var flag= validateFields();
  if(flag){
		 
			if($('#apname').val() != 'select apartment name' ){
			  $.ajax({
			  type: "POST",
			  url: "user-edit-apartment-ajax.php",
			  data: {name : $('#name').val(),
			  houseName : $('#houseName').val(),street : $('#street').val(),
			  city : $('#city').val(),country : $('#country').val(),
			  zipcode : $('#zipcode').val(),apname:$('#apname').val()}
			}).done( function( msg ) {
				document.location.href = "/smarthome/site/user/user-profile.php";
			  console.log(msg);
			});
				}
			document.location.href = "/smarthome/site/user/edit-apartment.php";
			  console.log(msg);
			
  } else {
	  return false;
  }

});


function aparDetails() {
    var id = getUrlVars()["id"];
	
	if(id == 'select apartment name' || id == ''){
		$('#apartment').hide();
		
	} else {
		$('#apartment').show();
		$.ajax({
			  type: "POST",
			  url: "edit-apartment-ajax.php",
			  data: { apname:  id},
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

}

$('#edit').click(function(event) {
  enableFields(event);
 });




function validateFields(){

 
	if($('#apname').val() != '' && $('#apname').val() != 'select apartment name' ) {
        if($('#fname').val() && $('#lname').val() && $('#email').val() && $('#email').val()&& ! $('#name').val()){
		setErrorMessage("Please enter the apartment name ");
		return false;
		} 

		if($('#fname').val() && $('#lname').val() && $('#email').val() && $('#email').val() && $('#name').val() && !$('#houseName').val()){
		setErrorMessage("Please enter the house name/no ");
		return false;
		} 
		
		if($('#fname').val() && $('#lname').val() && $('#email').val() && $('#email').val() && $('#name').val() && $('#houseName').val() && !$('#street').val()){
		setErrorMessage("Please enter the  street name");
		return false;
		} 
		
		if($('#fname').val() && $('#lname').val() && $('#email').val() && $('#email').val() && $('#name').val() && $('#houseName').val() && $('#street').val() && !$('#city').val()){
		setErrorMessage("Please enter the city name ");
		return false;
		} 
		
				
		if($('#fname').val() && $('#lname').val() && $('#email').val() && $('#email').val() && $('#name').val() && $('#houseName').val() && $('#street').val() && $('#city').val() && !$('#country').val()){
		setErrorMessage("Please enter the country name ");
		return false;
		} 
		
		if($('#fname').val() && $('#lname').val() && $('#email').val() && $('#email').val() && $('#name').val() && $('#houseName').val() && $('#street').val() && $('#city').val() && $('#country').val() 
			&& !$('#zipcode').val()){
		setErrorMessage("Please enter the zipcode ");
		return false;
		validateUserDetails();
		} else {
			return true;
		}
		
		} 
		
}	

function setErrorMessage(msg){
	
		$("#error").text(msg);
		$("#error").removeClass('hidden');
		$("#error").addClass('show');
		
}

function enableFields(event){
$("#edit_btn_div").prop('hidden', false);
 
$('#name').prop('disabled', false);  
$('#houseName').prop('disabled', false);  
$('#street').prop('disabled', false);  
$('#city').prop('disabled', false);  
$('#country').prop('disabled', false);  
$('#zipcode').prop('disabled', false); 
event.preventDefault();
	
}