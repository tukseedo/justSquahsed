<?php
    session_start();

   $custUsername = $_POST['username'];
   $custPassword = $_POST['password'];

   $_SESSION['username'] = $_POST['username'];
   
    include $_SERVER['DOCUMENT_ROOT'] . "/2TKS_Project/justsquashed_Project/Model/connection.php";
    //$result = mysqli_query($conn,"Customer_login('$custUsername','$custPassword')");
    $result =mysqli_query($conn, "SELECT * FROM customer WHERE Customer_Username = '".$custUsername."' and Password = '".$custPassword."'");
    $row = mysqli_fetch_array($result);
   
    if(!isset($_POST['checkboxAdmin'])){
    if($row['Customer_Username']==$custUsername && $row['Password']==$custPassword)
    {
        $_SESSION['memberStatus'] = $row['Type'];
        ?>
        <script type="text/javascript">location.href = '/2TKS_Project/justsquashed_Project/LoggedIn.php';</script>
        <?php
        echo "Login username Welcome ".$row['Customer_FirstName']; 
    }else
    {
        ?>
        <script type="text/javascript">alert("Please Enter Correct Details");</script>
        <?php
        header('Location: /2TKS_Project/justsquashed_Project/View/login.php');

    exit();
    }
    }

    if(isset($_POST['checkboxAdmin'])){
        $check =mysqli_query($conn, "SELECT * FROM staff WHERE StaffID = '".$custUsername."' and Staff_Password = '".$custPassword."'");
        $row = mysqli_fetch_array($check);
    if($row['StaffID'] == $custUsername && $row['Staff_Password'] == $custPassword)
    {
        ?>
        <script type="text/javascript">location.href = '/2TKS_Project/justsquashed_Project/Admin/View/Bookings.php';</script>
        <?php
        echo "Admin"; 
    }else
    {   
        ?>
        <script type="text/javascript">alert("Please Enter Correct Details");</script>
        <?php
        header('Location: /2TKS_Project/justsquashed_Project/View/login.php');
    }
    
    }
?>