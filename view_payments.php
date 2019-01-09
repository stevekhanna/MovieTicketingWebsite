<?php include('dbcon.php'); ?>

<html>

<head>
<link rel="stylesheet" href="assets/css/table.css" />
<link rel="stylesheet" href="assets/css/main.css" />
</head>

<body>
  <!-- Header -->
    <header id="header">
      <a class="logo" href="user.html">Ticket Booking System</a>
      <a class="logo" href="logout.php">Logout</a>
    </header>
<h3 align="center">View Payments<h3>
<?php

$result = mysqli_query($con,"SELECT * FROM payment");

echo "<table border='3' id='tableview'>
<tr>
<th>payment ID</th>
<th>Payment Method</th>
<th>Amount Paid</th>
</tr>";

while($row = mysqli_fetch_array($result))
  {
  echo "<tr>";
  echo "<td>" . $row['paymentID'] . "</td>";
  echo "<td>" . $row['PaymentMethod'] . "</td>";
  echo "<td>" . $row['AmountPaid'] . "</td>";

  echo "</tr>";
  }
echo "</table>";

mysqli_close($con);
?>
</body>

</html>
