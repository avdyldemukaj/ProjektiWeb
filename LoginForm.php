<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Login Form</title>
    <link rel="stylesheet" href="LoginForm.css">
  </head>
  <body>
    
    <div action="" class="form">
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
            <!-- onsubmit="return login()" -->
            <form action="" name="myForm"  method="post" >
              <input type="email" id="emaili" placeholder="User Name" name="email">
              <input type="password" id="passi" placeholder="Password" name="password">
              <input type="submit" name="submit" value="Login" id="dnButt"><br>
              <div class="chicken">
             <a href="">Forgot Password?</a> &ensp;
             <a href="register.php">Sign Up</a>
            </form>
            </div>
          </div>
      </div>
</div>
      
      <script src="LoginForm.js"></script>
  
</body>
</html>