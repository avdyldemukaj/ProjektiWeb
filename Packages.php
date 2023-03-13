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
             <li><a class="navbar-link" href="contact.php">promotion</a></li>
              <li><a class="navbar-link" href="Packages.php">packages</a></li>
                <?php
                      if (!(isset($_SESSION['role']))) {
                       echo "<a class='navbar-link' href='LoginForm.php'>Login</a>";
                    } else if (isset($_SESSION['role']) == 'user') {
                        echo "<a class='navbar-link'  href='logout.php'>Logout</a>";
                    }
                ?>
                <li><a class="navbar-link" href="register.php">Register</a></li>
              </ul>
            </nav>
            </header>
            <div class="titulli">
              <p>Offers</p>
            </div>
            <div class="row">
                <div class="col">
                 <img src="./balii.jpg" width="400px" height="400px">
                 <a href="<?php if (isset($_SESSION['role'])) {
                            echo "PackagesIndividual.php";
                    } else {
                            echo "LoginForm.php";
                    } ?>" class="btnA">
                    <button type="button" class="button" <?php if (!isset($_SESSION['role'])) {
                    echo "onclick=\"alert('You cannot book without being logged in!')\"";
                    } ?>>Individual Packages</button>
                  </a>
                </div>
                 <div class="col">
                  <img src="./couple.jpg" width="400px" height="400px">
                  <a href="<?php if (isset($_SESSION['role'])) {
                            echo "PackagesDuo.php";
                    } else {
                            echo "LoginForm.php";
                    } ?>" class="btnA">
                    <button type="button" class="button" <?php if (!isset($_SESSION['role'])) {
                    echo "onclick=\"alert('You cannot book without being logged in!')\"";
                    } ?>>Duo Packages</button>
                  </a>
                </div>
                 <div class="col">
                  <img src="./family.jpg" width="400px" height="400px">
                  <a href="<?php if (isset($_SESSION['role'])) {
                            echo "PackagesFamily.php";
                    } else {
                            echo "LoginForm.php";
                    } ?>" class="btnA">
                    <button type="button" class="button" <?php if (!isset($_SESSION['role'])) {
                    echo "onclick=\"alert('You cannot book without being logged in!')\"";
                    } ?>>Family Packages</button>
                  </a>
                </div>
              </div>
              <div class="titulli">
                <p>Explore Bali</p>
              </div>
              <div class="row">
                <div class="col">
                 <img src="./download.jpg" width="200px" height="200px">
                 <h3>Ubud</h3>
                 <p>Lundrim me trap, joga, tempull, <br>xhungla dhe muaji i mjaltit</p>
                </div>
                 <div class="col">
                  <img src="./download1.jpg" width="200px" height="200px">
                 <h3>Canggu</h3>
                 <p>Lundrim me trap, joga, tempull, <br>xhungla dhe muaji i mjaltit</p>

                </div>
                 <div class="col">
                  <img src="./download2.jpg" width="200px" height="200px">
                 <h3>Penida Island</h3>
                 <p>Lundrim me trap, joga, tempull, <br>xhungla dhe muaji i mjaltit</p>

                </div>
                <div class="col">
                  <img src="./download3.jpg" width="200px" height="200px">
                 <h3>Nusa Lembongan</h3>
                 <p>Lundrim me trap, joga, tempull, <br>xhungla dhe muaji i mjaltit</p>

                </div>
                <div class="col">
                  <img src="./download4.jpg" width="200px" height="200px">
                 <h3>Kuta</h3>
                 <p>Lundrim me trap, joga, tempull, <br>xhungla dhe muaji i mjaltit</p>

                </div>
                <div class="col">
                  <img src="./download5.jpg" width="200px" height="200px">
                 <h3>Denpasar</h3>
                 <p>Lundrim me trap, joga, tempull, <br>xhungla dhe muaji i mjaltit</p>

                </div>
              
              </div>
             <div class="info">
              <img src="./map.png">
            
              <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d4041159.0106296274!2d115.07154400000002!3d-8.456096!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2dd141d3e8100fa1%3A0x24910fb14b24e690!2sBali%2C%20Indonesia!5e0!3m2!1sen!2sus!4v1677346327176!5m2!1sen!2sus" width="200" height="250" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                </div>
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