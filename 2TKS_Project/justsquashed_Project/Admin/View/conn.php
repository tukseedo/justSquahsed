
<?php

    $server = "den1.mysql5.gear.host";
    $user = "justsquashed";
    $pass = 'Uf5pStz_qz-A';
    $db = 'justsquashed';
    $port="3306";

    $conn = new mysqli($server, $user, $pass, $db);

    // Check Connection
    if($conn -> connect_error){
        die("Connection failed: " . $conn -> connect_error);
    }
    else{
        echo "Connected successfully";
    }

    ?>

