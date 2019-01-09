<!DOCTYPE HTML>
<!--
	Industrious by TEMPLATED
	templated.co @templatedco
	Released for free under the Creative Commons Attribution 3.0 license (templated.co/license)
-->

<?php include('dbcon.php'); ?>

<html>
	<head>
		<title>Add Theater</title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
		<meta name="description" content="" />
		<meta name="keywords" content="" />
		<link rel="stylesheet" href="assets/css/main.css" />
    <link rel="stylesheet" href="assets/css/formcss.css" />
	</head>
	<body class="is-preload">

		<!-- Header -->
			<header id="header">
				<a class="logo" href="admin.html">Ticket Booking System</a>
				<a class="logo" href="logout.php">Logout</a>
			</header>

      <form action="#" method="post" class="form">
        <h1 class="form-title">Add Theater</h1>
				Theater Capacity:<br>
        <input type="number" name = "num" class="form-input" placeholder="Theater Capacity">
				<input type="submit" name="add" value="Add Theater" class="add-button">

      </form>

			<?php
			if (isset($_POST['add']))
				{
					$num = mysqli_real_escape_string($con, $_POST['num']);

					$addtheater = "INSERT INTO `theatre` (`TheatreID`, `Capacity`) VALUES (NULL, '".$num."');";
					if (!mysqli_query($con, $addtheater))
					 {
							die('Error: ' . mysqli_error($con));
					 }

					 $num = intval($_POST['num']);
					 $tid = mysqli_insert_id($con);

					 for ($x = 1; $x <= $num; $x++) {
						 $addseat = "INSERT INTO `seats` (`TheatreID`, `SeatNumber`, `IsTaken`) VALUES ('".$tid."', '".$x."', '0')";
						 if (!mysqli_query($con, $addseat))
	 					 {
	 							die('Error: ' . mysqli_error($con));
	 					 }
						}
					 header('Location:admin.html');

				}
			?>


	</body>
</html>
