<?php include('dbcon.php'); ?>
<?php session_start(); ?>

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
<h3 align="center">View Renting<h3>
<?php

// Updating


 /*Movie_Name	TheatreID	Date	StartTime	EndTime */

$result4 = mysqli_query($con,"SELECT * FROM are_assigned_renting");
$amount = 600;

echo "<table border='3' id='tableview'>
<tr>
<th>Theatre Name</th>
<th>Date</th>
<th>StartTime</th>
<th>EndTime</th>
<th>Amount</th>
</tr>";

while($row = mysqli_fetch_array($result4))
  {
  echo "<tr>";
  echo "<td>" . $row['TheatreID'] . "</td>";
  echo "<td>" . $row['Date'] . "</td>";
  echo "<td>" . $row['StartTime'] . "</td>";
  echo "<td>" . $row['EndTime'] . "</td>";
  echo "<td>" . $amount . "</td>";

  echo "<td><a onClick= \"return confirm('Do you want to book this movie?')\" href='customerRenting_ask_email.php?job=book&amp;RentingAllInfo= " . $row["TheatreID"] . ";" . $row["Date"] . "; " . $row["StartTime"] . ";" . $row["EndTime"] . "'>Book</a></td>";

  echo "</tr>";
  }

echo "</table>";


  if (isset($_GET["job"])){
    if ($_GET["job"] == "book")
    {

  	   $_SESSION['RentingAllInfo'] = $_GET["RentingAllInfo"];

    }
  }


?>
</body>

</html>
