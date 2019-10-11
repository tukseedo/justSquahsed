<?php
    include("../connection.php");

    $sqlBookings = "CALL display_bookings('2019-08-30')";
    $result = mysqli_query($conn, $sqlBookings);

    $count = 0;
    if (mysqli_num_rows($result) > 0) {
        // output data of each row
        while($row = mysqli_fetch_assoc($result)) {
            echo "<br>Start Time: " . $row["startTime"]. " - End Time: " . $row["endTime"]. " - Booking Date: " . $row["bookDate"]. "<br>";
            
            $startTimeSlot = "SELECT SlotID FROM timeslots WHERE Slot =" .$row["startTime"];
            $startSlotQuery = mysqli_query($conn, $startTimeSlot);

            $startArr[$count] = $row["startTime"];
            $endArr[$count] = $row["endTime"];
            $dateBookedArr[$count] = $row["bookDate"];
            $count++;
        }
    } else {
        echo "0 results";
    }
?>
<script type="text/javascript"> 
    let startArray = <?php echo json_encode($startArr); ?>;
    let endArray = <?php echo json_encode($endArr); ?>;
    let dateBookedArray = <?php echo json_encode($dateBookedArr); ?>;
</script>
<script type="text/javascript" src="/2TKS Project/justsquashed_Project/Controller/script/.........js"></script>