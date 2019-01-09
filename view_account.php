<?php include ('session.php');?>
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
<h3 align="center">Account Information<h3>
<?php



			if (isset($_POST['add']))
				{
					$num = mysqli_real_escape_string($con, $_POST['num']);

					$addser = "INSERT INTO `theatre` (`TheatreID`, `Capacity`) VALUES (NULL, '".$num."');";
					if (!mysqli_query($con, $addser))
					 {
							die('Error: ' . mysqli_error($con));
					 }
					 header('Location: admin.html');

				}
// Updating
if (isset($_GET["job"])){
  if ($_GET["job"] == "book")
  {
  $Name = trim($_GET["Name"]);
  $result = mysqli_query($con, "Insert INTO 'for_movie_ticket' ('Movie_Name', 'StartTime', 'EndTime',  WHERE `movie`.`Name` ="."'$Name'");

  }
}








$email = mysqli_query($con, "SELECT Email FROM Customer WHERE CustomerID = '$session_id'");
$result = mysqli_query($con,"SELECT * FROM member_account WHERE CustomerID = '$session_id'");


echo "<table border='3' id='tableview'>
<tr>
<th>Email</th>
<th>First Name</th>
<th>Last Name</th>
<th>User Name</th>
<th>Password</th>

</tr>";
$newRow = mysqli_fetch_array($email);
while($row = mysqli_fetch_array($result))
  {
  echo "<tr>";
  echo "<td>" . $newRow['Email'] . "</td>";
  echo "<td>" . $row['First_Name'] . "</td>";
  echo "<td>" . $row['Last_Name'] . "</td>";
  echo "<td>" . $row['Username'] . "</td>";
  echo "<td>" . $row['Password'] . "</td>";


  echo "<td><a onClick= \"return to a main page ?('Do you want to update information?')\" href='update_user_info.php?job=book&amp;Name= " . $row['First_Name'] . "'>Update</a></td>";

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
