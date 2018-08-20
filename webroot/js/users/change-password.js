$(document).ready(function(){
    $("form").submit(function(){
      var password=new RegExp('^(?=.*?[A-Z])(?=.*[A-Za-z])(?=.*\d)(?=.*[$@$!%*#?&])[A-Za-z\d$@$!%*#?&]{7,}$');
     // ||  password.test($("#new_password").val())
       if($("#confirm_password").val()!=$("#new_password").val() ){
         swal('New Password and Confirm Password are not match please try Again !');
         return false;
       }
    });
  
});