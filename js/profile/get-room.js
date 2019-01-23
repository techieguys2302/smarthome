$('#apname').change(function() {
    var id = this.value;
	
	 $.ajax({
			  type: "POST",
			  url: "sensor-ajax.php",
			  data: { apid: id },
			success:  function( msg ) {
				 //$('#subcat').html(msg);
				 $.each(msg,function(id,item){
					 $('#rname').append("<option value="+ msg[id].id + ">" + msg[id].name +"</option>");
				 });
			//document.location.href="/smarthome/sensor.php"
			  console.log(msg);
		}	}); 
 
});