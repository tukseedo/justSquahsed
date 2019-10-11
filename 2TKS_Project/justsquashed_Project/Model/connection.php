<?php
    $server = "den1.mysql5.gear.host";
    $username = "justsquashed";
    $password = '96321@TTKs';
    $db = 'justsquashed';

    $conn = new mysqli($server, $username, $password, $db);

    // Check Connection
    if($conn->connect_error){
        die("Connection failed: " . $conn->connect_error);
    }
    else{
        // echo "Connected successfully";
    }
?>

