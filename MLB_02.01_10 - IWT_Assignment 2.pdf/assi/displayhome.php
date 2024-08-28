<?php
  include 'config.php';
  
?>

<!DOCTYPE html>
<html>
  <head>
    <title>De photography</title>
    <link rel="icon" href="f.ico" type="image/x-icon">
    <link rel="stylesheet" href="styles/style.css">
    <link rel="stylesheet" href="styles/styledisplayhome.css">
    <link rel="stylesheet" href="styles/stylehometable.css">
   
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
        
        <div class="container1">
            <button class="bt"><a href="formhome.php">Add job</a></button>
          
            <table class="table">
                <thead>
                <tr>
                    <th>Name</th>
                    <th>Email</th>
                    <th>Job</th>
                    <th>Date</th>
                    <th>Operations</th>
                </tr>
                </thead>
                      
                <tbody>
                <?php
                $sql="SELECT * from job_table ";
                $result=mysqli_query($conn, $sql);
                if ($result) { 
                    while ($row=mysqli_fetch_assoc($result)){
                      $name=$row['Name'];
                      $email=$row['Email'];
                      $job=$row['Job'];
                      $date=$row['Date'];
                      echo'
                      <tr>
                          <td>'.$name.'</td>
                          <td>'.$email.'</td>
                          <td>'.$job.'</td>
                          <td>'.$date.'</td>
                          <td>
                          <button class="bt"><a href="updatehomeform.php? updateID='.$email.'">Update</a></button>
                          <button class="bt"><a href="deletehome.php? deleteID='.$email.'">Delete</a></button>
                          </td>
                      </tr>';
                    } ;    
                } 
                 
                ?>
                
                </tbody>
                </table>


                
            </div>
        

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