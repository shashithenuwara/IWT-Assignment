<?php
include 'config.php';

if(isset($_GET['deleteAUID'])){
    $email=$_GET['deleteAUID'];

    $sql="DELETE FROM customerfeedback where Email='$email'";
    $result=mysqli_query($conn,$sql);
    if($result){
        header('location:displayabtus.php');
    }else{
        die(mysqli_error($conn));
    }
}