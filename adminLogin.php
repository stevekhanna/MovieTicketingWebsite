<?php session_start(); ?>
<?php include('dbcon.php'); ?>
<html>
<head>
<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
  <header id="header">
    <a class="logo" href="index.html">Ticket Booking System</a>

  </header>
<div class="form-wrapper">
  <form action="#" method="post">
    <h3>Admin Login</h3>

    <div class="form-item">
		<input type="text" name="user" required="required" placeholder="Username" autofocus required></input>
    </div>

    <div class="form-item">
		<input type="password" name="pass" required="required" placeholder="Password" required></input>
    </div>

    <div class="button-panel">
		<input type="submit" class="button" title="Log In" name="login" value="Login"></input>
    </div>
  </form>
  <?php
	if (isset($_POST['login']))
		{

			$username = mysqli_real_escape_string($con, $_POST['user']);
			$password = mysqli_real_escape_string($con, $_POST['pass']);

			$query 		= mysqli_query($con, "SELECT * FROM Admin_Account WHERE  Password='$password' and Username='$username'");
			$row		= mysqli_fetch_array($query);
			$num_row 	= mysqli_num_rows($query);




			if ($num_row > 0)
				{
          $_SESSION['AdminID']=$row['AdminID'];
					header("location: adminHome.php");

				}
			else
				{
					echo 'Invalid Username and Password Combination';
				}
		}

  ?>
  <div class="reminder">
    <p><a href="login.php">Not an admin?</a></p>
  </div>

</div>

</body>
</html>