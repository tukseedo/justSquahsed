<?php 
include("Model_Bookings.php");
$thedate = date("Y-m-d");
$currdate = date("Y-m-d");






if($_SERVER['REQUEST_METHOD'] == "POST" and isset($_POST['someAction']))
    {
        selectdate();
    }
    function selectdate()
    {
        global $thedate;
        $thedate= $_POST['booking_date'];

    }global $thedate;

    if($thedate < $currdate)
    {
        $thedate = $currdate;
    }
//$result = $mysqli->query('CALL display_bookings ()');      

$result = mysqli_query($conn, 
     "CALL display_bookings('$thedate')") or die("Query fail: " . mysqli_error());
//$rows = $result->fetch_assoc();
?>

<!DOCTYPE html>
<html>
<head>
   <meta name="viewport" content="width=device-width, initial-scale=1.0" >
   <title>Just_Squash_it </title>
   
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <!-- Latest compiled and minified bootstrap -->
    
    <link rel="stylesheet" href="css/bootstrap.min.css">
   
    <script src="Content/js/bootstrap.min.js"></script>

    <!-- jQuery library -->
    
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>

    <!-- Popper JS -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>

    <!-- Latest compiled JavaScript -->
    
    <script src="Content/js/caroufredsel.js" type="text/javascript"></script>
</head>
<body>

    
        <div class="header" >
                <h1 align ="center" style="font-size:300%;">Mittal Squash Club</h1>
                <p align ="center">JustSquashed by 2TKS </p>
              </div>

              <nav class="navbar navbar-expand-lg navbar-light bg-light" >
            
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation" text-align="center">
    		<span class="navbar-toggler-icon"></span>
  		</button >
        <div class="collapse navbar-collapse" id="navbarNavDropdown">
            <ul class="navbar-nav">
                    <li class="nav-item">
                            <a class="navbar-brand" href="./Bookings.php">Bookings</a>
                        </li>
                        <li class="nav-item">
                            <a class="navbar-brand" href="./Make Booking Admin.php">Make Booking</a>
                        </li>
                        <li class="nav-item">
                        <a class="navbar-brand" href="searchCust.php">Add Member</a>
                        </li>
                        <li class="nav-item">
                            <a class="navbar-brand" href="./Reports.php">Reports</a>
                        </li>
                        <li class="nav-item">
                            <a class="navbar-brand" href="/index.php">LOGOUT</a>
                        </li>
            </ul>
        </div>
    </nav>
    <div class="container-fluid">
        <div class="row" style="padding-top:10px;">
            <div class="col-md-2">
            <br>
            <br>
                
            </div>
            <div class="col-md-6" align="center">
            
            

                
                <form action="Bookings.php"  method="post">
Select booking date: <input type="date" id="booking_date" name="booking_date"  >                
    <input type="submit" name="someAction" value="Enter" />
</form>
<h6>You can only view upcoming bookings(Bookings from today).</h6>
<br>
        <!-- Display data from database(the upcoming bookings) in the html table-->
    
    
            </div>
            <table align="center" border="1px" style="width:850px; line-height:40px;">
    <thead>
        <tr>
            <th colspan="7"><h2>Customer Bookings for <?php echo $thedate ?></h2></th>

        </tr>
        <t>
            <th> Booking No. </th>
            <th> Customer Name </th>
            <th> Court </th>
            <th> Start time </th>
            <th> End time </th>
            <th> Amount due </th>
            <th> Action</th>
        </t>
        </thead>
    <?php 
        while($rows = $result->fetch_assoc())
        {
    ?>        
            <tr>
            <td><?php echo $rows['BookingID']; ?></td>
                <td><?php echo $rows['Fullname']; ?></td>
                <td><?php echo $rows['Court_Name']; ?></td>
                <td><?php echo $rows['startTime']; ?></td>
                <td><?php echo $rows['endTime']; ?></td>
                <td><?php echo $rows['Amount_Due']; ?></td>
                <td style="width:230px;"><a href='Model_Bookings.php?deleteid=<?php echo $rows['BookingID']; ?>' class="button"><b>Cancel Booking</a>
                <a href='Model_Bookings.php?checkin=<?php echo $rows['BookingID']; ?>' class="button button2"><b>Check-In</a></td>
            </tr>
    <?php     
        }
    ?>    
    </table>
            <div class="col-md-4">
            
                   </div>


                   
				
            </div>
        </div>
    </div>





    <!--CSS Code designing -->
    <style>
        .button {
    background-color: #800000;
    border: "none";
    color: white;
    display: inline-block;
    padding: 2px 2px;
    text-align: center;
    text-decoration: none;
    
    font-size: 15px;
    margin: 1px 2px;
    cursor: pointer;
  }
  .button2 {background-color: #4CAF50;
}
    
tr {
    background-color: #ffffff;
    border-top: 1px solid #000000;
}
tr:hover {
    background-color: #C0C0C0;
}
th {
    background-color: #ffffff;
}
th,td {
    padding: 3px 5px;
}
td:hover {
    cursor: pointer;
}
    </style>
    
</body>
</html>