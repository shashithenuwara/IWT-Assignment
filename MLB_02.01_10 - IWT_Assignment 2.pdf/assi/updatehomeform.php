<?php
  include 'config.php';
  $email=$_GET['updateID'];//get wich record that need to be updated
  if(isset($_POST['update'])){
    $name=$_POST['name'];//get values from form
    $job=$_POST['job'];
    $date=$_POST['date'];

    $sql="UPDATE job_table SET  Name='$name', Email='$email', Job='$job', Date='$date'
    where Email='$email'";//update the record
    $result=mysqli_query($conn, $sql);
    if ($result) {
        
        header('location:displayhome.php');
    } else {
        echo "<script>alert('Error occurred when inserting data. Please try again later')</script>";
}
  
}
mysqli_close($conn);
?>

<!DOCTYPE html>
<html>
  <head>
    <title>De photography</title>
    <link rel="icon" href="f.ico" type="image/x-icon">
    <link rel="stylesheet" href="styles/style.css">
    <link rel="stylesheet" href="styles/styleHomeform.css">
  </head>
  <body>
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
        <button><a href="reg.php">Register</a></button>
        <button><a href="Login.php">Login</a></button>

      </div>
    </nav>
    <main>
      <center>
        <div class="container">
        <form method="POST">
            <label for="name">Name:</label>
            <input type="text" id="name" name="name" required><br><br>
    
            <label for="email">Email:</label>
            <input type="email" id="email" name="email" required><br><br>
        
            <label for="job">Job Description:</label>
            <input type="text" id="job" name="job" required><br><br>
        
            <label for="date">Date:</label>
            <input type="date" id="date" name="date" required><br><br>
        
            <input type="submit" value="update" name="update">
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