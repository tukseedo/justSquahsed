<!-- <?php 


// include 'time_slot_court_selection.js';
//$mysqli = new mysqli('den1.mysql5.gear.host','justsquashed','Uf5pStz_qz-A','justsquashed');

//$result = $mysqli->query('CALL display_bookings ()');      

//$result = mysqli_query($mysql, 
     //"CALL display_bookings") or die("Query fail: " . mysqli_error());
//$rows = $result->fetch_assoc();
//?> -->

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
<body onload="load">
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
                <h2>Make Booking</h2>
                <form Action ="getTimes.php" method= "POST">
                    
                    Username:  <input type="text" size="35" name="username" class="form-control" /><br>

     Select booking date: <input type="date" id="booking_date" data_date=" " value="DD-MM-YYYY" name="booking_date"  > <br><br>               


                    Select Court: 
                    <select name="court">
        <option ></option>
         <option value="1001" >Court 1</option>
        <option value="1002" >Court 2</option>
         <option value="1003" >Court 3</option>
         <option value="1004" >Court 4</option>
        <option value="1005" >Court 5</option>
         <option value="1006" >Court 6</option>
         <option value="1007" >Court 7</option>
        <option value="1008" >Court 8</option>
         
                            
        </select><br><br>

                    



                        Select Start Time: 
                    <select name="start">
        <option ></option>
         <option value="06:00" >06:00</option>
        <option value="06:30 " >06:30</option>
         <option value="07:00 " >07:00</option>
         <option value="08:00 " >08:00</option>
        <option value="08:30 " >08:30</option>
         <option value="09:00" >09:00</option>
         <option value="09:30" >09:30</option>
        <option value="10:00" >10:00</option>
         <option value="10:30" >10:30</option>
         <option value="11:00" >11:00</option>
        <option value="11:30" >11:30</option>
         <option value="12:00" >12:00</option>
         <option value="13:00" >13:00</option>
        <option value="13:30" >13:30</option>
         <option value="14:00" >14:00</option>
         <option value="14:30" >14:30</option>
        <option value="15:00" >15:00</option>
         <option value="15:30" >15:30</option>
         <option value="16:00" >16:00</option>
         <option value="16:30" >16:30</option>
         <option value="17:00" >17:00</option>
        <option value="17:30" >17:30</option>
         <option value="18:00" >08:00</option>
         <option value="18:30" >18:30</option>
        <option value="19:00" >19:00</option>
         <option value="19:30" >19:30</option>
         <option value="20:00" >20:00</option>
         <option value="20:00" >20:30</option>
        <option value="21:00" >21:00</option>
         <option value="21:30" >21:30</option>

                                              
        </select><br><br>
                    


            Select End Time : 
                    <select name="end">
        <option ></option>
        <option value="06:30 " >06:30</option>
         <option value="07:00 " >07:00</option>
         <option value="08:00 " >08:00</option>
        <option value="08:30 " >08:30</option>
         <option value="09:00" >09:00</option>
         <option value="09:30" >09:30</option>
        <option value="10:00" >10:00</option>
         <option value="10:30" >10:30</option>
         <option value="11:00" >11:00</option>
        <option value="11:30" >11:30</option>
         <option value="12:00" >12:00</option>
         <option value="13:00" >13:00</option>
        <option value="13:30" >13:30</option>
         <option value="14:00" >14:00</option>
         <option value="14:30" >14:30</option>
        <option value="15:00" >15:00</option>
         <option value="15:30" >15:30</option>
         <option value="16:00" >16:00</option>
         <option value="16:30" >16:30</option>
         <option value="17:00" >17:00</option>
        <option value="17:30" >17:30</option>
         <option value="18:00" >08:00</option>
         <option value="18:30" >18:30</option>
        <option value="19:00" >19:00</option>
         <option value="19:30" >19:30</option>
         <option value="20:00" >20:00</option>
         <option value="20:00" >20:30</option>
        <option value="21:00" >21:00</option>
         <option value="21:30" >21:30</option>
         <option value="09:00" >22:00</option>
                            
        </select><br><br>
                    


                    <input type="submit" onclick="location.href='Bookings.html';"   class="btn btn-primary" value="Confirm Booking" name="action"  class="form-control" />
                    <input type="button"  onclick="location.href='index.html';" class="btn btn-primary" value="Cancel" name="action" class="form-control" />
                    
                </form>
            </div>
            <div class="col-md-4">
				
            </div>
        </div>
    </div>
</body>


</html>