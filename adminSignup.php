<?php session_start(); ?>
<?php include('dbcon.php'); ?>

<html>
<head>
<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
  <header id="header">
    <a class="logo" href="admin.html">Ticket Booking System</a>

  </header>
<div style ="height:525px"; class="form-wrapper" >

  <form action="#" method="post">
    <h3>Admin Sign Up</h3>

    <div class="form-item">
		<input type="text" name="fname" required="required" placeholder="Enter your First Name" required></input>
    </div>

    <div class="form-item">
		<input type="text" name="lname" required="required" placeholder="Enter yout Last Name" required></input>
    </div>

    <div class="form-item">
		<input type="text" name="user" required="required" placeholder="Choose a username" required></input>
    </div>

    <div class="form-item">
		<input type="password" name="pass" required="required" placeholder="Type a password" required></input>
    </div>

    <div class="button-panel">
		<input type="submit" class="button" title="Sign Up" name="signup" value="SignUp"></input>
    </div>
  </form>
  <?php
	if (isset($_POST['signup']))
		{
      $firstName = mysqli_real_escape_string($con, $_POST['fname']);
      $lastName = mysqli_real_escape_string($con, $_POST['lname']);
			$username = mysqli_real_escape_string($con, $_POST['user']);
			$password = mysqli_real_escape_string($con, $_POST['pass']);

			$query 		= mysqli_query($con, "SELECT * FROM Admin_Account WHERE  Username='$username'");
			$row		= mysqli_fetch_array($query);
			$num_row 	= mysqli_num_rows($query);

			if ($num_row > 0)
				{
          //echo "<br>";
          echo nl2br("This username already exists.\n Please try again with a different username");

					//$_SESSION['user_id']=$row['user_id'];
					//header('location:home.php');

				}
			else
				{
           $id = mysqli_insert_id($con);

           $sql = "INSERT INTO Admin_Account (AdminID ,First_Name, Last_Name,Username,Password)
           VALUES ('". $id."','". $firstName."','". $lastName."','". $username."','". $password."')";
           if (!mysqli_query($con,$sql))
            {
            die('Error: ' . mysqli_error($con));
            }

          echo 'You are getting redirected to the Log in page';
		  	/* This is for taking to differnet page */
			header( "refresh:3;url=adminLogin.php" );
				}
		}
  ?>
  <div class="reminder">
  </div>

</div>

</body>
</html>
