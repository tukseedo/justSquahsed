<?php 
include("Model_Bookings.php");
$thedate = date("Y/m/d");

//Validating connection    

$result = mysqli_query($conn, 
     "CALL quaterlyreport()") or die("Query fail: " . mysqli_error($conn));

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
                <p align ="center">JustSquashed by 2TKS</p>
              </div>
 <!-- Navigation code -->
              <nav class="navbar navbar-expand-lg navbar-light bg-light" >
            
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation" text-align="center">
    		<span class="navbar-toggler-icon"></span>
  		</button >
        <div class="collapse navbar-collapse" id="navbarNavDropdown">
            <ul class="navbar-nav">
                    <li class="nav-item">
                            <a class="navbar-brand" href="Bookings.php">Bookings</a>
                        </li>
                        <li class="nav-item">
                            <a class="navbar-brand" href="Make Booking Admin.php">Make Booking</a>
                        </li>
                        <li class="nav-item">
                            <a class="navbar-brand" href="AddingM.php">Add Member</a>
                        </li>
                        <li class="nav-item">
                            <a class="navbar-brand" href="Reports.php">Reports</a>
                        </li>
            </ul>
        </div>
    </nav>
    <div class="container-fluid">
        <div class="row" style="padding-top:10px;"    >
            <div class="col-md-2">
            <br>
            <br>
                
            </div>
            <div class="col-md-6" align="center"   style="padding-bottom:70px;">

            


            <!--Displaying the table with the data of the last three months -->
            <table align="center" border="1px" style="width:850px; line-height:40px;">
    <thead>
        <tr>
            <th colspan="7"><h2 align="center">Mittal Squash Club three months Income Report</h2></th>
        </tr>
        <tr>
            <th colspan="7"><h6 align="center">Date of Report: <?php echo $thedate;?></h6> <h6  align="center">Period: Three Months</h6></th>
        </tr>
        <t>
            <th> Date of booking</th>
            <th> Customer Name </th>
            <th> Court </th>
            <th>Time of booking </th>
            <th> Amount </th>
            
        </t>
        </thead>
    <?php 
        while($rows = $result->fetch_assoc())
        {
    ?>        
            <tr>
            <td><?php echo $rows['bookDate']; ?></td>
                <td><?php echo $rows['Fullname']; ?></td>
                <td><?php echo $rows['Court_Name']; ?></td>
                <td><?php echo $rows['startTime']; ?></td>
                <td><?php echo $rows['Amount_Due']; ?></td>
                
            </tr>
    <?php     
        }
    ?>    
    </table>


            </div>
           
            <div class="col-md-4" style="padding-bottom:200px;">
            
            </div>
                   
				
            </div>
        </div>
    </div>






     <!-- CSS Code to design the table -->
    <style>
    
tr {
    background-color: #778899;
    border-top: 1px solid #000000;
}

th {
    background-color: #D3D3D3;
}
th,td {
    padding: 3px 5px;
}

    </style>
    
</body>
</html>