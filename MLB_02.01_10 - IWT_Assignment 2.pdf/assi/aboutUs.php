<!DOCTYPE html>
<html>
  <head>
    
    <title>De photography</title>
    <link rel="icon" href="f.ico" type="image/x-icon">
    <link rel="stylesheet" href="styles/style.css">
    <link rel="stylesheet" href="styles/styleabtus.css">
  </head>
  <body>
    <header id="header">
      <img src="pics/logo.png" alt="Site Logo">
      <h1>De photography</h1>
      
    </header>
    <nav id="nav">
      <ul>
        <li><a href="Home.php" class="active">Home</a></li>
        <li><a href="recentEvent.php">Recent Events</a></li>
        <li><a href="packages.php">Packages</a></li>
        <li><a href="contactus.php">Contact us</a></li>
        <li><a href="#">About Us</a></li>
      </ul>
      <div>
        <button><a href="reg.php">Register</a></button>
        <button><a href="Login.php">Login</a></button>
      </div>
    </nav>
    <main>
        <center>
          <body>
            <section class="sec1">
             <center><img src="pics/Shashini.jpg" alt="image"height="210" width="720"></center> 
              
                <h2>About Us</h2>
                <p>Welcome to our Event Photography Management System! We are a team of dedicated photographers and event organizers passionate about capturing and preserving the best moments of your special occasions.</p>
                <p>Our system provides comprehensive event photography services, including pre-event planning, on-site photography, and post-event photo editing and delivery. We strive to deliver high-quality photographs that capture the essence of your events and create lasting memories.</p>
                <p>With our user-friendly interface, you can easily manage your event photos, view and select your favorite shots, order prints, and share them with your friends and family. We aim to make the entire process seamless and enjoyable for our clients.</p>
                <p>Whether it's a wedding, corporate event, birthday party, or any other special occasion, trust us to handle your event photography needs with professionalism and creativity.</p>
              
              
            </section>   
            <section class="sec1">
            <form action="submitfb.php" method="post">
              <label for="name">Name:</label><br>
              <input type="text" id="name" name="name" required><br><br>

              <label for="email">Email:</label><br>
              <input type="email" id="email" name="email" required><br><br>

              <label for="phone">Phone:</label><br>
              <input type="text" id="phone" name="phone" required><br><br>

              <label for="date">Date:</label><br>
              <input type="date" id="date" name="date" required><br><br>

              <h3>Rate the following aspects on a scale of 1 to 5:</h3>

              <label for="quality">Product/Service Quality:</label><br>
              <input type="number" id="quality" name="quality" min="1" max="5" required><br><br>

              <label for="service">Customer Service:</label><br>
              <input type="number" id="service" name="service" min="1" max="5" required><br><br>

              <label for="website">Website/User Experience:</label><br>
              <input type="number" id="website" name="website" min="1" max="5" required><br><br>

              <label for="satisfaction">Overall Satisfaction:</label><br>
              <input type="number" id="satisfaction" name="satisfaction" min="1" max="5" required><br><br>

              <label for="comments">Additional Comments:</label><br>
              <textarea id="comments" name="comments" rows="4" cols="50"></textarea><br><br>

              <input type="submit" value="Submit">
            </section> 
        </body>
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