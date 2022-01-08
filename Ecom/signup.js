
function userRegister() {


    var user_Email = document.getElementById("user_email_id").value;
    var user_Name = document.getElementById("user_name_id").value;
    var user_Password = document.getElementById("passwordr").value;

    var Httprequset = new XMLHttpRequest();

    Httprequset.onreadystatechange = function (){
        
         if(Httprequset.readyState==4 && Httprequset.status==200){
          
           var response = this.responseText;
          console.log("response");
          location.href=response;
          
          
            
      }
    };

    Httprequset.open("POST", "signup_Insert.php?", true);
    Httprequset.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
    Httprequset.send("email="+user_Email+"&name="+user_Name+"&password="+user_Password);


}