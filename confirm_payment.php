<?php include('dbcon.php'); ?>
<?php ob_start(); include ('customer_payment.php'); ob_end_clean();?>
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

$Movie_Name=$_SESSION['Movie_Name'];

$TheatreID=$_SESSION['TheatreID'];

$Date=$_SESSION['Date'];

$StartTime=$_SESSION['StartTime'];

$EndTime=$_SESSION['EndTime'];

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

    $addTicket= ("INSERT INTO 	Ticket (TicketID, Price)
                 VALUES('NULL','".$Price."')");
    $addPayment= ("INSERT INTO 	Payment (paymentID, PaymentMethod, AmountPaid)
                              VALUES('NULL','".$pay_method."','".$Amount."')");

    $SeatListQuery= mysqli_query($con,("SELECT SeatNumber FROM Seats Where TheatreID= '$TheatreID' And IsTaken= '0'"));






    if (!mysqli_query($con, $addPayment))
    {
        die('Error: ' . mysqli_error($con));
    }
    $PaymentID = mysqli_insert_id($con);



    $counter=0;

    while($counter<$Quantity){
      if (!mysqli_query($con, $addTicket))
      {
          die('Error: ' . mysqli_error($con));
      }
      $ticketID = mysqli_insert_id($con);

      $addTicketPayment= ("INSERT INTO 	Ticket_Payment (ticketID, PaymentID)
                          VALUES('".$ticketID."','".$PaymentID."')");
      $buyTicket=("INSERT INTO 	Buy_Tickets (ticketID, CustomerID,Quantity)
                          VALUES('".$ticketID."','".$CustomerID."','".$Quantity."')");

      if (!mysqli_query($con, $addTicketPayment))
      {
          die('Error: ' . mysqli_error($con));
      }
      if (!mysqli_query($con, $buyTicket))
      {
          die('Error: ' . mysqli_error($con));
      }
      $SeatList = mysqli_fetch_array($SeatListQuery);
      $UpdateSeat = ("UPDATE Seats Set IsTaken = 1 where TheatreID= '$TheatreID' And SeatNumber = '$SeatList[0]'");
      if (!mysqli_query($con, $UpdateSeat))
      {
          die('Error: ' . mysqli_error($con));
      }

      //QUERIES
      $Get_Movie= "SELECT name From Movie where name='$Movie_Name'";
      if ($Some_Movie = mysqli_query($con, $Get_Movie))
      {

        $Some_Movie_Name= mysqli_fetch_array($Some_Movie);

      }
      else {
        die('Error: ' . mysqli_error($con));
      }




      $For_Movie_Ticket = ("INSERT INTO 	For_movie_ticket (Movie_Name, TheatreID, Date, TicketID, SeatNumber, StartTime, EndTime)
                          VALUES('".$Movie_Name."','".$TheatreID."','".$Date."','".$ticketID."','".$SeatList[0]."','".$StartTime."','".$EndTime."')");
      if (!mysqli_query($con, $For_Movie_Ticket))
      {
          die('Error: ' . mysqli_error($con));
      }



      $counter++;
    }



         header('Location: print_receipt.php');


  }

 ?>



</body>

</html>
