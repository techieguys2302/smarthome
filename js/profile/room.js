$(document).ready(function(){
	
	
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
				console.log(msg);
			 if(msg.indexOf('sensor.php') != -1){
					window.location.href = msg;
			  }else if(msg.indexOf('failed') != -1 || msg.indexOf('Failed') != -1){
				  console.log("here");
					$('#error').text("System unavailable. Please try again later");
				  $("#error").removeClass('hidden');
				  $("#error").addClass('show');
			  }
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
