<?php session_start() ?>
<!DOCTYPE html>
<html>
<head>
  <title>Packages</title>
  <link rel="stylesheet" href="Packages.css" />
</head>



<body>
        <header class="header">
            <h3 class="logo">Packages<span></span></h3>
            <nav class="navbar">
              <ul class="navbar-list">
                <li><a class="navbar-link" href="Homepage.php">home</a></li>
                <li><a class="navbar-link" href="AboutUs.php">about us</a></li>
                <li><a class="navbar-link" href="PackagesDuo.php">packages</a></li>
                <?php
                      if (!(isset($_SESSION['user_type']))) {
                       echo "<a class='navbar-link' href='LoginForm.php'>Login</a>";
                    } else if (isset($_SESSION['user_type']) == 'user') {
                        echo "<a class='navbar-link'  href='logout.php'>Logout</a>";
                    }
                ?>
                <li><a class="navbar-link" href="register.php">Register</a></li>
              </ul>
            </nav>
            </header>



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

            <script src="Packages.js"></script>
</body>

</html>