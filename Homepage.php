<?php session_start() ?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta name ="viweport" content="width=device-width, initial-scale=1.0">
    <title>Home Page</title>
    <link rel="stylesheet" href="Homepage.css" />
  </head>
  <body>
    <header class="header">
      <h3 class="logo">Roam The Earth<span></span></h3>
      <nav class="navbar">
        <ul class="navbar-list">
          <li><a class="navbar-link" href="#hero">home</a></li>
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
          <li><a class="navbar-link" id="REGISTER" href="register.php">Register</a></li>
        </ul>
      </nav>
    </header>
    <div class="slider">
      <div class="slides">
          <input type="radio" name="radio-btn" id="radio1">
          <input type="radio" name="radio-btn" id="radio2">
          <input type="radio" name="radio-btn" id="radio3">
          <input type="radio" name="radio-btn" id="radio4">
          <div class="slide first">
              <img src="./img/BALI.jpg" alt="img">
          </div>

          <div class="slide" id="thailand">
              <img src="./img/bali1.jpg" alt="img">
          </div>

          <div class="slide">
              <img src="./img/bali2.jpg" alt="img">
          </div>

          <div class="slide">
              <img src="./img/bali3.webp" alt="img">
          </div>
          <div class="navigation-auto">
              <div class="auto-btn1"></div>
              <div class="auto-btn2"></div>
              <div class="auto-btn3"></div>
              <div class="auto-btn4"></div>
          </div>
      </div>
      <div class="manual-navigation">
          <label for="radio1" class="manual-btn"></label>
          <label for="radio2" class="manual-btn"></label>
          <label for="radio3" class="manual-btn"></label>
          <label for="radio4" class="manual-btn"></label>
      </div>
  </div>  
  <div class="grid">
    <div class="six">
      <strong class="strong1">Why Should You Visit Bali?</strong><br><br>
        <p>There are many reasons why people visit Bali, including its stunning natural beauty, rich culture, and vibrant nightlife. Some other reasons why you might consider visiting Bali include:</p> 
          <br><p>1.Affordable: Bali is generally considered to be an affordable destination compared to other popular tourist destinations in Southeast Asia. Accommodation, food, and transportation costs are relatively low, making it a budget-friendly destination for travelers.</p>
          <br><p>2.Beautiful beaches: Bali is home to a number of beautiful beaches, with golden sands and crystal clear waters. These beaches are popular for swimming, surfing, and sunbathing, and offer a variety of water sports and activities.</p>
          <br><p>3.Cultural attractions: Bali is a culturally rich island, with a mix of traditional and modern influences. Visitors can experience the island's unique culture through its music, dance, art, and food.</p>
          <br><p>4.Delicious food: Bali is known for its delicious food, with a range of local and international dishes available. The island is home to a variety of restaurants and street food stalls, offering something for everyone.</p>
          <br><p>5.Vibrant nightlife: Bali is also known for its vibrant nightlife, with a range of bars, clubs, and live music venues to choose from.</p>
          </div>
        </div>
  <div class="container">
    <div class="box">
      <div class="icon"><i class="fa fa-info" aria-hidden="true">About</i></div>
      <div class="content">
        <p>Bali is a small Indonesian island,known for its beautiful beaches, unique culture, and stunning natural landscapes.Bali is home to a number of tourist attractions, including the famous Temple of the Tooth, the Tirta Empul Temple, and the Uluwatu Temple. Bali is also known for its vibrant nightlife and delicious food.</p>
      </div>
    </div>
    <div class="box">
      <div class="icon"><i class="fa fa-search" aria-hidden="true">Top pics</i></div>
      <div class="content">
        <ul id="UL1">
          <li>Temple of the Tooth;</li>
          <li>Tirta Empul Temple;</li>
          <li>Kuta Beach;</li>
          <li>Uluwatu Temple;</li>
          <li>Seminyak.</li>
      </ul>
        
      </div>
    </div>

    <div class="box">
      <div class="icon"><i class="fa fa-map-marker" aria-hidden="true">Location</i></div>
      <div class="content">
        <p>Bali is a small Indonesian island located in the westernmost end of the Lesser Sunda Islands, lying between Java to the west and Lombok to the east. It is located in Southeast Asia and is part of the Republic of Indonesia.</p>
      </div>
    </div>
</div>
 
<footer>
  <div class="footer">
       
  <div class="footer1">
      
      <h4>Roam The Earth Website</h4> <br>
      <p class="p">Our website aims to make your traveling as acomodating as it gets
        <br>From finding the right destination for you
        <br>To making ur experience unforgetable</p>
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
    <script src="Homepage.js"></script>
  </body>
</html>
