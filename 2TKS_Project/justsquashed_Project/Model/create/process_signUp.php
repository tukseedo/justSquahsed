<?php
   $custUserName = $_POST['username'];
   $firstname = $_POST['firstname'];
   $lastname = $_POST['username'];
   $email = $_POST['email'];
   $phone = $_POST['phone'];
   $age = $_POST['age'];
   $custPassWord = $_POST['password'];
   $confirm_password = $_POST['confirm_password'];
   $member = "Non Member";
   
    include '../connection.php';
    $result = "INSERT INTO customer
    VALUES('$custUserName','$firstname','$lastname','$email','$phone','$age ','$custPassWord','$member')";
    $que =mysqli_query($conn,$result);
    if($que== true) 
    {
        header('Location: /2TKS_Project/justsquashed_Project/View/login.php');
    }else
    {
        header('Location: /2TKS_Project/justsquashed_Project/View/signUp.php');
    }
?>
