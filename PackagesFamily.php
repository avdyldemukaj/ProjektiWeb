<?php session_start() ?>
<!DOCTYPE html>

<title>PackagesFamily</title>



<link rel="stylesheet" type="text/css" href="PackagesFamily.css">

</head>

<body>

<header class="header">
        <h3 class="logo">PackagesFamily<span></span></h3>
        <nav class="navbar">
          <li class="navlist">
            
        </li>
          <ul class="navbar-list">
            <li><a class="navbar-link" href="Homepage.php">home</a></li>
            <li><a class="navbar-link" href="AboutUs.php">about us</a></li>
            <li><a class="navbar-link" href="Packages.php">packages</a></li>
            <?php
            if (!(isset($_SESSION['user_type']))) {
                echo "<a class='navbar-link' href='LoginForm.php'>Login</a>";
            } else if (isset($_SESSION['user_type']) == 'user') {
                echo "<a class='navbar-link' href='logout.php'>Logout</a>";
            }
            ?>
            <li><a class="navbar-link" id="REGISTER" href="register.php">Register</a></li>
          </ul>
        </nav>
      </header>

<br><br>
    
    <h1 class="main-text">PackageFamily</h1><br><br><br>
        <main id="mainStyle">
    <div class="left-side">
        <?php
            include 'configPackagesFamily.php';
            $donateMoneyRegister = new DatabasePackagesFamily();
            $check = $donateMoneyRegister->check();
        ?> 
        <form name="myForm" onsubmit="return validatePackagesFamily()" method="post">
            <div>
                <label for="formName" class="form-label">Name: <br></label>
                <input type="text" class="formStyle" id="formName" name="name" placeholder="Write your name here..."><br>
                <span class="error" id="errorname"></span>
    
            </div><br>
    
            <div >
                <label for="formSurname" class="form-label">Surname: <br></label>
                <input type="text" class="formStyle" id="formSurname" name="surname" placeholder="Write your surname here..."><br>
                <span class="error" id="errorsurname"></span>
    
            </div><br>
    
            <div>
                <label for="inputEmail" class="form-label">Email:<br></label>
                <input type="email" class="formStyle" id="inputEmail" name="email" placeholder="Write your email here..."><br>
                <span class="error" id="erroremail"></span>
    
            </div><br>
            <div>
                <label for="inputPhone" class="form-label">Phone Number:<br></label>
                <input type="number" class="formStyle" id="inputNumber" name="number" placeholder="Write your phone number here... "><br>
                <span class="error" id="errornumber"></span>
            </div><br>
            
            <div>
                <label for="inputAddress" class="form-label">Adress:<br></label>
                <input type="text" class="formStyle" id="inputAddress" name="adress" placeholder="Write the adress you want to send the clothes to... "><br>
                <span class="error" id="erroradress"></span>
            </div><br>
            
            <div>
                <label for="inputMoney" class="form-label">Money:<br></label>
                <textarea name="money" id="txtA"  placeholder="Write here what clothes you want to give... "></textarea><br>
                <span class="error" id="errortext"></span>
            </div><br>
            
            <input type="submit" name="submit" value="Donate" id="dnButt"><br></input>
            </form>

    </div>

    <div class="right-side">
        
        <img src="./Fotot/donatemoney.png">
        
    </div>
    
</main>

    <br><br>
    
    <<footer>
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
    <script src="PackagesFamily.js"></script>
</body>

</html>