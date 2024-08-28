<?php
include 'config.php';

if(isset($_GET['deleteID'])){
    $email=$_GET['deleteID'];

    $sql="DELETE FROM job_table where Email='$email'";
    $result=mysqli_query($conn,$sql);
    if($result){
        header('location:displayhome.php');
    }else{
        die(mysqli_error($conn));
    }
}