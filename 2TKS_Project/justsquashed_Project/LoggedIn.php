<?php
session_start();
$name = $_SESSION['username'];
?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF -8">
<meta name="viewport" 
content="width=device-width,initial-scale=1.0">
<meta http-equiv="X-UA-Compatible"
content="ie=edge">
<script src="https://kit.fontawesome.com/b3ed090452.js"></script>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css" integrity="sha384-9gVQ4dYFwwWSjIDZnLEWnxCjeSWFphJiwGPXr1jddIhOegiu1FwO5qRGvFXOdJZ4" crossorigin="anonymous">
<script src="./View/Content/jquery-3.4.1.js"></script>

<link rel="stylesheet" href="./View/css/loggedIn.css">
<title>Squash Court</title>
</head>
<body>
    <div class="wrapper">
        <!-- Navigation-->
        <nav class="main-nav">
            <ul>
                <li><a href="/index.php">Home </a></li>
                <li><a href="./profile.php">Profile</a></li>
                <li><a href="./View/calendar.php">Calendar</a></li>
                <li><a href="/index.php">Login Out</a></li>
            </ul>
        </nav>
        <!-- Top Container-->
        <section>
            <header class="showcase">
<?php echo "Welcome " . $name . " to"; ?>
                <h1>Mittal Squash Court booking</h1>
                <h2 style="text-align: center;">Court Bookings for Today</h2>

<?php include("./Controller/displayAvailSlots.php")?>
                    
            </header>
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
</body>
</html>