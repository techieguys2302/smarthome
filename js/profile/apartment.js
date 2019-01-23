$(document).ready(function(){
    console.log("apartment");
	
	
});

function validateApartmentFields(){
	if(!$('#apname').val()){
		alert("Please enter the apartment name");
	}
	if($('#apname').val()&& !$('#hname').val()){
		alert("Please enter the house number/name");
	}
	if($('#apname').val() && $('#hname').val() && !$('#street').val()){
		alert("Please enter the street name");
	}
	
	if($('#apname').val() && $('#hname').val() && $('#street').val() && !$('#city').val()){
		alert("Please enter the city name");
	}
		if($('#apname').val() && $('#hname').val() && $('#street').val() && $('#city').val() &&  !$('#country').val()){
		alert("Please enter the country name");
	}
	
	if($('#apname').val() && $('#hname').val() && $('#street').val() && $('#city').val() && $('#country').val() &&  !$('#zipcode').val()){
		alert("Please enter the zip code");
	}
	
	
	
	
}
function setFormName(name){
	 document.getElementById("fname").value = name;
	
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

function reset(){
	$('#fname').val()='';
	
	
}