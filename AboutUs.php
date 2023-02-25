<?php session_start() ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <title>About Us</title>
    <link rel="stylesheet" href="AboutUs.css">
    <script>
      document.addEventListener("DOMContentLoaded",  () => {
      
        var allSliders = []
      
        document.querySelectorAll('.slider-container').forEach( (slider) => {
      
          allSliders.push(new ImageSlider(slider)) 
      
        })
      })
      </script>
</head>
<body>
    <header class="header">
        <h3 class="logo">About Us<span></span></h3> 
        <nav class="navbar">
          <li class="navlist">
            
        </li>
          <ul class="navbar-list">
            <li><a class="navbar-link" href="Homepage.php">home</a></li>
            <li><a class="navbar-link" href="AboutUs.php">about us</a></li>
            <li><a class="navbar-link" href="PackagesDuo.php">packages</a></li>
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
      <div>
          <div class="slider-container">
            <div class="arrow left">
              <img src="./img/left.png">
            </div>
      
            <div class="arrow right">
              <img src="./img/right.png">
            </div>
      
            <div class="slider-inner">
              <img src="./img/swiper.jpg">
              <img src="./img/swiper1.jpg">
              <img src="./img/swiper2.webp">
              <img src="./img/swiper3.webp">
              <img src="./img/swiper4.jpg">
              <img src="./img/swiper5.jpg">
              <img src="./img/swiper6.jpg">
              <img src="./img/swiper7.jpg">
              <img src="./img/swiper8.jpg">

            </div>
          </div>
      <div id="background-text">
        <h1 id="background-text-2">What's There To Know About Us</h1>
          <p id="background-text-3">We are not a big company but sure a successful one.</p>
          <p id="background-text-3">Our purpose is to bring as many tourist on this beautiful country called Bali.Not because of individual gain but because this peace of nature beauty doesn't get nearly the appreciation that it desserves for its beauties.</p>
          <p id="background-text-3">Bali is a world treassure which if you are planning on going ona vacation with your loved ones, even your significant other,its simply the best choice of place,you can't go wrong with it.</p>
          <p id="background-text-4">Soo what are you still waiting? Join us on a wonderful adventure on this beautiful place. You won't regret it!</p>  
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
      
    <script src="AboutUs.js"></script>
</body>
</html>