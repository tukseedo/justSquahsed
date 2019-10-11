<?php
include('./Model/connection.php');

//$usernameB = 'Alisalis';
$q = mysqli_query($conn, "Call Display_customerBooking('Alisalis')") or die("Query fail: " . mysqli_error($conn));
//$count = mysqli_num_rows($q);
echo "<table border ='1'>";
//echo "<tr>";
echo "<th>Court Booked<th>";
echo "<th>Starting Time<th>";
echo "<th>Ending Time<th>";
echo "<th>Action<th>";
//echo "</tr>";
$data = mysqli_fetch_array($q);
//{
    $CourtName = $data["Court Booked"];
    $StartTime =$data["Starting Time"];
    $EndTime =$data["Ending Time"];
    //echo "<tr>";
    echo "<td><a>$CourtName</a></td>";
    echo "<td><a>$StartTime</a></td>";
    echo "<td><a>$EndTime</a></td>";
    echo "<td><a href ''>Cancel Booking</a></td>";
   // echo "</tr>";

//}


