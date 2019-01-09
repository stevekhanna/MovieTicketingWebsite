<?php
include('dbcon.php');
include('session.php');

$result=mysqli_query($con, "SELECT * FROM Member_Account WHERE CustomerID='$session_id'")or die('Error In Session');
$row=mysqli_fetch_array($result);

 ?>

<html>


<head>
<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
<div class="form-wrapper">
    <center><h3>Welcome: <?php

	/* This is for taking to differnet page */

	header( "refresh:2;url=user.html" );


	echo $row['First_Name'] ," ",  $row['Last_Name']; ?> </h3></center>

	 <div class="reminder">
     <p><a href="#">Redirecting...</a></p>
    <p><a href="logout.php">Log out</a></p>
  </div>
</div>

</body>
</html>
