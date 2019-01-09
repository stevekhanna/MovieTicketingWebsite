<?php include('dbcon.php'); ?>
<?php ob_start(); include ('member_payment_snacks.php'); ob_end_clean();?>
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

  $ServiceIDe=$_SESSION['ServiceID'];
  $Quantity=$_SESSION['Quantity'];
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
      $Price = 10;
      $pay_method = mysqli_real_escape_string($con, $_POST['pay_method']);


      $addPayment= ("INSERT INTO 	Payment (paymentID, PaymentMethod, AmountPaid)
                                VALUES('NULL','".$pay_method."','".$Amount."')");

      $addsersal= ("INSERT INTO service_sales (ServiceID, CustomerID,Quantity)
                                              VALUES('".$ServiceID."','".$CustomerID."','".$Quantity."')");

      $UpdateSeat = ("UPDATE snacks Set Quantity = 1 where ServiceID= '$ServiceID'");

      // add payment
      if (!mysqli_query($con, $addPayment))
      {
          die('Error: ' . mysqli_error($con));
      }
      $PaymentID = mysqli_insert_id($con);
      $addserpay= ("INSERT INTO service_payment (ServiceID, PaymentID)
                                             VALUES('".$ServiceID."','".$PaymentID."')");

      // add service payment
      if (!mysqli_query($con, $addserpay))
      {
          die('Error: ' . mysqli_error($con));
      }
      // add service_sales
      if (!mysqli_query($con, $addsersal))
      {
          die('Error: ' . mysqli_error($con));
      }

      $result2 = mysqli_query($con,("SELECT `Quantity` FROM `snacks` WHERE `ServiceID` = '$ServiceID' "));
      $quans= mysqli_fetch_array($result2);
      $quan  = $quans["Quantity"];  // available Quantity

      $updatedQuan = $quan - $Quantity;
      $UpdateQuan = ("UPDATE snacks Set Quantity = '$updatedQuan' where ServiceID= '$ServiceID'");
      if (!mysqli_query($con, $UpdateQuan))
      {
          die('Error: ' . mysqli_error($con));
      }
           header('Location: member_print_receipt_snacks.php');
    }
   ?>
  </body>

  </html>
