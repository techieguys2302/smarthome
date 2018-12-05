








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
			  url: "sensor-add-admin-ajax.php",
			  data: { sname: $('#sname').val(),sensortype: $('#sensortype').val(),min: minval,max: maxval }
			}).done( function( msg ) {
				document.location.href="/smarthome/site/user/sensor-add-admin.php"
			  console.log(msg);
			}); 
 
});





