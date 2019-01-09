<?php include('dbcon.php'); ?>

<html>

<head>
<link rel="stylesheet" href="assets/css/table.css" />
<link rel="stylesheet" href="assets/css/main.css" />
</head>

<body>
  <!-- Header -->
    <header id="header">
      <a class="logo" href="index.html">Ticket Booking System</a>
      <a class="logo" href="login.php">Login</a>
    </header>
<h3 align="center">View TimeSlot<h3>
<?php

session_start();
//$add=$_SESSION['selected_startdate'];
//echo $add;

// Session works!
//echo $_SESSION['selected_startdate'];
$Date = $_SESSION['selected_startdate'];
//$_SESSION['Date']= $add;


if (isset($_GET["job"])){
  if ($_GET["job"] == "delete")
  {

  $ServiceID = $_GET["ServiceID"];
  $result = mysqli_query($con,"Delete from renting where ServiceID=". $ServiceID );
  }
}



$result = mysqli_query($con,"SELECT * FROM timeslot");
$result2 = mysqli_query($con,"SELECT * FROM timeslot where Date = '$Date'");

echo "<table border='3' id='tableview'>
<tr>
<th>Date</th>
<th>StartTime</th>
<th>EndTime</th>
</tr>";

while($row = mysqli_fetch_array($result2))
  {
  echo "<tr>";
  echo "<td>" . $row['Date'] . "</td>";
  echo "<td>" . $row['StartTime'] . "</td>";
  echo "<td>" . $row['EndTime'] . "</td>";

  echo "<td><a onClick= \"return confirm('Do you want to Select this renting?')\" href='customer_renting_ask_email.php?job=delete&amp;ServiceID= " . $row['ServiceID'] . "'>Select</a></td>";

  echo "</tr>";
  }
echo "</table>";

mysqli_close($con);
?>
</body>

</html>
