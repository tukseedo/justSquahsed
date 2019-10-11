<?php
// CONNECT TO DATEBASE
include($_SERVER['DOCUMENT_ROOT'] . "/2TKS_Project/justsquashed_Project/Model/connection.php");

    $sqlBookings = "SELECT CourtCode, bookDate, startTime, endTime FROM booking ORDER BY startTime";
    $result = mysqli_query($conn, $sqlBookings);

    $count = 0;
    if (mysqli_num_rows($result) > 0) {
        // output data of each row
        while($row = mysqli_fetch_assoc($result)) {

            $startArr[$count] = $row["startTime"];
            $endArr[$count] = $row["endTime"];
            $dateBookedArr[$count] = $row["bookDate"];
            $courtCode[$count] = $row["CourtCode"];
            $count++;
        }
        $conn->close();
    } else {
        echo "0 results";
    }
?>
<script type="text/javascript">
    let startArr = <?php echo json_encode($startArr); ?>;
    let endArr = <?php echo json_encode($endArr); ?>;
    let dateArr = <?php echo json_encode($dateBookedArr); ?>;
    let courtCodeArr = <?php echo json_encode($courtCode); ?>;
</script>