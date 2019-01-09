
<?php include('dbcon.php'); ?>

<html>

<head>
<link rel="stylesheet" href="assets/css/table.css" />
<link rel="stylesheet" href="assets/css/main.css" />
</head>

<body>
  <!-- Header -->
    <header id="header">
      <a class="logo" href="admin.html">Ticket Booking System</a>
      <a class="logo" href="logout.php">Logout</a>
    </header>
<h3 align="center">View Movies<h3>
<?php
if (isset($_GET["job"])){
  if ($_GET["job"] == "delete")
  {
  $Name = trim($_GET["Name"]);
  $result = mysqli_query($con, "DELETE FROM `movie` WHERE `movie`.`Name` ="."'$Name'");
  }
}




$result = mysqli_query($con,"SELECT * FROM movie");

echo "<table border='3' id='tableview'>
<tr>
<th>Name</th>
<th>Start Date</th>
<th>End Date</th>
<th>Duration</th>
<th>Genre</th>
<th>Release Date</th>
</tr>";

while($row = mysqli_fetch_array($result))
  {
  echo "<tr>";
  echo "<td>" . $row['Name'] . "</td>";
  echo "<td>" . $row['StartDate'] . "</td>";
  echo "<td>" . $row['EndDate'] . "</td>";
  echo "<td>" . $row['Duration'] . "</td>";
  echo "<td>" . $row['Genre'] . "</td>";
  echo "<td>" . $row['ReleaseDate'] . "</td>";

  echo "<td><a onClick= \"return confirm('Do you want to delete this movie?')\" href='view_movies.php?job=delete&amp;Name= " . $row['Name'] . "'>DELETE</a></td>";

  echo "</tr>";
  }
echo "</table>";

mysqli_close($con);
?>
</body>

</html>
