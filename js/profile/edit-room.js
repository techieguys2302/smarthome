$(document).ready(function(){
	$("#edit_btn_div").prop('hidden', true);
	var id = getUrlVars()["id"];
	
	 $.ajax({
			  type: "POST",
			  url: "edit-room-ajax.php",
			  data: {roomid : id}
			}).done( function( msg ) {
				 $.each(msg,function(id,item){
					 
					 $('#rname').val(msg[id].Name); 
					 
					 					 	
				 });
				
			  console.log(msg);
			});
  
			
});
function getUrlVars()
{
    var vars = [], hash;
    var hashes = window.location.href.slice(window.location.href.indexOf('?') + 1).split('&');
    for(var i = 0; i < hashes.length; i++)
    {
        hash = hashes[i].split('=');
        vars.push(hash[0]);
        vars[hash[0]] = hash[1];
    }
    return vars;
}


$('#edit_submit').click(function() {
	
  var flag= validateFields();
  if(flag){
		 
			
			  $.ajax({
			  type: "POST",
			  url: "edit-room-ajax.php",
			  data: {rname : $('#rname').val()
			  }
			}).done( function( msg ) {
				document.location.href = "/smarthome/site/user/dashboard-user.php";
			  console.log(msg);
			});
				
			  console.log(msg);
			
  } else {
	  return false;
  }

});




$('#edit').click(function(event) {
  enableFields(event);
 });




function validateFields(){

 
	if($('#rname').val() != '' && $('#rpname').val() != null ) {
        
		setErrorMessage("Please enter room name ");
		return false;
		
		} else {
			return true;
		}
		
		} 
		
	

function setErrorMessage(msg){
	
		$("#error").text(msg);
		$("#error").removeClass('hidden');
		$("#error").addClass('show');
		
}

function enableFields(event){
$("#edit_btn_div").prop('hidden', false);
 
$('#rname').prop('disabled', false);  
 
event.preventDefault();
	
}