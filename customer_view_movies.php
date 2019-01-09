<?php session_start(); ?>
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
<h3 align="center">View Movies<h3>
<?php

// Updating


 /*Movie_Name	TheatreID	Date	StartTime	EndTime */


$result = mysqli_query($con,"SELECT * FROM movie");
$result2 = mysqli_query($con,"SELECT * FROM timeslot Where serviceID = NULL");
$result3 = mysqli_query($con,"SELECT * FROM theatre");
$result4 = mysqli_query($con,"SELECT * FROM are_assigned");


echo "<table border='3' id='tableview'>
<tr>
<th>Name</th>
<th>Theatre Name</th>
<th>Date</th>
<th>StartTime</th>
<th>EndTime</th>
</tr>";

while($row = mysqli_fetch_array($result4))
  {
  echo "<tr>";
  echo "<td>" . $row['Movie_Name'] . "</td>";
  echo "<td>" . $row['TheatreID'] . "</td>";
  echo "<td>" . $row['Date'] . "</td>";
  echo "<td>" . $row['StartTime'] . "</td>";
  echo "<td>" . $row['EndTime'] . "</td>";

  echo "<td><a onClick= \"return confirm('Do you want to book this movie?')\" href='customer_quantity.php?job=book&amp;AllInfo= " . $row["Movie_Name"] . ";" . $row["TheatreID"] . ";" . $row["Date"] . "; " . $row["StartTime"] . ";" . $row["EndTime"] . "'>Book</a></td>";

  echo "</tr>";
  }

echo "</table>";


  if (isset($_GET["job"])){
    if ($_GET["job"] == "book")
    {

  	   $_SESSION['AllInfo'] = $_GET["AllInfo"];

    }
  }

mysqli_close($con);
?>
</body>

</html>
