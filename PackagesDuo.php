<?php session_start() ?>
<!DOCTYPE html>

<title>PackagesDuo</title>



<link rel="stylesheet" type="text/css" href="PackagesDuo.css">

</head>

<body>

<header class="header">
      <h3 class="logo">Duo<span></span></h3>
      <nav class="navbar">
        <ul class="navbar-list">
          <li><a class="navbar-link" href="Homepage.php">home</a></li>
          <li><a class="navbar-link" href="AboutUs.php">about us</a></li>
          <li><a class="navbar-link" href="contact.php">promotion</a></li>
          <li><a class="navbar-link" href="Packages.php">packages</a></li>
          <?php
            if (!(isset($_SESSION['user_type']))) {
                echo "<a class='navbar-link' href='LoginForm.php'>Login</a>";
            } else if (isset($_SESSION['user_type']) == 'user') {
                echo "<a class='navbar-link'  href='logout.php'>Logout</a>";
            }
            ?>
          <li><a class="navbar-link" id="REGISTER" href="register.php">Register</a></li>
        </ul>
      </nav>
    </header>

<br><br><br><br><br>

<div class="text">
  <h2 id="trip">One trip, two destinations</h2>
  <p id="paro">It's great to be able to swim in the ocean and soak up the sun on a beautiful beach, but imagine also getting able to explore the cultural and historic attractions of an intriguing city! With our duos, you get to enjoy the best of both worlds. 

Expand your horizons and experience two facets of the same destination in one trip. Discover the hidden gems of the Caribbean and Central America with these wonderful programs that combine lazing on the beach with the discovery of a city, or even seaside relaxation with a few days of snorkelling in a gorgeous coral reef.</p>

<div class="row">
            <div class="col">
                <figure>
                 <img src="./download.jpg" width="300px" height="300px"/>
                 <figcaption>
                    Ubud<br>
                    Lundrim me trap, joga, tempull,<br> xhungla dhe muaji i mjaltit
                    <br>
                    <br>
                    Duration:<br>
                   <span> 5D/4N</span> <button>Learn more</button>
        </figcaption>
        </figure>
                </div>

                 <div class="col">
                 <figure>
                  <img src="./download1.jpg" width="300px" height="300px"/>
                  <figcaption>
                  Canggu<br>
                    Lundrim me trap, joga, tempull,<br> xhungla dhe muaji i mjaltit
                    <br>
                    <br>
                    Duration:<br>
                   <span> 5D/4N</span>
                   <button>Learn more</button>
        </figcaption>
        </figure>
                </div>

                 <div class="col">
                 <figure>
                  <img src="./download2.jpg" width="300px" height="300px"/>
                  <figcaption>
                  Penida Island<br>
                    Lundrim me trap, joga, tempull,<br> xhungla dhe muaji i mjaltit
                    <br>
                    <br>
                    Duration:<br>
                   <span> 5D/4N</span>
                   <button>Learn more</button>
        </figcaption>
        </figure>
                </div>

                <div class="col">
                <figure>
                  <img src="./download3.jpg" width="300px" height="300px"/>
                  <figcaption>
                  Nusa Lembongan<br>
                    Lundrim me trap, joga, tempull,<br> xhungla dhe muaji i mjaltit
                    <br>
                    <br>
                    Duration:<br>
                   <span> 5D/4N</span>
                   <button>Learn more</button>
        </figcaption>
        </figure>
                </div>
        </div>

        <div class="row">
            <div class="col">
                <figure>
                 <img src="./download.jpg" width="300px" height="300px"/>
                 <figcaption>
                    Ubud<br>
                    Lundrim me trap, joga, tempull,<br> xhungla dhe muaji i mjaltit
                    <br>
                    <br>
                    Duration:<br>
                   <span> 5D/4N</span> <button>Learn more</button>
        </figcaption>
        </figure>
                </div>

                 <div class="col">
                 <figure>
                  <img src="./download1.jpg" width="300px" height="300px"/>
                  <figcaption>
                  Canggu<br>
                    Lundrim me trap, joga, tempull,<br> xhungla dhe muaji i mjaltit
                    <br>
                    <br>
                    Duration:<br>
                   <span> 5D/4N</span>
                   <button>Learn more</button>
        </figcaption>
        </figure>
                </div>

                 <div class="col">
                 <figure>
                  <img src="./download2.jpg" width="300px" height="300px"/>
                  <figcaption>
                  Penida Island<br>
                    Lundrim me trap, joga, tempull,<br> xhungla dhe muaji i mjaltit
                    <br>
                    <br>
                    Duration:<br>
                   <span> 5D/4N</span>
                   <button>Learn more</button>
        </figcaption>
        </figure>
                </div>

                <div class="col">
                <figure>
                  <img src="./download3.jpg" width="300px" height="300px"/>
                  <figcaption>
                  Nusa Lembongan<br>
                    Lundrim me trap, joga, tempull,<br> xhungla dhe muaji i mjaltit
                    <br>
                    <br>
                    Duration:<br>
                   <span> 5D/4N</span>
                   <button>Learn more</button>
        </figcaption>
        </figure>
                </div>
        </div>
        <br>
        <br>
        <br>
        <br>
    <h1 class="main-text">PackageDuo Application</h1><br><br><br>
        <main id="mainStyle">
    <div class="left-side">
        <?php
            include 'confingPackagesDuo.php';
            $book = new DatabasePackagesDuo();
            $check = $book->check();
        ?> 
        <form name="myForm" onsubmit="return validatePackagesDuo()" method="post">
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
                <input type="text" class="formStyle" id="inputAddress" name="adress" placeholder="Write your adress... "><br>
                <span class="error" id="erroradress"></span>
            </div><br>
            
            <div>
                <label for="inputBook" class="form-label">Data:<br></label>
                <input type="date" style="padding:10px;" name="book" id="txtA" ></textarea><br>
                <span class="error" id="errortext"></span>
            </div><br>
            
            <input type="submit" name="submit" value="Book" id="dnButt"><br></input>
            </form>

    </div>

    <div class="right-side">
        
        <img src="./bali-individual.jpg">
        
    </div>
    
</main>

    <br><br>
    
    <<footer>
        <div class="footer">
             
        <div class="footer1">
            
            <h4>Roam The Earth Website</h4> <br>
            <p class="pg">Our website aims to make your traveling as acomodating as it gets
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