<?php session_start(); ?>
<?php include('dbcon.php'); ?>
<?php ob_start(); include ('member_confirm_payment.php'); ob_end_clean();?>

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


$result4 = mysqli_query($con,"SELECT TicketID FROM Buy_Tickets Where customerID= '$CustomerID'");









echo "<table border='3' id='tableview'>
<tr>
<th>TicketID</th>
<th>Total Amount</th>
</tr>";

while($row = mysqli_fetch_array($result4))
  {
  echo "<tr>";
  echo "<td>" . $row['TicketID'] . "</td>";
  echo "<td>" . $Amount . "</td>";










  echo "</tr>";
  }
  echo "<td><a onClick= \"return confirm('Return to homepage?')\" href='user.html?job=book&amp'>Home</a></td>";

echo "</table>";

	/*echo "<select>";
	while($row = mysql_fetch_array($result3))
		echo "<option value='{$row['TheatreID']}'>{$row['TheatreID']}</option>";
	echo "</select>";
	*/

mysqli_close($con);
?>
</body>

</html>
