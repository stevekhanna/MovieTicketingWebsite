
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
<h3 align="center">View Snacks<h3>
<?php
if (isset($_GET["job"])){
  if ($_GET["job"] == "delete")
  {

  $ServiceID = $_GET["ServiceID"];
  $result = mysqli_query($con,"Delete from snacks where ServiceID=". $ServiceID );
  }
}




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

  echo "<td><a onClick= \"return confirm('Do you want to delete this snack?')\" href='view_snacks.php?job=delete&amp;ServiceID= " . $row['ServiceID'] . "'>DELETE</a></td>";

  echo "</tr>";
  }
echo "</table>";




mysqli_close($con);
?>
</body>

</html>
