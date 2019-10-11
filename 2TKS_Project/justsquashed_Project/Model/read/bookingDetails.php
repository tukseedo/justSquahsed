<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <!-- <link rel="stylesheet" href="./css/booking.css"> -->
</head>
<body>
<form class="div-content" action="../create/bookCourt.php" method="POST">
        <div id="booking" class="modal">
              <!-- /* Form */ -->
              <form class="modal-content">
                <div class="container">
                  <h3>Booking Details: </h3>
                    <br />
                  <label class="lead mr-2 ml-2">Date: </label>
                  <input type="text" id="dateBooked" name="dateBooked" value="<?php echo $_POST["bookDate"]; ?>" style="border:none;"/>
                  <hr>
            
                  <form class="form-inline">
                    <label class="lead mr-2 ml-2">Start Time: </label>
                    <input type="text" id="startTimeBooked" name="startTimeBooked" value="<?php echo $_POST["startTime"]; ?>" style="border:none;"/>
                    <hr>
            
                    <label class="lead mr-2 ml-2">End Time: </label>
                    <input type="text" id="endTimeBooked" name="endTimeBooked" value="<?php echo $_POST["endTime"]; ?>" style="border:none;"/>
                    <hr>
            
                    <label class="lead mr-2 ml-2">Choosen Court: </label>
                    <input type="text" id="courtBooked" name="courtBooked" value="<?php echo $_POST["court"]; ?>" style="border:none;"/>
                      <hr>
                      
                    <label class="lead mr-2 ml-2">Booking Price: R </label>
                    <input type="text" id="priceBooked" name="priceBooked" value="<?php include('./amountDue.php'); ?>" style="border:none;"/>
                      <hr>
                    </form>
                
                  <p>By booking a court you agree to our <a href="#" style="color:dodgerblue">Ts, Cs & PP</a>.</p>
            
                  <div class="clearfix">
                    <button type="button" onclick="document.getElementById('booking').style.display='none'" class="cancelbtn" id="btnCancel">Cancel</button>
                    <button type="submit" class="btnBook" id="btnSubmit">Book</button>
                  </div>
                </div>
              </form>
            </div>
          </form>

  <script type="text/javascript">
    document.getElementById('btnCancel').onclick = function(){
      location.href = "http://localhost/2TKS_Project/justsquashed_Project/View/calendar.php";
    }
  </script>
</body>
</html>