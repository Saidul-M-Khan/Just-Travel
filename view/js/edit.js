function printError(Id, Msg) {
    document.getElementById(Id).innerHTML = Msg;
}

function validateForm() {

   var username = document.Form.username.value;//chnage
   var email = document.Form.email.value;
   var password = document.Form.password.value;

   var usernameErr = emailErr = passwordErr = true;
   

   if(username == "") {
       printError("usernameErr", "Please enter your User name");//chnage
   } else {
       var regex = /^[a-zA-Z\s]+$/;                
       if(regex.test(username) === false) {
           printError("usernameErr", "Only Charecter Allowed");//chnage
          
       } else {
           printError("usernameErr", ""); //chnage
           usernameErr = false;
       }
   }
   

   if(email == "") {
       printError("emailErr", "Please enter your email address");
   } else {
       
       var regex = /^\S+@\S+\.\S+$/;
       if(regex.test(email) === false) {
           printError("emailErr", "Please enter a valid email address");
       } else{
           printError("emailErr", "");
           emailErr = false;
       }
   }
   

   if(password == "") {
       printError("passwordErr", "Please enter valid password");
   } else {
       var regex = /^[1-9]\d{7}$/;
       if(regex.test(password) === false) {
           printError("passwordErr", "Please enter a valid 8 password");
       } else{
           printError("passwordErr", "");
           passwordErr = false;
       }
   }
   
   
   if((usernameErr || emailErr || passwordErr ) == true) {
      return false;
   } 
};