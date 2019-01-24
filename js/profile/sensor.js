


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


$('#add_sensor_submit').click(function() {
	var minval = document.getElementById("min").value;
	var maxval = document.getElementById("max").value;
  
   if(minval == ''){
	   minval = 0;
	    
   }
   
    if(maxval == ''){
	   maxval = 0;
	    
   }
       
	
	 $.ajax({
			  type: "POST",
			  url: "sensor-add-ajax.php",
			  data: { rname: $('#rname').val(),sname: $('#sname').val(),sensortype: $('#sensortype').val(),min: minval,max: maxval }
			}).done( function( msg ) {
			document.location.href="/smarthome/site/user/sensor.php"
			  console.log(msg);
			}); 
 
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
	
	 $.ajax({
			  type: "POST",
			  url: "sensor-ajax.php",
			  data: { rname: $('#rname').val(),sname: $('#sname').val(),sensortype: $('#sensortype').val(),min: minval,max: maxval }

			}).done( function( msg ) {
				document.location.href="/smarthome/site/user/registration.php"
			  console.log(msg);
			}); 
 
});


