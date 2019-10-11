<?php 

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
                <p align ="center">Squashhhhhhhh</p>
              </div>
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
                            <a class="navbar-brand" href="searchCust.php">Add Member</a>
                        </li>
                        <li class="nav-item">
                            <a class="navbar-brand" href="Reports.php">Reports</a>
                        </li>
            </ul>
        </div>
    </nav>

    <div class="container-fluid">
        <div class="row" style="padding: top 16px;">
            <div class="col-md-4">
                   
            </div>
            <div class="col-md-4">
                <h2>Add Member</h2>



<form  Action ="search.php" method= "POST">


        <label for="username">Search Username: </label>  <input type="text" name="username" class="form-control" />
         <input type="submit" class="btn btn_primary" value="Search" name="action"  class="form-control" /><br>




        
         <input type="button"  onclick="location.href='Bookings.php';" class="btn btn-primary" value="Cancel" name="cancelbtn" class="form-control" />
</form>   
        </div>
            <div class="col-md-4">
				
            </div>
        </div>
    </div>
</body>


</html>