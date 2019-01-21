


$('#apname').change(function() {
    var id = this.value;
	
	 $.ajax({
			  type: "POST",
			  url: "sensor-ajax.php",
			  data: { apid: id },
			success:  function( msg ) {
				 //$('#subcat').html(msg);
				     $('#rname').empty();
					 $('#rname').append("<option selected=selected' value='select room name' id='room_option'>select room name</option>");
					 $('#sensortype').empty();
					$('#sensortype').append("<option selected=selected' value='select sensor type'>select sensor type</option>");
				 $.each(msg,function(id,item){
					 
					 $('#rname').append("<option value="+ msg[id].id + ">" + msg[id].name +"</option>");
				 });
			//document.location.href="/smarthome/sensor.php"
			  console.log(msg);
		}	}); 
 
});


$('#rname').change(function() {
    
	
	 $.ajax({
			  type: "POST",
			  url: "sensor-ajax.php",
			  data: { sensor: '' },
			success:  function( msg ) {
       				$('#sensortype').empty();
					$('#sensortype').append("<option selected=selected' value='select sensor type'>select sensor type</option>");
				 $.each(msg,function(id,item){
					 $('#sensortype').append("<option value="+ msg[id].id + ">" + msg[id].name +"</option>");
				 });
			
			  console.log(msg);
		}	}); 
 
});


$('#sensortype').change(function() {
    var sensorType = this.value;
	
	if(sensorType == 1){
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
       
	
	 $.ajax({
			  type: "POST",
			  url: "sensor-add-ajax.php",
			  data: { rname: $('#rname').val(),sname: $('#sname').val(),sensortype: $('#sensortype').val(),min: minval,max: maxval }
			}).done( function( msg ) {
			 document.location.href = "/smarthome/site/user/dashboard-user.php";
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
			  url: "sensor-add-ajax.php",
			  data: { rname: $('#rname').val(),sname: '',sensortype: $('#sensortype').val(),min: minval,max: maxval }

			}).done( function( msg ) {
			  document.location.href="/smarthome/site/user/dashboard-user.php";
			  console.log(msg);
			}); 
 
});


