<?php
$cus_username = $_SESSION["username"];

$server = "den1.mysql5.gear.host";
$username = "justsquashed";
$password = '96321@TTKs';
$db = 'justsquashed';
$conn = new mysqli($server, $username, $password, $db);
// Check Connection
if($conn ->connect_error){
die("Connection failed: " . $conn ->connect_error);
}


           $demerit = mysqli_query($conn, "Call ShowHistory('$cus_username')") or die("Query fail: " . mysqli_error($conn));
           $Chck = mysqli_fetch_assoc($demerit);
           $preDemerit=$Chck['Demerit'];
           
 ?>