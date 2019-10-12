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
    echo " "; 
    
}
//Code for deleting the bookings in the Bookings.php page
 
	if( isset($_GET['deleteid']) )
	{
    $id = $_GET['deleteid'];
    $result = mysqli_query($conn, "CALL Cancel_Booking('$id')") or die("Query fail: " . mysqli_error($conn));
		
		
    echo "<script type='text/javascript'>alert('Booking Deleted Successfully');</script>";
    ?>
<script type="text/javascript">location.href = '/2TKS_Project/justsquashed_Project/Admin/View/Bookings.php';</script>
<?php
    }
    
    if( isset($_GET['checkin']) )
	{
        $checknum = 1;
    $checkid = $_GET['checkin'];
    $result2 = mysqli_query($conn, "CALL BookingCheckIn('$checkid','$checknum')") or die("Query fail: " . mysqli_error($conn));
		
    echo "<script type='text/javascript'>alert('Customer Checked in.');</script>";
    ?>
<script type="text/javascript">location.href = '/2TKS_Project/justsquashed_Project/Admin/View/Bookings.php';</script>
<?php
	}
?>