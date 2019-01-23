$(document).ready(function(){
    console.log("apartment");
	
	
});

$('#apartment_submit').click(function(){
    var flag = validateApartmentFields();
	if(flag){
		$.ajax({
			  type: "POST",
			  url: "apartment-ajax.php",
			  data: { apname: $('#apname').val(), hname: $('#hname').val(),
			  street: $('#street').val(),city: $('#city').val(),
			  country: $('#country').val(),zipcode: $('#zipcode').val()}
			}).done( function( msg ) {
			document.location.href = 	"/smarthome/site/user/room.php";
			  console.log(msg);
			});
	} else {
		return flag;
		
	}
		
	
});



function validateApartmentFields(){
	if(!$('#apname').val()){
		setErrorMessage("Please enter the apartment name");
		return false;
	}
	if($('#apname').val()&& !$('#hname').val()){
		setErrorMessage("Please enter the house number/name");
		return false;
	}
	if($('#apname').val() && $('#hname').val() && !$('#street').val()){
		setErrorMessage("Please enter the street name");
		return false;
	}
	
	if($('#apname').val() && $('#hname').val() && $('#street').val() && !$('#city').val()){
		setErrorMessage("Please enter the city name");
		return false;
	}
		if($('#apname').val() && $('#hname').val() && $('#street').val() && $('#city').val() &&  !$('#country').val()){
		setErrorMessage("Please enter the country name");
		return false;
	}
	
	if($('#apname').val() && $('#hname').val() && $('#street').val() && $('#city').val() && $('#country').val() &&  !$('#zipcode').val()){
		setErrorMessage("Please enter the zip code");
		return false;
	} else {
		
		return true;
	}
	
	
	
}

$('#apartment_submit').click(function() {
   
 
   
  
	
	 $.ajax({
			  type: "POST",
			  url: "apartment-ajax.php",
			  data: { apname: $('#apname').val(), hname: $('#hname').val(),
			  street: $('#street').val(),city: $('#city').val(),
			  country: $('#country').val(),zipcode: $('#zipcode').val()}
			}).done( function( msg ) {
			document.location.href = 	"/smarthome/site/user/room.php";
			  
			}); 
 
});

function setErrorMessage(msg){
	
		$("#error").text(msg);
		$("#error").removeClass('hidden');
		$("#error").addClass('show');
	
	
	
}




