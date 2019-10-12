<?php
session_start();
$memStat = $_SESSION['memberStatus'];
?>
<script type="text/javascript">
  let memStat = <?php echo json_encode($memStat); ?>;
  // console.log(memStat);
</script>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Squash Court</title>

    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.0/umd/popper.min.js" integrity="sha384-cs/chFZiN24E4KMATLdqdvsezGxaGsi4hLGOzlXwp5UZB1LY//20VyM2taTB4QvJ" crossorigin="anonymous"></script>

    <!-- Bootstrap CSS, allows for scrolling element itself -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css" integrity="sha384-9gVQ4dYFwwWSjIDZnLEWnxCjeSWFphJiwGPXr1jddIhOegiu1FwO5qRGvFXOdJZ4" crossorigin="anonymous">
    <!-- Modal Booking -->
    <link rel="stylesheet" href="./css/booking.css">
    <script src="./Content/jquery-3.4.1.js"></script>
    <!-- Nav Bar -->
    <script src="https://kit.fontawesome.com/b3ed090452.js"></script>
    <link rel="stylesheet" href="./css/style.css">
</head>
<body>
<!-- Navigation-->
<nav class="main-nav">
            <ul>
                <li><a href="../LoggedIn.php">Home </a></li>
                <li><a href="../profile.php">Profile</a></li>
                <li><a href="./calendar.php">New Booking</a></li>
                <li><a href="/index.php">Logout</a></li>
            </ul>
        </nav>

<div class="container col-sm-4 col-md-7 col-lg-4 mt-5">

    <div class="card">
        <label class="lead mr-2 ml-2">Select A Date To Make Booking</label>
        <h3 class="card-header" id="monthAndYear"></h3>
        <table class="table table-bordered table-responsive-sm" id="calendar">
            <thead>
            <tr>
                <th>Sun</th><th>Mon</th><th>Tue</th><th>Wed</th><th>Thu</th><th>Fri</th><th>Sat</th>
            </tr>
            </thead>

<?php include("../Controller/retrieveBookingDetails.php"); ?>
            <tbody id="calendar-body"></tbody>
        </table>

        <div class="form-inline">
            <button class="btn btn-outline-primary col-sm-6" id="previous" onclick="previous()">Previous</button>
            <button class="btn btn-outline-primary col-sm-6" id="next" onclick="next()">Next</button>
        </div>

  <!-- /* Form */ -->
  <form class="div-content" action="../Model/read/bookingDetails.php" method="POST">
        <div id="booking" class="modal">
            <!-- /* Closes Model */ -->
              <span onclick="document.getElementById('booking').style.display='none'" class="close" title="Close Modal">&times;</span>
              
              <!-- /* Form */ -->
              <form class="modal-content">
                <div class="container">
                  <h3>Booking Date: </h3>

                  <input id="bookDate" name="bookDate" style="display: block; width: 5.5em;" readonly/>
                  <!-- <p>Please fill in form to book your session and court.</p> -->
                  <hr>
                  
                  <form class="form-inline">
                  <label class="lead mr-2 ml-2">Select Court</label>
                    <select class="form-control col-sm-4" name="court" id="court" onchange="getCourtCode()">
                        <option value=''></option>
                      </select>
                    <hr>
            
                    <label class="lead mr-2 ml-2">Select Start Time</label>
                    <select class="form-control col-sm-4" name="startTime" id="startTime" onchange="disableDisable()">
                        <option value=''></option>
                    </select>

                    <table class="table table-bordered table-responsive-sm" id="calendar">
                      <tbody id="selectedSlots"></tbody>
                    </table>
                    <hr>
            
                    <label class="lead mr-2 ml-2">Select Number of Consecutive Slots</label>
                    <select class="form-control col-sm-4" name="consecutiveSlots" id="consecutiveSlots" onchange="postEndTime()" disabled>
                    <option value=''></option>
                  </select>
                      <hr>

                      <label class="lead mr-2 ml-2">End Time:</label>
                      <input id="endTime" name="endTime" style="display: block; width: 7em;" readonly/>
                      <hr>
                    </form>
                
                  <p>By booking a court you agree to our <a href="#" style="color:dodgerblue">Ts, Cs & PP</a>.</p>
            
                  <div class="clearfix">
                    <button type="button" onclick="document.getElementById('booking').style.display='none'" class="cancelbtn">Cancel</button>
                    <button type="submit" class="btnBook" id="btnSubmit">Proceed</button>
                  </div>
            
                </div>
              </form>
            </div>
          </form>
    </div>
</div>
<!--Footer -->
<footer>
        <p>GridBiz &copy; 2019</p>
        </footer>
        </section> 

<!--<button name="jump" onclick="jump()">Go</button>-->
<script type="text/javascript" src="../Controller/script/calendar.js"></script>

<!-- Modal Booking -->
<script type="text/javascript" src="../Controller/script/bookingForm.js"></script>
<script type="text/javascript" src="../Controller/script/timeSlot-court-selection.js"></script>
<!-- Optional JavaScript for bootstrap -->
<!-- <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/js/bootstrap.min.js"
        integrity="sha384-uefMccjFJAIv6A+rW+L4AHf99KvxDjWSu1z9VI8SKNVmz4sk7buKt/6v9KI65qnm"
        crossorigin="anonymous"></script> -->
</body>
</html>