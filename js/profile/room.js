$(document).ready(function(){
    console.log("room");
	
	
});

function validateRoomFields(){
	if(!$('#apname').val()){
		
		setErrorMessage("Please select the apartment name");
		return false;
		
	}
	if($('#apname').val()&& !$('#rname').val()){
		setErrorMessage("Please enter the room name");
		return false;
	} else {
		
		return true;
	}

	
}


$('#add_room_submit').click(function() {
   
  var flag = validateRoomFields();
  if(flag){
	
	 $.ajax({
			  type: "POST",
			  url: "room-ajax.php",
			  data: { apname: $('#apname').val(), rname: $('#rname').val()}
			}).done( function( msg ) {
			 document.location.href = 	"/smarthome/site/user/sensor.php";
			  console.log(msg);
			}); 
  } else {
	  return false;
  }
 
});





function setErrorMessage(msg){
	
		$("#error").text(msg);
		$("#error").removeClass('hidden');
		$("#error").addClass('show');
	
	
	
}
