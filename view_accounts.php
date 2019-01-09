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

<h3 align="center">View Accounts<h3>
<?php

if (isset($_GET["job"])){
  if ($_GET["job"] == "delete")
  {

  $CustomerID = $_GET["CustomerID"];
  $result = mysqli_query($con,"Delete from customer where CustomerID=". $CustomerID );
  }
}

$email = mysqli_query($con, "SELECT Email FROM Customer");
$result = mysqli_query($con,"SELECT * FROM member_account");

echo "<table border='3' id='tableview'>
<tr>
<th>Customer ID</th>
<th>First Name</th>
<th>Last Name</th>
<th>Username</th>
<th>Email</th>
<th>Option</th>
</tr>";
$newRow = mysqli_fetch_array($email);
while($row = mysqli_fetch_array($result))
  {
  echo "<tr>";
  echo "<td>" . $row['CustomerID'] . "</td>";
  echo "<td>" . $row['First_Name'] . "</td>";
  echo "<td>" . $row['Last_Name'] . "</td>";
  echo "<td>" . $row['Username'] . "</td>";
  echo "<td>" . $newRow['Email'] . "</td>";

  echo "<td><a onClick= \"return confirm('Do you want to delete this user?')\" href='view_accounts.php?job=delete&amp;CustomerID= " . $row['CustomerID'] . "'>DELETE</a></td>";

  echo "</tr>";
  }
echo "</table>";

mysqli_close($con);
?>
</body>

</html>
