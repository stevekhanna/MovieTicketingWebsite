<?php ob_start(); include ('customer_view_snacks.php'); ob_end_clean();?>
<?php include('dbcon.php'); ?>

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
<h3 align="center">Please Select your Quantity</h3>
<?php
$All_Info=$_SESSION['AllInfo'];
$pieces = explode(";",$All_Info);
$ServiceID= $pieces[0];
$_SESSION['ServiceID']= $ServiceID;
?>
<form action="#" method="post" class="form">
  <h1 class="form-title">Quantity</h1>
  Select Quantity:<br>
  <?php
  if ($result2 = mysqli_query($con,("SELECT `Quantity` FROM `snacks` WHERE `ServiceID` = '$ServiceID' "))) {

    echo "<select name='index'>";
    $counter=1;
    $quans= mysqli_fetch_array($result2);
    $quan  = $quans["Quantity"];

    while($counter <= $quan) {
      echo "<option value=$counter>" . $counter ."</option>";
      $counter++;
    }
    echo "</select>";
   }?>
   <input type="submit" name="book" value="Select" class="add-button">
</form>
<?php
if (isset($_POST['book']))
  {
    $_SESSION['Quantity']= $_POST['index'];
    // echo '<pre>' . print_r($_SESSION, TRUE) . '</pre>';
    // echo "Hi: ",$ServiceID;

    echo("<script>location.href = 'ask_email_snacks.php?';</script>");
         //header('Location: ask_email.php'); ask why to tamer
  }
?></body>

</html>
