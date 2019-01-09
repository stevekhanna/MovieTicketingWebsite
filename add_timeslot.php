<!DOCTYPE HTML>
<!--
	Industrious by TEMPLATED
	templated.co @templatedco
	Released for free under the Creative Commons Attribution 3.0 license (templated.co/license)
-->

<?php include('dbcon.php'); ?>

<html>
	<head>
		<title>Add Movie</title>
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
        <h1 class="form-title">Add Timeslot</h1>

				Date:<br>
        <input type="date" name="date" class="form-input" placeholder="Date" autofocus>
				Start Time:<br>
        <input type="time" name="stime" class="form-input" placeholder="Start time">
        End Time:<br>
        <input type="time" name="etime" class="form-input" placeholder="End time">
				ServiceName:<br>
				<select name ='index'>
					<option value='NULL'>NULL</option>
					<option value="Rent">Rent</option>
				</select>
				<input type="submit" name="add" value="Add Timeslot" class="add-button">

      </form>

			<?php
			if (isset($_POST['add']))
				{
					$date = mysqli_real_escape_string($con, $_POST['date']);
					$stime = mysqli_real_escape_string($con, $_POST['stime']);
					$etime = mysqli_real_escape_string($con, $_POST['etime']);
					$serviceName= mysqli_real_escape_string($con, $_POST['index']);

					$addtim = "INSERT INTO `timeslot` (`Date`, `StartTime`, `EndTime`, `ServiceName`) VALUES ('".$date."', '".$stime."', '".$etime."', '$serviceName');";
					if (!mysqli_query($con, $addtim))
					 {
							die('Error: ' . mysqli_error($con));
					 }
					 header('refresh:10; url=admin.html');

				}
			?>


	</body>
</html>
