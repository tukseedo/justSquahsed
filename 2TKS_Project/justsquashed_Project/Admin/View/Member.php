<?php 
 session_start();
 $name= $_SESSION['Fullname'];
// echo $name;
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



     
        

    <form  Action ="AddMem.php" method= "POST">


    <label for="details">Name & Surname: </label> <input type="text" name="details" value="<?PHP echo $name;?>"  class="form-control"   ><br><br>
         <label for="id_Number">ID Number: </label>  <input type="text" maxlength="13" name="id_Number"   class="form-control" /><br>
         <label for="DOB">Date Of Birth: </label>  date <input type="date" id="DOB" name="DOB"><br>
          <label for="demographic">Demographic : </label>  
    <select name="demographic">
      <option ></option>
      <option value="Black" selected>Black</option>
      <option value="White" selected>White</option>
      <option value="Asian" selected>Asian</option>
      <option value="Indian" selected>Indian</option>
      <option value="Other" selected>Other</option>
                       
                        
     </select><br><br>
       <label for="street name"> Postal Address: </label>  <input type="text" name="street name"   class="form-control" />
       <label for="town"> Postal Address 2: </label>  <input type="text" name="town"   class="form_control" /><br>
       <label for="postalcode">Postal Address 3: </label>  <input type="text"  name="postalcode"    class="form_control" /><br><br>
       <label for="employer">Employer: </label> <input type="text" name="employer"  class="form-control" />
                    
       <label for="Membership_Period">Membership period: </label>
                        
      <select name="Membership_Period">
        <option ></option>
         <option value="1 year" >1 year</option>
        <option value="6 Months" >6 Months</option>
                        
      </select><br><br>
                    
       <label for="method_of_payment">Payment method: </label>
                   
          <select name="method_of_payment">
            <option></option>
          <option  value="Cash Payment" >Cash Payment at center</option>
          <option value="EFT" >EFT</option>
                            
       </select><br><br>

      <label for="recurrence">Payment method: </label> 
         <select name="recurrence">
        <option value></option>
         <option value="Annually" >Annually</option>
        <option value="Half yearly">Half yearly</option>
         <option value="Monthly">Monthly</option>
                            
        </select><br><br>
                   

        <label for="employee_number"> ArcelorMittal Employee number:   </label>  <input type="text" name="employee_number" class="form-control" />


         <div style="padding-bottom:70px;">
         <input type="submit"  onclick="location.href='Bookings.html';" class="btn btn-primary" value="Add Member" name="action"    class="form-control" />
         <input type="button"  onclick="location.href='index.html';" class="btn btn-primary" value="Cancel" name="cancelbtn" class="form-control" />
         </div>
</form>   
        </div>
            <div class="col-md-4">
				
            </div>
        </div>
    </div>
</body>


</html>