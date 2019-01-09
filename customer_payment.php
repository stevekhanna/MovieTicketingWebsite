<?php include('dbcon.php'); ?>
<?php ob_start(); include ('ask_email.php'); ob_end_clean();?>
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

$Movie_Name=$_SESSION['Movie_Name'];
$TheatreID=$_SESSION['TheatreID'];
$Date=$_SESSION['Date'];
$StartTime=$_SESSION['StartTime'];
$EndTime=$_SESSION['EndTime'];
$Quantity=$_SESSION['Quantity'];
$CustomerID=$_SESSION['CustomerID'];
$Price= 10;
$Amount=(intval($Quantity)*$Price);
$_SESSION['Amount']=$Amount;

$_SESSION['Movie_Name']= $Movie_Name;
$_SESSION['TheatreID']= $TheatreID;
$_SESSION['Date']= $Date;
$_SESSION['StartTime']= $StartTime;
$_SESSION['EndTime']= $EndTime;
$_SESSION['Quantity']=$Quantity;
$_SESSION['CustomerID']=$CustomerID;

echo "<table border='3' id='tableview'>
<tr>
<th>Movie Name</th>
<th>Theatre Name</th>
<th>Date</th>
<th>StartTime</th>
<th>EndTime</th>
<th>Quantity</th>
<th>CustomerID</th>
<th>Amount to Pay</th>
</tr>";


  echo "<tr>";
  echo "<td>" . $Movie_Name . "</td>";
  echo "<td>" . $TheatreID . "</td>";
  echo "<td>" . $Date . "</td>";
  echo "<td>" . $StartTime . "</td>";
  echo "<td>" . $EndTime . "</td>";
  echo "<td>" . $Quantity . "</td>";
  echo "<td>" . $CustomerID . "</td>";
  echo "<td>" . $Amount . "</td>";

  echo "<td><a onClick= \"return confirm('Do you want to pay for this?')\" href='confirm_payment.php?;'>Pay Now</a></td>";

  echo "</tr>";


echo "</table>";




 ?>


</body>

</html>
