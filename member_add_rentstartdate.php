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
				<a class="logo" href="user.html">Ticket Booking System</a>
				<a class="logo" href="logout.php">Logout</a>
			</header>

      <form action="#" method="post" class="form">
        <h1 class="form-title">Please Select Your Date For Renting</h1>

			  	Date:<br>
        <input type="date" name="date" class="form-input" placeholder="Date" autofocus>  
				<input type="submit" name="add" value="Select Timeslot" class="select">
				

      </form>

			<?php
			if (isset($_POST['add']))
				{
					
					$INPUT = $_POST['date'];
					
					session_start();
					$_SESSION['selected_startdate'] = $INPUT;
					header('Location: member_view_renting.php');

				}
			?>


	</body>
</html>
	