




$('#finish_submit').click(function() {
   
	
	 $.ajax({
			  type: "POST",
			  url: "delete-apartment-ajax.php",
			  data: { apname: $('#apname').val() },
			  success: function(msg){
				  document.location.href="/smarthome/site/user/dashboard-user.php";
			  }

			});
 
});


