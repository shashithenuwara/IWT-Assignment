<?php
$servername="localhost";
$username="root";
$password="";
$db="event_photography_db";


$conn=new mysqli($servername,$username,$password,$db);

if($conn->connect_error){
    die("connection failed: ".$conn->connect_error);
}
echo "connected successfully";
?>
