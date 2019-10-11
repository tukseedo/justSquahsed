<?php
    include("../connection.php");

    session_start();
    $cusUsername = $_SESSION['username'];
    $courtID = $_POST["courtBooked"];
    $bookDate = $_POST["dateBooked"];
    $startTime = substr($_POST["startTimeBooked"], 0, 5);
    $endTime = substr($_POST["endTimeBooked"], 0, 5);
    $amountDue = $_POST["priceBooked"];

    try{
        $sqlCode = "CALL makeBooking('$cusUsername', $courtID, '$bookDate', '$startTime', '$endTime', $amountDue)";
        $query = mysqli_query($conn, $sqlCode);

        echo "<script type='text/javascript'>alert('Booking made Successfully');</script>";
    }catch(mysqli_sql_exception $e){
        throw $e;
    }
    
    $conn->close();
?>
<script type="text/javascript">location.href = '/2TKS_Project/justsquashed_Project/View/calendar.php';</script>