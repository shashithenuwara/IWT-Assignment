<?php
include 'config.php';

$Name=$_POST["name"];// get the value from the form
$Email=$_POST["email"];//get the value from the form
$Subject=$_POST["subject"];//get the value from the form
$Message=$_POST["message"];//get the value from the form


$sql="INSERT INTO contact_us(
    Name,
    Email,
    Subject,
    Message
)   VALUES(
    '$Name',
    '$Email',
    '$Subject',
    '$Message'
    
)";//insert values to table

if (mysqli_query($conn, $sql)) {//check the connection
    echo "<script>alert('Record Inserted Successfully!')</script>";
    
  } else {
    echo "<script>alert('Error occurred when inserting data. Please try again later')</script>";
  }
  
  mysqli_close($conn);
?>
