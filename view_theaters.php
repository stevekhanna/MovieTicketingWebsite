
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
<h3 align="center">View Theaters<h3>
<?php
if (isset($_GET["job"])){
  if ($_GET["job"] == "delete")
  {

  $TheatreID = $_GET["TheatreID"];
  $result = mysqli_query($con,"Delete from theatre where TheatreID=". $TheatreID );
  }
}




$result = mysqli_query($con,"SELECT * FROM theatre");

echo "<table border='3' id='tableview'>
<tr>
<th>Theater ID</th>
<th>Capacity</th>
</tr>";

while($row = mysqli_fetch_array($result))
  {
  echo "<tr>";
  echo "<td>" . $row['TheatreID'] . "</td>";
  echo "<td>" . $row['Capacity'] . "</td>";

  echo "<td><a onClick= \"return confirm('Do you want to delete this movie?')\" href='view_theaters.php?job=delete&amp;TheatreID= " . $row['TheatreID'] . "'>DELETE</a></td>";

  echo "</tr>";
  }
echo "</table>";

mysqli_close($con);
?>
</body>

</html>
