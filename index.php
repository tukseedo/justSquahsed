<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF -8">
<meta name="viewport" 
content="width=device-width,initial-scale=1.0">
<meta http-equiv="X-UA-Compatible"
content="ie=edge">
<script src="https://kit.fontawesome.com/b3ed090452.js"></script>
<!-- Bootstrap CSS -->
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css" integrity="sha384-9gVQ4dYFwwWSjIDZnLEWnxCjeSWFphJiwGPXr1jddIhOegiu1FwO5qRGvFXOdJZ4" crossorigin="anonymous">
<script src="./2TKS_Project/justsquashed_Project/View/Content/jquery-3.4.1.js"></script>

<link rel="stylesheet" href="./2TKS_Project/justsquashed_Project/View/css/style.css">
<script language = "javascript" type = "text/javascript">
window.history.forward();
</script>
<title>Squash Court</title>
</head>
<body>
    <div class="wrapper">
        <!-- Navigation-->
        <nav class="main-nav">
            <ul>
                <li><a href="index.php">Home </a></li>
                <li><a href="./2TKS_Project/justsquashed_Project/View/login.php">Profile</a></li>
                <li><a href="./2TKS_Project/justsquashed_Project/View/login.php">Calendar</a></li>
                <li><a href="./2TKS_Project/justsquashed_Project/View/login.php">Login</a></li>
                <li><a href="./2TKS_Project/justsquashed_Project/View/signUp.php">Sign Up </a></li>
            </ul>
        </nav>
        <!-- Top Container-->
        <section>
            <header class="showcase">
                <h1>The Squash Court</h1>
                <p>lorem ipsum sit ametlorem ipsum sit
                     ametlorem ipsum sit amet
                     lorem ipsum sit amet</p>
                    
            </header>
                <div class="top-box top-box-a">
                    <h2 style="text-align: center;">Court Bookings for Today</h2>
                    <i class="fas fa-table-tennis fa-2x"></i>

                    <?php include("./2TKS_Project/justsquashed_Project/Controller/displayAvailSlots.php"); ?>

                    <p class="book" >The journey of Thousands miles begins with first step</p>
                    <a href="./2TKS_Project/justsquashed_Project/View/login.php" class="btn">Book Now</a>
                </div>
        </section>
        <!--Boxes Section-->

        <!-- Info Section---> 
        <section class="info">
            <div>
                <h2>The Squash Courts</h2>
                <p>Lorem ipsum dolor, sit amet consectetur
                    adipisicing elit. Dignissimos mollitia
                    tempora, iure dolor quo sunt? 
                    Laudantium assumenda quibusdam 
                    similique quis laboriosam dolorum officiis, 
                    reiciendis, labore reprehenderit 
                    aspernatur repellendus. Dolorem, harum?</p>
                <a href="http://www.vaaltrianglesquash.co.za/" class="btn">Learn More</a>
            </div>
        <!--Footer -->
        <footer>
        <p>GridBiz &copy; 2019</p>
        </footer>
        </section> 
    </div>  
    <!--Wrapper Ends--> 

    <!-- Available Time Slot js file -->
    <!-- <script src="./Controller/script/availTimeSlots.js"></script> -->
</body>
</html>