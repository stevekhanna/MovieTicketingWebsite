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
      <a class="logo" href="user.html">Ticket Booking System</a>
      <a class="logo" href="logout.php">Logout</a>
    </header>
<h3 align="center">View Movies<h3>
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

 /*Movie_Name	TheatreID	Date	StartTime	EndTime */


$result = mysqli_query($con,"SELECT * FROM movie");
$result2 = mysqli_query($con,"SELECT * FROM timeslot");
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

  echo "<td><a onClick= \"return confirm('Do you want to book this movie?')\" href='user_quantity.php?job=book&amp;Name= " . $row['Movie_Name'] . "'>Book</a></td>";

  echo "</tr>";
  }

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
