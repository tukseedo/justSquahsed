<?php
    
$server = "den1.mysql5.gear.host";
$user = "justsquashed";
$pass = '96321@TTKs';
$db = 'justsquashed';

$conn = new mysqli($server, $user, $pass, $db);

// Check Connection
if($conn -> connect_error){
    die("Connection failed: " . $conn -> connect_error);
}
else{
    echo "Connected successfully";
}

 if(isset($_GET['deleteBtn'])){
        $key = $_GET['KeyToDelete'];
        $result = "CALL Cancel_Booking('$key')";
        $que =mysqli_query($conn,$result);
if($que== true) 
{?>
<div class="alert alert-success">                    
  <p>Record deleted!! </p>
 </div>
 <?php
    header('Location: profile.php'); 
}else
    header('Location: ../view/signUp.php');
}
 
 