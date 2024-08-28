<!DOCTYPE html>
<html>
    <head>
        <link rel="stylesheet" type="text/css" href="styles/stylereg.css">
        <title>De photography</title>
        <link rel="icon" href="f.ico" type="image/x-icon">
    <link rel="stylesheet" href="styles/style.css">
  </head>
  <body>
  <?php
  include 'config.php';
  ?> 


    <header id="header">
      <img src="pics/logo.png" alt="Site Logo">
      <h1>De photography</h1>
      
    </header>
    <nav id="nav">
      <ul>
        <li><a href="Home.php">Home</a></li>
        <li><a href="recentEvent.php">Recent Events</a></li>
        <li><a href="packages.php">Packages</a></li>
        <li><a href="contactus.php">Contact us</a></li>
        <li><a href="aboutUs.php">About Us</a></li>
      </ul>
      <div>
        <button><a href="#">Register</a></button>
        <button><a href="Login.php">Login</a></button>
      </div>
    </nav>
    <main>
      <main>
        <main>
          <div id="registration_form">
            <h2>Registration</h2>
            <form action="submitreg.php" method="POST">
              <label for="name">Name:</label>
              <input type="text" id="name" name="name" required>
        
              <label for="email">Email:</label>
              <input type="email" id="email" name="email" required>
        
              <label for="address">Address:</label>
              <input type="text" id="address" name="address" required>
        
              <label for="phone">Phone Number:</label>
              <input type="tel" id="phone" name="phone" required>
        
              <label for="dob">Date of Birth:</label>
              <input type="date" id="dob" name="dob" required>
        
              <label for="gender">Gender:</label>
              <select id="gender" name="gender" required>
                <option value="">Select</option>
                <option value="male">Male</option>
                <option value="female">Female</option>
                <option value="other">Other</option>
              </select>
        

              <label for="password">Password:</label>
              <input type="password" id="password" name="password" required>
        
              <label for="confirm-password">Confirm Password:</label>
              <input type="password" id="confirm-password" name="confirm_password" required>


              <div class="checkbox-container">
                <input type="checkbox" id="privacy-checkbox" required>
                <label for="privacy-checkbox">I agree to the <a href="privacy.html" target="_blank">privacy policy</a>.</label>
              </div>
        
              <div class="button-container">
                <input type="submit" value="Register">
                <input type="reset" value="Clear">
              </div>
            </form>
          </div>
        </main>
        
          </form>
        </div>
      </main>
      

    </main>
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
