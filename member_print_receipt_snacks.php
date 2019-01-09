<?php include('dbcon.php'); ?>
<?php ob_start(); include ('member_confirm_payment_snack.php'); ob_end_clean();?>

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
<h3 align="center">This Is Your Receipt<h3>
<?php

 //Movie_Name	TheatreID	Date	StartTime	EndTime
$CustomerID = $_SESSION['CustomerID'];
$Amount = $_SESSION['Amount'];
$ServiceID = $_SESSION['ServiceID'];

echo "<table border='3' id='tableview'>
<tr>
<th>Customer ID</th>
<th>Service ID</th>
<th>Total Amount</th>
</tr>";

  echo "<tr>";
  echo "<td>" . $CustomerID . "</td>";
  echo "<td>" . $ServiceID . "</td>";
  echo "<td>" . $Amount . "</td>";
  echo "</tr>";
  echo "<td><a onClick= \"return confirm('Return to homepage?')\" href='user.html'>Home</a></td>";

echo "</table>";

mysqli_close($con);
?>
</body>

</html>
