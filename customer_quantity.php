<?php ob_start(); include ('customer_view_movies.php'); ob_end_clean();?>
<?php include('dbcon.php'); ?>

<html>

<head>
<link rel="stylesheet" href="assets/css/table.css" />
<link rel="stylesheet" href="assets/css/main.css" />
<link rel="stylesheet" href="assets/css/formcss.css" />
</head>

<body>
  <!-- Header -->
    <header id="header">
      <a class="logo" href="index.html">Ticket Booking System</a>
      <a class="logo" href="login.php">Login</a>
    </header>
<h3 align="center">Please Select your Quantity</h3>
<?php
$All_Info=$_SESSION['AllInfo'];
$pieces = explode(";",$All_Info);

$Movie_Name= $pieces[0];
$TheatreID=$pieces[1];
$Date=$pieces[2];
$StartTime=$pieces[3];
$EndTime=$pieces[4];

$_SESSION['Movie_Name']= $Movie_Name;
$_SESSION['TheatreID']= $TheatreID;
$_SESSION['Date']= $Date;
$_SESSION['StartTime']= $StartTime;
$_SESSION['EndTime']= $EndTime;
?>

<form action="#" method="post" class="form">
  <h1 class="form-title">Quantity</h1>
  Select Quantity:<br>
  <?php
  if ($result2 = mysqli_query($con,("SELECT Count(SeatNumber) FROM Seats Where TheatreID= '$TheatreID' And IsTaken= '0'"))) {

    echo "<select name='index'>";
    $counter=0;
    $numSeats = mysqli_fetch_array($result2);
    $numSeat  = $numSeats["Count(SeatNumber)"];

    while($counter <= $numSeat+1) {
      echo "<option value=$counter>" . $counter ."</option>";
      $counter++;
    }




    echo "</select>";
   }?>
   <input type="submit" name="book" value="Select" class="add-button">
</form>
<?php
if (isset($_POST['book']))
  {

    $_SESSION['Quantity']= $_POST['index'];

    echo("<script>location.href = 'ask_email.php?';</script>");
         //header('Location: ask_email.php'); ask why to tamer


  }
?></body>

</html>
