$(document).ready(function(){
    console.log("room");
	
	
});

$('#apname').change(function() {
    var id = this.value;
	
	 $.ajax({
			  type: "POST",
			  url: "delete-secondary-user-ajax.php",
			  data: { apid: id },
			success:  function( msg ) {
				 //$('#subcat').html(msg);
				     $('#userid').empty();
					 $('#userid').append("<option selected=selected' value='select user ' id='user_option'>select user </option>");
					 
				 $.each(msg,function(id,item){
					 
					 $('#userid').append("<option value="+ msg[id].ID + ">" + msg[id].Email +"</option>");
				 });
			//document.location.href="/smarthome/sensor.php"
			  console.log(msg);
		}	}); 
 
});


$('#finish_submit').click(function() {
   $aptid = $('#apname').val();
   $userid = $('#userid').val();
	
	 $.ajax({
			  type: "POST",
			  url: "delete-secondary-user-ajax.php",
			  data: { aptid: $aptid , userid: $userid },
			success:  function( msg ) {
				
					 
				
			document.location.href="/smarthome/site/user/dashboard-user.php"
			  console.log(msg);
		}	}); 
 
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



