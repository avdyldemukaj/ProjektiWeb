<?php session_start() ?>
<!DOCTYPE HTML>
<head>

    <title>Contact</title>
    <link rel="stylesheet" type="text/css" href="contact.css">
    
    </head>
<body>

    
    <header class="header">
        <h3 class="logo">Promotion<span></span></h3> 
        <nav class="navbar">
         
          <ul class="navbar-list">
            <li><a class="navbar-link" href="Homepage.php">home</a></li>
            <li><a class="navbar-link" href="AboutUs.php">about us</a></li>
            <li><a class="navbar-link" href="contact.php">promotion</a></li>
            <li><a class="navbar-link" href="Packages.php">packages</a></li>
            <?php
            if (!(isset($_SESSION['role']))) {
                echo "<a class='navbar-link' href='LoginForm.php'>Login</a>";
            } else if (isset($_SESSION['role']) == 'user') {
                echo "<a class='navbar-link' href='logout.php'>Logout</a>";
            }
            ?>
            <li><a class="navbar-link" id="REGISTER" href="register.php">Register</a></li>
          </ul>
        </nav>
      </header>
      <h1 class="main-text">Contact Us</h1><br> <br>  
    <main id="mainSize">
    
        
        <div class="leftside">

        <?php
            include 'configContact.php';
            $contactForm = new DatabaseDonateContact();
            $check = $contactForm->check();
        
        ?>
    
        <form name="myForm" onsubmit="return validateForm()" method="post">
         <table class="form-style">
            <tr>
               <td>
                  <label>
                     Name: 
                  </label>
               </td>
               <td>
                  <input type="text" name="name" class="long">
                  <span class="error" id="errorname"></span>
               </td>
            </tr>
            <tr>
               <td>
                  <label>
                    Email:
                  </label> 
               </td>
               <td>
                  <input type="email" name="email" class="long"/>
                  <span class="error" id="erroremail"></span>
               </td>
            </tr>
            <tr>
               <td>
                  <label>
                     Message: 
                  </label>
               </td>
               <td>
                  <textarea name="message" class="long field-textarea"></textarea>
                  <span class="error" id="errormsg"></span>
               </td>
            </tr>
            <tr>
               <td></td>
               <td>
                  <input class="btni" type="submit" name ="submit" value="Send">      
                  <input type="reset" value="Reset"> <br><br>
                  <input type="file" name="image" id="image" >
               </td>
            </tr>
           
         </table>
            

      </form>
            
        </div>
        
        <div class="rightsidee">
            <img src="conacti.jpg">
         </div><br><br>
   </main>
   <br>
           
    <footer>
        <div class="footer">
             
        <div class="footer1">
            
            <h4>Roam The Earth Website</h4> <br>
            <p class="p">Our website aims to make your traveling as acomodating as it gets
              <br>From finding the right destination for you
              <br>To making your experience unforgetable</p>
        </div>
        <div class="footer2">
          <h4>Contact us :</h4>
          <ul class="ul1"><br>
            <li class="li1"><p>+33845120660</p></li>
            <li class="li1"><p>+3834467111</p></li>
          </ul>
        </div>
      </div>
      
      
    </footer>
  <script src="contact.js"></script>
</body>


</html>