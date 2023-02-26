function validatePackagesDuo() {                                 

    var name = document.forms["myForm"]["name"];
    var surname = document.forms["myForm"]["surname"];
    var email = document.forms["myForm"]["email"];   
    var number = document.forms["myForm"]["number"];
    var adress = document.forms["myForm"]["adress"]; 
    var book = document.forms["myForm"]["book"]; 
    
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
    
        if (email.value.indexOf("@", 0) < 0)                                   
        { 
            document.getElementById('erroremail').innerHTML="Please enter a valid email address!"; 
            return false; 
        }else{
            document.getElementById('erroremail').innerHTML="";  
        }
    
        if (number.value == "")                                   
        { 
            document.getElementById('errornumber').innerHTML="Please enter a valid  phone number!"; 
            return false; 
        }else{
            document.getElementById('errornumber').innerHTML="";  
        }
    
        if (adress.value == "")                                   
        { 
            document.getElementById('erroradress').innerHTML="Please enter a valid  adress!"; 
            return false; 
        }else{
            document.getElementById('erroradress').innerHTML="";  
        }
    
        if (book.value == "")                                   
        { 
            document.getElementById('errortext').innerHTML="Please write some valid  date!"; 
            return false; 
        }else{
            document.getElementById('errortext').innerHTML="";   
        }
    
    }