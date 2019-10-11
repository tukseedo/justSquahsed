
<?php
session_start();
//include 'conn.php';


$server = "den1.mysql5.gear.host";
$user = "justsquashed";
$pass = '96321@TTKs';
$db = 'justsquashed';

$con = new mysqli($server, $user, $pass, $db)
or die ('Could not connect to the database server' . mysqli_connect_error());



$username=$_POST['username'];
$_SESSION['username']=$username;
$que;

//button search
if ($_POST['action'] == 'Search') 
  {
    

    $que =mysqli_query($con,"CALL Search ('$username')") or die("Failed to find member".mysqli_error($con));
  $row = mysqli_fetch_assoc($que);
    $result3=$row['Fullname'];
    $_SESSION['Fullname']=$result3;
    echo "<meta http-equiv='refresh' content='0;url=Member.php'>";
    
  }
  else
  {
      "customer not found";
    
  }
?>
<script type="text/javascript">
  let fullname = <?php echo json_encode($row['Fullname']); ?>;
</script>
