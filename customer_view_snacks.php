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
<h3 align="center">View Snacks<h3>
<?php

$result = mysqli_query($con,"SELECT * FROM snacks");

echo "<table border='3' id='tableview'>
<tr>
<th>Service ID</th>
<th>Name</th>
<th>Quantity</th>
</tr>";

while($row = mysqli_fetch_array($result))
  {
  echo "<tr>";
  echo "<td>" . $row['ServiceID'] . "</td>";
  echo "<td>" . $row['Name'] . "</td>";
  echo "<td>" . $row['Quantity'] . "</td>";

  echo "<td><a onClick= \"return confirm('Do you want to buy this snack?')\" href='customer_snacks_quantity.php?job=buy&amp;ServiceID=". $row['ServiceID']."'>Buy</a></td>";

  echo "</tr>";
  }
echo "</table>";

if (isset($_GET["job"])){
  if ($_GET["job"] == "buy")
  {
  $_SESSION['AllInfo'] = $_GET["ServiceID"];  // gets the service id
  }
}

mysqli_close($con);
?>
</body>

</html>
