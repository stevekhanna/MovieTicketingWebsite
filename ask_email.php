<!DOCTYPE HTML>
<!--
	Industrious by TEMPLATED
	templated.co @templatedco
	Released for free under the Creative Commons Attribution 3.0 license (templated.co/license)
-->

<?php include('dbcon.php'); ?>
<?php ob_start(); include ('customer_quantity.php'); ob_end_clean();?>

<html>
	<head>
		<title>Enter your email</title>
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
				<a class="logo" href="index.html">Ticket Booking System</a>
				<a class="logo" href="login.php">Login</a>
			</header>

      <form action="#" method="post" class="form">
        <h1 class="form-title">Enter Your Email</h1>


        Enter your Email:<br>
        <input type="text" name="email" class="form-input" placeholder="Your Email">
		<input type="submit" name="add" value="Submit Email" class="add-button">

      </form>

			<?php
			$Movie_Name=$_SESSION['Movie_Name'];
			$TheatreID=$_SESSION['TheatreID'];
			$Date=$_SESSION['Date'];
			$StartTime=$_SESSION['StartTime'];
			$EndTime=$_SESSION['EndTime'];
			$Quantity=$_SESSION['Quantity'];
			if (isset($_POST['add']))
				{

					$email = mysqli_real_escape_string($con, $_POST['email']);
					$addCustomer= "INSERT INTO Customer (CustomerID, Email) VALUES(NULL,'".$email."')";

					if (!mysqli_query($con, $addCustomer))
					 {
							die('Error: ' . mysqli_error($con));
					 }
					 $CustomerID = mysqli_insert_id($con);
					 $_SESSION['Movie_Name']= $Movie_Name;
					 $_SESSION['TheatreID']= $TheatreID;
					 $_SESSION['Date']= $Date;
					 $_SESSION['StartTime']= $StartTime;
					 $_SESSION['EndTime']= $EndTime;
					 $_SESSION['Quantity']=$Quantity;
					 $_SESSION['CustomerID']=$CustomerID;
					 header('Location: customer_payment.php');


				}
			?>


	</body>
</html>
