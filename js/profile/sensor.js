


$('#apname').change(function() {
    var id = this.value;
	
	 $.ajax({
			  type: "POST",
			  url: "sensor-ajax.php",
			  data: { apid: id }
			}).done( function( msg ) {
				 $('#rname').empty();
				 $('#rname').append( "<option selected=selected' value='select room name' id='room_option'>select room name</option>");
			$.each(msg,function(id,item){
				     
					 $('#rname').append("<option value="+ msg[id].id + ">" + msg[id].name +"</option>");
				 });
			  console.log(msg);
			}); 
 
});


$('#sensortype').change(function() {
    var sensorType = this.value;

	if(sensorType == 'Heater'){
		document.getElementById("mindiv").style.display="block";
		document.getElementById("maxdiv").style.display="block";
	} else {
		
		document.getElementById("mindiv").style.display="none";
		document.getElementById("maxdiv").style.display="none";
	}
	
 
});


$('#finish_submit').click(function() {
   	var minval = document.getElementById("min").value;
	var maxval = document.getElementById("max").value;
  
   if(minval == ''){
	   minval = 0;
	    
   }
   
    if(maxval == ''){
	   maxval = 0;
	    
   }
   
     var sensorId = $('#sensorname').val();
	   var rname = $('#rname').val();
	
	 $.ajax({
			  type: "POST",
			  url: "sensor-add-ajax.php",
			  data: { rname: rname,sensortype: sensorId ,min: minval,max: maxval }
			}).done( function( msg ) {
			if(msg.indexOf('dashboard-user.php') != -1){
					window.location.href = msg;
			  }else if(msg.indexOf('failed') != -1 || msg.indexOf('Failed') != -1){
				  console.log("here12");
					$('#error').text("System unavailable. Please try again later");
				  $("#error").removeClass('hidden');
				  $("#error").addClass('show');
			  }
			}); 
 
	return false;
});


