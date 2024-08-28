<?php
include 'config.php';

$name = $_POST["name"];//get values from form
$email = $_POST["email"];//get values from form
$address = $_POST["address"];//get values from form
$phone = $_POST["phone"];//get values from form
$dob = $_POST["dob"];//get values from form
$gender = $_POST["gender"];//get values from form
$password = $_POST["password"];//get values from form

$sql = "INSERT INTO userregistration (
  Name,
  Email,
  Address,
  Phone_Number,
  Date_Of_Birth,
  Gender,
  Password
) VALUES (
  '$name',
  '$email',
  '$address',
  '$phone',
  '$dob',
  '$gender',
  '$password'
)";


//insert values to the tables in data base 

if (mysqli_query($conn, $sql)) {
  echo "<script>alert('Record Inserted Successfully!')</script>";
  header("location:Login.php");
  
} else {
  echo "<script>alert('Error occurred when inserting data. Please try again later')</script>";
}

mysqli_close($conn);
?>
