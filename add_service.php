<!DOCTYPE HTML>
<!--
	Industrious by TEMPLATED
	templated.co @templatedco
	Released for free under the Creative Commons Attribution 3.0 license (templated.co/license)
-->
<?php include('dbcon.php'); ?>

<html>
	<head>
		<title>Add Sevice</title>
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
        <h1 class="form-title">Add Service</h1>
        Service Type:<br>
        <input type="text" name ="type" class="form-input" placeholder="Rent/Snack" autofocus>
				Service Name:<br>
        <input type="text" name ="name" class="form-input" placeholder="Name of the service">
        Quantity:<br>
        <input type="number" name = "quan"class="form-input" placeholder="Quantity">

        <input type="submit" name = "add" value="Add Service" class="add-button">

      </form>

	<?php
	if (isset($_POST['add']))
		{
			$type = mysqli_real_escape_string($con, $_POST['type']);
			$name = mysqli_real_escape_string($con, $_POST['name']);
			$quan = mysqli_real_escape_string($con, $_POST['quan']);

			$addser = "INSERT INTO `service` (`ServiceID`) VALUES (NULL)";
			if (!mysqli_query($con, $addser))
			 {
					die('Error: ' . mysqli_error($con));
			 }

			$id = mysqli_insert_id($con);

			if($type == "Rent")
			{
				$updateSer = "UPDATE Service Set ServiceName='$type' where ServiceID= '".$id."' ";
				if (!mysqli_query($con, $updateSer))
				 {
						die('Error: ' . mysqli_error($con));
				 }
				$addrent = "INSERT INTO renting (ServiceID, Name, Quantity_of_Slots) VALUES ('".$id."', '".$name."' ,'".$quan."')";
				if (!mysqli_query($con, $addrent))
				 {
						die('Error: ' . mysqli_error($con));
				 }
				 header('Location: admin.html');
			}
			if($type == "Snack")
			{
				$updateSer = "UPDATE Service Set ServiceName='$type' where ServiceID= '".$id."' ";
				if (!mysqli_query($con, $updateSer))
				 {
						die('Error: ' . mysqli_error($con));
				 }
				$addsnaks = "INSERT INTO snacks (ServiceID, Name, Quantity) VALUES ('".$id."','".$name."', '".$quan."')";
				if (!mysqli_query($con, $addsnaks))
				 {
						die('Error: ' . mysqli_error($con));
				 }
				 header('Location: admin.html');
			}


				}
	?>

	</body>
</html>
