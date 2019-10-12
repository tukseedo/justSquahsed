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

    if(isset($_POST['cancel']))
    {
        ?>
    <script type="text/javascript">location.href = '/index.php';</script>
    <?php

    }
    if($custPassWord != $confirm_password){
        echo "<script type='text/javascript'>alert('Password does not match!');</script>";
        ?>
    <script type="text/javascript">location.href = '/2TKS_Project/justsquashed_Project/View/signUp.php';</script>
    <?php

    }
    $result = "INSERT INTO customer
    VALUES('$custUserName','$firstname','$lastname','$email','$phone','$age ','$custPassWord','$member')";
    $que =mysqli_query($conn,$result);
    if($que== true) 
    {
        echo "<script type='text/javascript'>alert('Sign up successful. You may login using your Username and Password.');</script>";
        ?>
    <script type="text/javascript">location.href = '/2TKS_Project/justsquashed_Project/View/login.php';</script>
    <?php
        
    }else
    {
        echo "<script type='text/javascript'>alert('Sign up Unsuccessful.');</script>";
        ?>
    <script type="text/javascript">location.href = '/2TKS_Project/justsquashed_Project/View/signUp.php';</script>
    <?php
    }
?>
