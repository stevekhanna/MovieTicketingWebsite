<?php session_start(); ?>
<?php include('dbcon.php'); ?>
<?php ob_start(); include ('confirm_payment.php'); ob_end_clean();?>

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

// Updating
if (isset($_GET["job"])){
  if ($_GET["job"] == "book")
  {
	  /*$_SESSION['Movie_Name'] = $row['Movie_Name'] ;  */
	   $_SESSION['Movie_Name'] = 'Movie_Name' ;

	/*$Movie_Name = 'Movie_Name'
	$_SESSION['Movie_Name'] = $var_value; */

  }
}

 //Movie_Name	TheatreID	Date	StartTime	EndTime
$CustomerID = $_SESSION['CustomerID'];
$Amount = $_SESSION['Amount'];


//Access all information from session variable

$TheatreID=$_SESSION['TheatreID'];

$Date=$_SESSION['Date'];

$StartTime=$_SESSION['StartTime'];

$EndTime=$_SESSION['EndTime'];





$result4 = mysqli_query($con,"SELECT TicketID FROM renting Where customerID= '$CustomerID'");



$result5 = mysqli_query($con,"SELECT * FROM renting_reservation Where Date='$Date' AND TheatreID='$TheatreID' AND StartTime='$StartTime' AND EndTime='$EndTime'");

$result6 = mysqli_query($con,"SELECT * FROM renting_reservation Where Date='$Date'");





echo "<table border='3' id='tableview'>
<tr>
<th>Date</th>
<th>StartTime</th>
<th>EndTime</th>
<th>TheatreID</th>
<th>Amount</th>
</tr>";


  echo "<tr>";
  echo "<td>" . $Date . "</td>";
  echo "<td>" . $StartTime . "</td>";
  echo "<td>" . $EndTime . "</td>";
  echo "<td>" . $TheatreID . "</td>";
  echo "<td>" . $Amount . "</td>";
  echo "</tr>";
  
  echo "<td><a onClick= \"return confirm('Return to homepage?')\" href='index.html?job=book&amp'>Home</a></td>";

echo "</table>";

	echo "<select>";
	while($row = mysql_fetch_array($result3))
		echo "<option value='{$row['TheatreID']}'>{$row['TheatreID']}</option>";
	echo "</select>";
	

mysqli_close($con);
?>
</body>

</html>
