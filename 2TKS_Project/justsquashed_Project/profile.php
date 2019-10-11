<?php
session_start();
$cus_username = $_SESSION["username"];
$server = "den1.mysql5.gear.host";
$username = "justsquashed";
$password = '96321@TTKs';
$db = 'justsquashed';
$conn = new mysqli($server, $username, $password, $db);

// Check Connection
if($conn ->connect_error){
die("Connection failed: " . $conn ->connect_error);
}
else{
echo "Connected successfully <br> "; 
}

$q = mysqli_query($conn, "Call Display_customerBooking('$cus_username')") or die("Query fail: " . mysqli_error($conn));


?>

<!Doctype html>
<html>
    <head>
            <title>The Profile</title>
            <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
            <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" ></script>
            <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
            <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
    </head>
    <body>
    <header>
        <section>
            
    <div class="jumbotron jumbotron-fluid">
    <div class="container">
    <h1>AcceloMittal Squash Court</h1><br>    
        <p>coresum sajcoresum saj coresum saj coresum sajuis coresum sajuid coresum saj</p>
        <br>
        <a href="" class="btn" data-toggle="modal" data-target="#myModal"><h3>Check Demerit</h3></a>
        <a href="./LoggedIn.php" class="btn" name="Home"><h3>Home</h3></a>
        <a href="/index.php" class="btn" name="Sign Out"><h3>Sign Out</h3></a>
    </div>
    </div>
        </section>
        </header>
        <br>
        <br>
        <section>
            <div class="top-container">
        <table class="table table-condensed table-bordered">
    <thead>
        
        <tr>
            <th>Booking No. </th>
            <th>Court Booked </th>
            <th>Starting Time</th>
            <th>Ending Time</th>
            <th>Select</th>
            <th> Action</th>
        </tr>
        </thead>
    <?php 
    $count =1;
    if($dataA = mysqli_num_rows($q)<=0){?>
        <tr align ="center">
            <th align="center" colspan="6"><h2>You have made no booking </h2></th>
        </tr>
        <?php
    }
        while($dataA = mysqli_fetch_array($q))
        {
    ?>        
        <tr>
            <form action ="profileProcess.php" method="GET">
                <td><?php echo  $dataA["Booking No."]; ?></td>
                <td><?php echo  $dataA["Court Booked"]; ?></td>
                <td><?php echo  $dataA["Starting Time"]; ?></td>
                <td><?php echo  $dataA["Ending Time"]; ?></td>
                <td align="center">
                <!--<label>-->
                    
                 <input type ="checkbox"  name="KeyToDelete" value="<?php echo $dataA['Booking No.'];?>" required>
                <!--</label>-->
                </td> 
                <td> 
                <input type ="submit" name="deleteBtn" class="btn btn-info">
                </td>
               
            </form>
         </tr>
    <?php     
    $count++;
        }
    ?>    
    </table>
    </div>
        </section>
        
    </body>

    <div class="modal" id="myModal">
    <div class="modal-dialog">
    <div class="modal-content">

      <!-- Modal Header -->
      <div class="modal-header">
        <h4 class="modal-title">Demerit Status</h4>
        <button type="button" class="close" data-dismiss="modal">&times;</button>
      </div>

      <!-- Modal body -->
      <div class="modal-body">
        <!--Show message here-->
      </div>
      <label>
        <?php
           include 'CountDemerit.php';
            
            if(($preDemerit)==0){?>
             <p><h3> You have not missed a booking</h3></p>
           <?php }
           if(($preDemerit)>0 and ($preDemerit)<=1 ){?>
            <p><h3>You have one missed you Booking</h3></p>
          <?php }
          if(($preDemerit)>1 and ($preDemerit)<=2 ){?>
            <p><h3>You have missed two booking <br> You have pay R50 Fine</h3></p>
          <?php }
          if(($preDemerit)>2 and ($preDemerit)>=3 ){?>
            <p><h3>You have missed three or more bookings go to <br> Accelor Mittal Squash Court To fix you account</h3></p>
          <?php }?>

        
      
      </label>
      <div class="modal-footer">
        <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
      </div>

    </div>
  </div>
</div>
</html>