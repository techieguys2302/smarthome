$('#apname').change(function() {
    var id = this.value;
	$("#rname").empty();
	 $.ajax({
			  type: "POST",
			  url: "get-room-ajax.php",
			  data: { apid: id },
			success:  function( msg ) {
				$('#rname').empty();
				$('#sensorname').empty();
				 if(msg == null || msg == 'no data found'){
					$('#rname').append( "<option selected=selected' value='select room name' id='room_option'>select room name</option>");
					 
				 } else {
					  $.each(msg,function(id,item){
					 $('#rname').append( "<option selected=selected' value='select room name' id='room_option'>select room name</option>"); 
					 $('#rname').append("<option value="+ msg[id].id + ">" + msg[id].name +"</option>");
				 });
				}
						  
				
			//document.location.href="/smarthome/site/user/dashboard-user.php";
			  console.log(msg);
		}	}); 
 
});



$('#rname').change(function() {
    var id = this.value;

	 $.ajax({
			  type: "POST",
			  url: "get-sensor-delete-ajax.php",
			  data: { rid: id },
			success:  function( msg ) {
				
				$('#sensorname').empty();
				$('#sensorname').append( "<option selected=selected' value='select sensor name' id='sensor_option'>select sensor name</option>");
				
					  $.each(msg,function(id,item){
					  
					 $('#sensorname').append("<option value="+ msg[id].ID + ">" + msg[id].Sensor_Name +"</option>");
				 });
				
						  
				
			
			  console.log(msg);
		}	}); 
 
});

$('#delete_submit').click(function() {
   
	
	 $.ajax({
			  type: "POST",
			  url: "delete-sensor-user-ajax.php",
			  data: { rid: $('#rname').val(),sid: $('#sensorname').val() },
			  success:  function( msg ) {
			  //document.location.href="/smarthome/site/user/dashboard-user.php";
			  }

			});
 
});