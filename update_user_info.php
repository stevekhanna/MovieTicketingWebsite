<?php include ('session.php');?>
<?php include('dbcon.php'); ?>

<html>
<head>
<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
  <header id="header">
    <a class="logo" href="index.html">Ticket Booking System</a>

  </header>
<div style ="height:575px"; class="form-wrapper" >

  <form action="#" method="post">
    <h3>Edit Your Information</h3>

    <div class="form-item">
		<input type="text" name="fname" required="required" placeholder="Edit your First Name" required></input>
    </div>

    <div class="form-item">
		<input type="text" name="lname" required="required" placeholder="Edit yout Last Name" required></input>
    </div>

    <div class="form-item">
		<input type="email" name="email" required="required" placeholder="Edit your email" required></input>
    </div>

    <div class="form-item">
		<input type="password" name="pass" required="required" placeholder="Edit a password" required></input>
    </div>

    <div class="button-panel">
		<input type="submit" class="button" title="Sign Up" name="update" value="update"></input>
    </div>
  </form>
  <?php
	if (isset($_POST['update']))
		{

			$firstName = mysqli_real_escape_string($con, $_POST['fname']);
		  $lastName = mysqli_real_escape_string($con, $_POST['lname']);
			$email = mysqli_real_escape_string($con, $_POST['email']);
			//$username = mysqli_real_escape_string($con, $_POST['user']);
			$password = mysqli_real_escape_string($con, $_POST['pass']);

				//SET ContactName = 'Alfred Schmidt', City= 'Frankfurt'

			  if (!mysqli_query($con, "UPDATE `member_account` SET First_Name = '$firstName', Last_Name = '$lastName', Password = '$password' WHERE CustomerID = '$session_id' LIMIT 1"))
			   {
			   die('Error: Problem with 1 ' . mysqli_error($con));
			   }

			  if (!mysqli_query($con, "UPDATE `customer` SET Email = '$email' WHERE CustomerID = '1' LIMIT 1"))
			   {
			   die('Error: Problem with 2 ' . mysqli_error($con));
			   }

          //echo 'You are getting redirected to the Log in page';
		  	/* This is for taking to differnet page */
			header( 'Location:view_account.php' );
				}

  ?>
  <div class="reminder">
    <p><a href="login.php">Already a member? Login!</a></p>
    <p><a href="adminLogin.php">Admin Login here!</a></p>
  </div>

</div>

</body>
</html>
