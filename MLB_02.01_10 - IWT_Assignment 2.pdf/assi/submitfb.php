<?php
include 'config.php';

$Name=$_POST["name"];//ger the values from form 
$Email=$_POST["email"];//ger the values from form 
$PhoneNumber=$_POST["phone"];//ger the values from form 
$Date=$_POST["date"];//ger the values from form 
$ProductServiceQuality=$_POST["quality"];//ger the values from form 
$CustomerService=$_POST["service"];//ger the values from form 
$WebsiteExperience=$_POST["website"];//ger the values from form 
$OverallSatisfaction=$_POST["satisfaction"];//ger the values from form 
$AdditionalComments=$_POST["comments"];//ger the values from form 

$sql="INSERT INTO customerfeedback(
    Name,
    Email,
    PhoneNumber,
    Date,
    ProductServiceQuality,
    CustomerService,
    WebsiteExperience,
    OverallSatisfaction,
    AdditionalComments
)   VALUES(
    '$Name',
    '$Email',
    '$PhoneNumber',
    '$Date',
    '$ProductServiceQuality',
    '$CustomerService',
    '$WebsiteExperience',
    '$OverallSatisfaction',
    '$AdditionalComments'
)";//add data to the tables in data base

if (mysqli_query($conn, $sql)) {
    echo "<script>alert('Record Inserted Successfully!')</script>";
    header('location:displayabtus.php');
  } else {
    echo "<script>alert('Error occurred when inserting data. Please try again later')</script>";
  }
  
  mysqli_close($conn);
?>

