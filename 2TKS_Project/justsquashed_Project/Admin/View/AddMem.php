<?php

//include 'conn.php';

session_start();
$username= $_SESSION['username'];



$server = "den1.mysql5.gear.host";
$user = "justsquashed";
$pass = '96321@TTKs';
$db = 'justsquashed';

$con = new mysqli($server, $user, $pass, $db)
or die ('Could not connect to the database server' . mysqli_connect_error());




//$username=$_POST['username'];

    $id_Number = $_POST['id_Number'];
    $DOB = $_POST['DOB'];
    $demographic = $_POST['demographic'];
    $street_name = $_POST['street_name'];
    $town = $_POST['town'];
    $postalcode = $_POST['postalcode'];
    $address = $street_name ." " . $town . " " . $postalcode;
    $employer = $_POST['employer'];
    $membership_period = $_POST['Membership_Period'];
    $method_of_payment = $_POST['method_of_payment'];
    $recurrence = $_POST['recurrence'];
    $payment= $method_of_payment ." :" . $recurrence;
    $employee_number= $_POST['employee_number'];
    $member = "Member";
   
 

$result3;
$result2;
$result;



 //adding a new member
 if ($_POST['action'] == 'Add Member') 
 {
  
  $result =  mysqli_query($con,
  "CALL New_Membership ('$username','$id_Number','$DOB','$demographic','$address','$employer','$membership_period ','$payment','$employee_number')") or die("Failed to add member".mysqli_error($con)) ;
  $result2 =mysqli_query($con, "CALL update_customer ('$username')") or die("Failed to add member".mysqli_error($con)) ;
  echo "<meta http-equiv='refresh' content='0;url=Make Booking Admin.php'>";
 echo '<script type="text/javascript">

          window.onload = function () { alert("Successfully Added new Member"); }
          
</script>';
} 
// else
// {
//   echo "Successfully Added new member ";
// }
?>
