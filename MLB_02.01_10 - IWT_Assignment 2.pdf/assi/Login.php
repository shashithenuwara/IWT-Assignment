<?php
    require('config.php');
    session_start();
?>

<!DOCTYPE html>
<html>
<head>
    <title>Login Page</title>
    <link rel="stylesheet" type="text/css" href="styles/stylelogin.css">
    <link rel="icon" href="f.ico" type="image/x-icon">
    <link rel="stylesheet" href="styles/style.css">
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
        <button><a href="#">Login</a></button>
      </div>
    </nav>  

  <div class="container">
    <h1>Login</h1>
    <form method="POST">
      <label for="username">Username:</label>
      <input type="text" id="username" name="username" required>
      <label for="password" name="">Password:</label>
      <input type="password" id="password" name="password" required>
      <input type="submit" value="Login" name="login_button">
    </form>
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


  <?php
    if(isset($_POST['login_button'])){//checking if the loging button clicke
        $_SESSION["username"] = $_POST['username'];//get username
        $_SESSION["password"] = $_POST['password'];//get password
        $sql = "SELECT Password,Email From userregistration WHERE Email = '".$_SESSION['username']."';";
        $result = $conn->query($sql);//execute sql query 
        if($result->num_rows>0){
            while($row = $result->fetch_assoc()){
                $dbun = $row['Email'];//get email from DB
                $dbpw = $row['Password'];//GET PASSWORD FROM db
                $login_time = date("h:i:sa");//Get curren time
               
                if($dbpw == $_SESSION['password']){//check enter password and data base password whether they are equal
                  $_SESSION['username']=$dbun;
                    echo "<script>alert('Login Successful...!!!');
                    window.location.href='Home.php';
                </script>";
                    $query = "INSERT INTO logininfo(Username,LoginTime) VALUES('".$dbun."','".$login_time."');";
                    if($conn->query($query)===true){//check query runs successfully 
                        echo "<script>alert('Information Securly stored...!!!')</script>";
                        
                    }else{
                        echo "<script>alert('Information didn't save...!!!');
                </script>";
                    }
                   
                }else{
                    echo "<script>alert('Cannot Login Please check your credentials!!!')";
                    "location.replace(./Login.php)</script>";
                
                }



                
            }
        }else{
            echo "No record found";
        }
    }
  ?>
</body>
</html>