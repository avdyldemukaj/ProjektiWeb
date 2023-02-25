function validateFormRegister(){
    var name = document.forms["myForm"]["name"]; 
    var surname = document.forms["myForm"]["surname"]; 

    var email = document.forms["myForm"]["email"].value;    
    var password= document.forms["myForm"]["password"].value;

    var emailRegex=/^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/;
    var passwordRegex=/^[A-Z]{1}[a-zA-Z0-9!@#\$%\^\&*\)\(+=._-]{6}$/;

    if (name.value == "")                                  
    { 
        document.getElementById('errorname').innerHTML="Please enter a valid name!";  
        return false; 
    }else{
        document.getElementById('errorname').innerHTML="";  
    }

    if (surname.value == "")                                  
    { 
        document.getElementById('errorsurname').innerHTML="Please enter a valid surname!";  
        return false; 
    }else{
        document.getElementById('errorsurname').innerHTML="";  
    }

    if(!(emailRegex.test(email))) {
        document.getElementById('erroremail').innerHTML="Please enter a valid email address"; 
       return false;
       }
       else{
        document.getElementById('erroremail').innerHTML=""; 
       }
       if(!(passwordRegex.test(password))){
        document.getElementById('errorpassword').innerHTML="Please enter a valid password(ex:Test13%)";
        return false;
       }
       else{
        document.getElementById('errorpassword').innerHTML="";
          
       }
}