<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Login Form</title>
    <link rel="stylesheet" href="LoginForm.css">
  </head>
  <body>
    
    <form action="" class="form">
      <span></span>
      <span></span>
      <span></span>
      <span></span>
      
      <div class="form-inner">
          <h2>SIGN IN</h2>
          <div class="content">
            <?php
                include 'configRegister.php';
                $logini = new DatabaseRegister();
                $check = $logini->check();
               
            ?> 
              <form action="" name="myForm"  method="post" onsubmit="return login()">
              <input type="email" id="emaili" placeholder="User Name">
              <input type="password" id="passi" placeholder="Password">
              <!-- <button type="submit" onclick="login()" class="brn" href="Homepage.php">LOGIN</button> -->
              <input type="submit" name="submit" value="Login" id="dnButt"><br>
              <div class="chicken">
             <a href="">Forgot Password?</a> &ensp;
             <a href="register.php">Sign Up</a>
            </div>
          </div>
      </div>
    </form>
      
      <script src="LoginForm.js"></script>
  
</body>
</html>