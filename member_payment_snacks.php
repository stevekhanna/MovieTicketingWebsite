<?php include('dbcon.php'); ?>
<?php ob_start(); include ('member_snacks_quantity.php'); ob_end_clean();?>
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
<h3 align="center">View Amount<h3>

  <?php


  //Access all information from session variable

  $ServiceID  = $_SESSION['ServiceID'];
  $CustomerID = $_SESSION['CustomerID'];
  $Quantity=$_SESSION['Quantity'];
  $Price= 10;
  $Amount=(intval($Quantity)*$Price);

  $_SESSION['Amount']=$Amount;
  $_SESSION['CustomerID']=$CustomerID;
  $_SESSION['ServiceID']= $ServiceID;
  $_SESSION['Quantity']=$Quantity;

  echo "<table border='3' id='tableview'>
  <tr>
  <th>Customer ID</th>
  <th>Service ID</th>
  <th>Quantity</th>
  <th>Amount to Pay</th>
  </tr>";
    echo "<tr>";
    echo "<td>" . $CustomerID . "</td>";
    echo "<td>" . $ServiceID . "</td>";
    echo "<td>" . $Quantity . "</td>";
    echo "<td>" . $Amount . "</td>";

    echo "<td><a onClick= \"return confirm('Do you want to pay for this?')\" href='member_confirm_payment_snack.php?;'>Pay Now</a></td>";

    echo "</tr>";
  echo "</table>";

   ?>
  </body>

  </html>
