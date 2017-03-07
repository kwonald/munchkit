$(document).ready(function() {
  $("#userpasswordconfirm").keyup(validate);
});


function validate() {
  var password1 = $("#userpassword").val();
  var password2 = $("#userpasswordconfirm").val();

    
 
    if(password1 == password2) {
       $("#divCheckPasswordMatch").text("");        
    }
    else {
        $("#divCheckPasswordMatch").text("Passwords must match!");  
    }
}
		
