<?php
    include("../connection.php");
    $sTime = substr($_POST['startTime'], 0, 5);
    $eTime = substr($_POST['endTime'], 0, 5);

    session_start();
    $memStatus = $_SESSION['memberStatus'];
    
    $proced = "CALL CalculateAmountDue('$sTime', '$eTime', '$memStatus')";
    
    try{
        $res = mysqli_query($conn, $proced);
        if (mysqli_num_rows($res) > 0) {
        // output data of each row
            while($row = mysqli_fetch_assoc($res)) {
                echo $row["amountdue"];
            }
        } else {
            echo "0 results";
        } 
        $conn->close();
    }
    catch(mysqli_sql_exception $e){
        throw $e;
    }
?>