<?php include('dbcon.php'); ?>
<?php ob_start(); include ('customerRenting_ask_email.php'); ob_end_clean();?>
<html>

<head>
<link rel="stylesheet" href="assets/css/table.css" />
<link rel="stylesheet" href="assets/css/main.css" />
<link rel="stylesheet" href="assets/css/formcss.css" />
</head>

<body>
  <!-- Header -->
    <header id="header">
      <a class="logo" href="index.html">Ticket Booking System</a>
      <a class="logo" href="login.php">Login</a>
    </header>
<h3 align="center">View Amount<h3>


<?php


//Access all information from session variable

$TheatreID=$_SESSION['TheatreID'];

$Date=$_SESSION['Date'];

$StartTime=$_SESSION['StartTime'];

$EndTime=$_SESSION['EndTime'];

$CustomerID=$_SESSION['CustomerID'];

$Amount= $_SESSION['Amount'];



 ?>


<form action="#" method="post" class="form">
  <h1 class="form-title">Confirm Payment</h1>
  Select Payment method:<br>
  <select name = "pay_method">
  <option value="visa">VISA</option>
  <option value="debit">DEBIT</option>
</select>
<input type="submit" name="pay" value="Pay" class="add-button">
</form>


<?php

if (isset($_POST['pay']))
  {
	echo $Date;
    $Price = 10;
    $pay_method = mysqli_real_escape_string($con, $_POST['pay_method']);

	    $addrenting_reservation= "INSERT INTO `renting_reservation` (`Date`, `TheatreID`, `StartTime`, `EndTime`)
				 VALUES ('$Date', '$TheatreID', '$StartTime', '$EndTime')";
                 //VALUES('".$Date."','".$TheatreID."'.'".$StartTime."','".$EndTime."')");
				 
		//$PaymentID = mysqli_insert_id($con);
		$addPayment= ("INSERT INTO 	Payment (paymentID, PaymentMethod, AmountPaid)
                              VALUES('NULL','".$pay_method."','".$Amount."')");

			
	if (!mysqli_query($con, $addrenting_reservation))
      {
          die('Error: ' . mysqli_error($con));
      }
	

    if (!mysqli_query($con, $addPayment))
    {
        die('Error: ' . mysqli_error($con));
    }
	
	
	$updatetimeslot = "UPDATE `timeslot` SET ServiceName = 'Rented' WHERE Date='$Date' AND StartTime='$StartTime' AND EndTime='$EndTime'";
	
    if (!mysqli_query($con, $updatetimeslot))
    {
        die('Error: ' . mysqli_error($con));
    }
	

	header('Location: customer_view_renting_receipt.php');

  }

 ?>



</body>

</html>
