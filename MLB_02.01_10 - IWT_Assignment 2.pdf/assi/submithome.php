<?php
  include 'config.php';


  if(isset($_POST['submit'])){//check whether submit buttones is clicked 
    $name=$_POST['name'];//get values from form
    $email=$_POST['email'];//get values from form
    $job=$_POST['job'];//get values from form
    $date=$_POST['date'];//get values from form

    $sql="INSERT INTO job_table(
        Name,
        Email,
        Job,
        Date
        )
    values
    (
        '$name',
        '$email',
        '$job',
        '$date')";

        //insert values to the table
        
  $result=mysqli_query($conn, $sql);
  if ($result) {
    header('location:displayhome.php');
} else {
  echo "<script>alert('Error occurred when inserting data. Please try again later')</script>";
}
  
}
mysqli_close($conn);
?>