$(document).ready(function(){
    console.log("room");
	
	
});

function validateRoomFields(){
	if(!$('#apname').val()){
		alert("Please enter the apartment name");
	}
	if($('#rname').val()&& !$('#rname').val()){
		alert("Please enter the room name");
	}

	
}


$('#add_room_submit').click(function() {
   
  
	
	 $.ajax({
			  type: "POST",
			  url: "room-ajax.php",
			  data: { apname: $('#apname').val(), rname: $('#rname').val()}
			}).done( function( msg ) {
			document.location.href = 	"/smarthome/site/user/room.php";
			  console.log(msg);
			}); 
 
});


$('#add_sensor_submit').click(function() {
   
  
	
	 $.ajax({
			  type: "POST",
			  url: "room-ajax.php",
			  data: { apname: $('#apname').val(), rname: $('#rname').val()}
			}).done( function( msg ) {
			document.location.href = 	"/smarthome/site/user/sensor.php";
			  console.log(msg);
			}); 
 
});


