<?php
//Start session
session_start();
//Check whether the session variable SESS_MEMBER_ID is present or not
if (!isset($_SESSION['AdminID']) || (trim($_SESSION['AdminID']) == '')) {
    header("location: adminLogin.html");
    exit();
}
$session_id=$_SESSION['AdminID'];

?>
