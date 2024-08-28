<!DOCTYPE html>
<html>
  <head>
    
    <title>De photography</title>
    <link rel="icon" href="f.ico" type="image/x-icon">
    <link rel="stylesheet" href="styles/style.css">
    <link rel="stylesheet" href="Stylecontact.css">
  </head>
  <body>
    <header id="header">
      <img src="pics/logo.png" alt="Site Logo">
      <h1>De photography</h1>
      
    </header>
    <nav id="nav">
      <ul>
        <li><a href="Home.php" >Home</a></li>
        <li><a href="recentEvent.php">Recent Events</a></li>
        <li><a href="packages.php">Packages</a></li>
        <li><a href="#">Contact us</a></li>
        <li><a href="aboutUs.php">About Us</a></li>
      </ul>
      <div>
        <button><a href="reg.php">Register</a></button>
        <button><a href="Login.php">Login</a></button>

      </div>
    </nav>
    <main>
        <center>
          <div class="container">
            <h3>Contact US</h3>
            <form method="post" action="submitcon.php">
              <label for="name">Name</label>
              <input type="text" id="name" name="name" required>
            
              <label for="email">Email</label>
              <input type="email" id="email" name="email" required>
            
              <label for="subject">Subject</label>
              <input type="text" id="subject" name="subject" required>
            
              <label for="message">Message</label>
              <textarea id="message" name="message" required></textarea>
            
              <input type="submit" value="Submit">
            </form>  
          </div>
        </center>
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
