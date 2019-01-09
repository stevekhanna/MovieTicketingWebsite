<!DOCTYPE HTML>
<!--
	Industrious by TEMPLATED
	templated.co @templatedco
	Released for free under the Creative Commons Attribution 3.0 license (templated.co/license)
-->

<?php include('dbcon.php'); ?>


<html>
	<head>
		<title>Add Movie Assignmet</title>
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
        <h1 class="form-title">Add Assignmet of Movie</h1>
        Movie Name:<br>
				<?php
				  if ($result = mysqli_query($con,"SELECT Name FROM movie")) {
				    echo "<select name='movie_sel'>";
				    while ($row3 = mysqli_fetch_array($result)) {
				      echo "<option value='" . $row3['Name'] ."'>" . $row3['Name'] ."</option>";
				    }
				    echo "</select>";
				   }
				?>
				Date:<br>
				<?php
				  if ($result = mysqli_query($con,"SELECT Date FROM timeslot where ServiceName='NULL'")) {
				    echo "<select name='date_sel'>";
				    while ($row3 = mysqli_fetch_array($result)) {
				      echo "<option value='" . $row3['Date'] ."'>" . $row3['Date'] ."</option>";
				    }
				    echo "</select>";
				   }
				?>

        Start Time:<br>
				<?php
				  if ($result2 = mysqli_query($con,"SELECT StartTime FROM timeslot where ServiceName='NULL'")) {
				    echo "<select name='stime'>";
				    while ($row3 = mysqli_fetch_array($result2)) {
				      echo "<option value='" . $row3['StartTime'] ."'>" . $row3['StartTime'] ."</option>";
				    }
				    echo "</select>";
				   }
				?>
        End Time:<br>
				<?php
				  if ($result2 = mysqli_query($con,"SELECT EndTime FROM timeslot where ServiceName<>'Rent'")) {
				    echo "<select name='etime'>";
				    while ($row3 = mysqli_fetch_array($result2)) {
				      echo "<option value='" . $row3['EndTime'] ."'>" . $row3['EndTime'] ."</option>";
				    }
				    echo "</select>";
				   }
				?>
				Theatre ID:<br>
				<?php
				  if ($result2 = mysqli_query($con,"SELECT TheatreID FROM theatre")) {
				    echo "<select name='tid'>";
				    while ($row3 = mysqli_fetch_array($result2)) {
				      echo "<option value='" . $row3['TheatreID'] ."'>" . $row3['TheatreID'] ."</option>";
				    }
				    echo "</select>";
				   }
				?>
				<input type="submit" name="add" value="Add Movie Assignmet" class="add-button">

      </form>

			<?php
	if (isset($_POST['add']))
		{
			$name = mysqli_real_escape_string($con, $_POST['movie_sel']);
			$date = mysqli_real_escape_string($con, $_POST['date_sel']);
			$stime = mysqli_real_escape_string($con, $_POST['stime']);
			$etime = mysqli_real_escape_string($con, $_POST['etime']);
			$tid = mysqli_real_escape_string($con, $_POST['tid']);

					$addassign= "INSERT INTO 	are_assigned (Movie_Name, TheatreID, Date, StartTime, EndTime)
					VALUES('".$name."','".$tid."','".$date."','".$stime."','".$etime."')";
					if (!mysqli_query($con, $addassign))
					 {
							die('Error: ' . mysqli_error($con));
					 }
					 header('Location: admin.html');


		}
	?>


	</body>
</html>
