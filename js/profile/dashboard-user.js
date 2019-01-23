$('.sensor-on').click(function() {
	
	var id = $(this).siblings('.sensorId').val();
	updateStatus(id,1);
	console.log("on");
	
	$(this).siblings('.sensor-off').attr('style','background-color:white');
	$(this).attr('style','background-color:#0095ff; background-image: linear-gradient(to bottom, #0095ff, #2079b0);');
	
});


$('.sensor-off').click(function() {
	
	var id = $(this).siblings('.sensorId').val();
	updateStatus(id,0);
	console.log("off");
	
	$(this).siblings('.sensor-on').attr('style','background-color:white');
	$(this).attr('style','background-color:#0095ff; background-image: linear-gradient(to bottom, #0095ff, #2079b0);');
	
});


$('.edi-btn,.edit-btns').click(function(){
	
	var id = $(this).attr('id');
	
	if(id.indexOf('editApart') > -1){
		var aparId = id.slice((id.indexOf('editApart')+9),id.length);
		console.log(aparId);
	}else if(id.indexOf('editRoom') > -1){
		var roomId = id.slice((id.indexOf('editApart')+9),id.length);
		console.log(roomId);
		
	}else if(id.indexOf('editSensor') > -1){
		var sensorId = id.slice((id.indexOf('editApart')+11),id.length);
		console.log(sensorId);
		
	}
	
});


$('.del-btn,.delete-btns').click(function(){
	
	var id = $(this).attr('id');
	
	if(id.indexOf('deleApart') > -1){
		var aparId = id.slice((id.indexOf('deleApart')+9),id.length);
		console.log(aparId);
	}else if(id.indexOf('deleRoom') > -1){
		var roomId = id.slice((id.indexOf('deleApart')+9),id.length);
		console.log(roomId);
		
	}else if(id.indexOf('deleSensor') > -1){
		var sensorId = id.slice((id.indexOf('deleApart')+11),id.length);
		console.log(sensorId);
		
	}
	
});

function updateStatus($id,$status){
	
	$.ajax({
			  type: "POST",
			  url: "dashboard-user-ajax.php",
			  data: { status: $status, ID: $id  }
		   }).done( function( msg ) {
			  //alert( "Data Saved: " + msg );
			  
			  console.log(msg);
			  if(msg.indexOf('Success') != -1){
					console.log("Record Updated Successfully");
			  }else if(msg.indexOf('Error') != -1){
					console.log("Error occurred");
			  }
			  else{
				  
				  document.location.href = "/smarthome/site/unauthorized/login.php";
			  }
		   });
	
}

 