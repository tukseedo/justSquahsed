<?php

//include 'conn.php';
session_start();
 $name= $_SESSION['Fullname'];

$server = "den1.mysql5.gear.host";
$user = "justsquashed";
$pass = '96321@TTKs';
$db = 'justsquashed';

$con = new mysqli($server, $user, $pass, $db)
or die ('Could not connect to the database server' . mysqli_connect_error());

//getting the user input from the interface
$username=$_POST['username'];
$date=$_POST['booking_date'];
$starttime=$_POST['start'];
$endtime=$_POST['end'];
$court=$_POST['court'];


if ($_POST['action'] == 'Confirm Booking') 
 {
 $sq=mysqli_query($con,"SELECT customer.Type FROM customer WHERE Customer_Username='".$username."' ") or die("Failed to find member".mysqli_error($con));
 //$status= $con->query($sq);
 
 $row = mysqli_fetch_assoc($sq);
 
 $con->next_result();
 $status=$row['Type'];

 //calculating the amount due for booking
 $sq2=mysqli_query($con,"CALL CalculateAmountDue('$starttime','$endtime','$status')") or die("Failed to calculate amount".mysqli_error($con));
$cash=mysqli_fetch_assoc($sq2);
$amount = $cash['amountdue'];
$con->next_result();

//adding abooking to the database
$result =  mysqli_query($con,"CALL makeBooking ('$username',$court,'$date' ,'$starttime','$endtime', $amount)") or die("Failed to add booking".mysqli_error($con)) ;
$con->next_result();

echo "<meta http-equiv='refresh' content='0;url=Make Booking Admin.php'>";
echo '<script type="text/javascript">

          window.onload = function () { alert("Successfully Added Booking"); }
          
</script>';

 }







?>