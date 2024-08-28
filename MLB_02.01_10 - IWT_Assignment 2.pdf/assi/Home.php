<?php
  session_start();
?>
<!DOCTYPE html>
<html>
  <head>
    <title>De photography</title>
    <link rel="icon" href="f.ico" type="image/x-icon">
    <link rel="stylesheet" href="styles/style.css">
    <link rel="stylesheet" href="styles/styleHome.css">
  </head>

  <body>

    <header id="header">
      <img src="pics/logo.png" alt="Site Logo">
      <h1>De photography</h1>
      <div class="username">
      <?php
        
        if(isset($_SESSION['username'])){
          echo "<br><br><br><h4>Welcome, ".$_SESSION['username']."!</h4>";
        }
        ?>
      </div>
     
    </header>

    <!--navigation bar section-->

    <nav id="nav">

      <ul>
        <li><a href="#" class="active">Home</a></li>
        <li><a href="recentEvent.php">Recent Events</a></li>
        <li><a href="packages.php">Packages</a></li>
        <li><a href="contactus.php">Contact us</a></li>
        <li><a href="aboutUs.php">About Us</a></li>
      </ul>

      <div>
        <button><a href="reg.php">Register</a></button>
        <button><a href="Login.php">Login</a></button>
        <button><a href="Logout.php">Logout</a></button>
      </div>

    </nav>


    <!--main section-->
    <main>
      <br>

      <div>
        <center>
        <img src="pics/pic1.png" height="400px" width="60%" class="mainimg">
        </center>
      </div>

      <div width="50%">
        <section id="section1">
        <header>
          <center>
          <h3 id="deshed">Welcome to our Page!</h3>
          <br>
          <h5>Experience the power of our Event Photography Management System.<br><br>Streamline event scheduling, photo organization, and client communication.<br><br>Elevate your photography with testimonials and event-specific capabilities.<br><br> Join us today to unlock your full potential.</h5>
          </center>
        </header>
        </section>
      </div>
      
      <div>
        <div id="fourpics">
          <img src="pics/photo1.png" alt="Photo 1" height="200px">
          <img src="pics/photo2.png" alt="Photo 2" height="200px">
          <img src="pics/photo3.png" alt="Photo 3" height="200px">
          <img src="pics/photo4.png" alt="Photo 4" height="200px">
        </div>
      </div>

      <div>
      <button><a href="formhome.php">click me for jobs</a></button>
      </div>

      <!--footer section-->
      <footer id="footer">
        <div>
          <img src="pics/logo.png" alt="Site Logo" height="50px">
          <h3>De photography</h3>
          <p>Follow us on social media:</p>

          <div>
            <a href="https://www.facebook.com/example" target="_blank"><img src="pics/facebook.png" alt="Facebook"></a>
            <a href="https://www.twitter.com/example" target="_blank"><img src="pics/twitter.png" alt="Twitter"></a>
            <a href="https://www.instagram.com/example" target="_blank"><img src="pics/instagram.png" alt="Instagram"></a>
          </div>

        </div>

        <div>
          <p>Contact us:</p>
          <p>Phone: 076999999</p>
          <p>Email: pic321@gmail.com</p>
        </div>
        
      </footer>

    </main>
  </body>
</html>
