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

if( isset($_GET['deleteid']) )
	{
    $id = $_GET['deleteid'];
    $result = mysqli_query($conn, "CALL Cancel_Booking('$id')") or die("Query fail: " . mysqli_error($conn));
		
		
        echo "<meta http-equiv='refresh' content='0;url=Bookings.php'>";
        echo "Booking Cancelled Successfully <br>";
    }