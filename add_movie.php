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
        <h1 class="form-title">Add Movie</h1>
        Movie Name:<br>
        <input type="text" name = "name" class="form-input" placeholder="Movie Name" autofocus>
        Start Date:<br>
        <input type="date" name = "sdate" class="form-input" placeholder="Start Date (YYYY-MM-DD)">
        End Date:<br>
        <input type="date" name = "edate" class="form-input" placeholder="End Date (YYYY-MM-DD)">
        Duration:<br>
        <input type="number" name = "duration" class="form-input" placeholder="Duration (HH:MM:SS)">
        Genre:<br>
        <input type="text" name = "genre" class="form-input" placeholder="Genre">
        Release Date:<br>
        <input type="date" name = "rdate" class="form-input" placeholder="Release Date (YYYY-MM-DD)">

        <input type="submit" value="Add Movie" name= "add" class="add-button">

      </form>

			<?php
	if (isset($_POST['add']))
		{
      $name = mysqli_real_escape_string($con, $_POST['name']);
      $sdate = mysqli_real_escape_string($con, $_POST['sdate']);
      $edate = mysqli_real_escape_string($con, $_POST['edate']);
			$duration = mysqli_real_escape_string($con, $_POST['duration']);
			$genre= mysqli_real_escape_string($con, $_POST['genre']);
			$rdate= mysqli_real_escape_string($con, $_POST['rdate']);

			$query 		= mysqli_query($con, "SELECT * FROM 	movie WHERE  name='$name'");
			$row		  = mysqli_fetch_array($query);
			$num_row 	= mysqli_num_rows($query);
			if ($num_row > 0)
				{
          echo nl2br("This movie already exists.\n Please try again with a different movie");
				}
			else
				{
          $addCustomer= "INSERT INTO 	movie (Name, StartDate, EndDate, Duration, Genre, ReleaseDate)
					VALUES('".$name."','".$sdate."','".$edate."','".$duration."','".$genre."','".$rdate."')";
          if (!mysqli_query($con, $addCustomer))
           {
           		die('Error: ' . mysqli_error($con));
           }
					 header('Location: admin.html');

				}
		}
  ?>

	</body>
</html>
