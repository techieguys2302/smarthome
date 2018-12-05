








$('#delete_sensor_submit').click(function() {
	
 if(document.getElementById("sname").value == "" ){
	 alert("Please select sensor");
	 
 }
 
   
  
	
	 $.ajax({
			  type: "POST",
			  url: "sensor-delete-admin-ajax.php",
			  data: { sname: $('#sname').val()}
			}).done( function( msg ) {
			document.location.href = 	"/smarthome/site/user/sensor-delete-admin.php";
			  console.log(msg);
			}); 
 
	
	
 
});





