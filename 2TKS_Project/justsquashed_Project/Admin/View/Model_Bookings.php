<?php
	$server = "den1.mysql5.gear.host";
  $username = "justsquashed";
  $password = '96321@TTKs';
  $db = 'justsquashed';

  $conn = new mysqli($server, $username, $password, $db);

// Check Connection
if($conn -> connect_error){
    die("Connection failed: " . $conn -> connect_error);
}
else{
    echo "Connected successfully <br> "; 
    
}
//Code for deleting the bookings in the Bookings.php page
 
	if( isset($_GET['deleteid']) )
	{
    $id = $_GET['deleteid'];
    $result = mysqli_query($conn, "CALL Cancel_Booking('$id')") or die("Query fail: " . mysqli_error($conn));
		
		
        echo "<meta http-equiv='refresh' content='0;url=Bookings.php'>";
        echo "Booking Cancelled Successfully <br>";
    }
    
    if( isset($_GET['checkin']) )
	{
        $checknum = 1;
    $checkid = $_GET['checkin'];
    $result2 = mysqli_query($conn, "CALL BookingCheckIn('$checkid','$checknum')") or die("Query fail: " . mysqli_error($conn));
		
    echo "<meta http-equiv='refresh' content='0;url=Bookings.php'>";
        echo "Customer Checked In <br>" ;
	}
?>