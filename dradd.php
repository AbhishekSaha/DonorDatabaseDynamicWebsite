<?php


$last = $_POST["LN"];
$first = $_POST["FN"];
$phone = $_POST['phone'];
$email = $_POST['email'];
$employer = $_POST['employer'];
$rlshp = $_POST['RLSHP'];
$date = $_POST['ddate'];
$event = $_POST['event'];
$amount = $_POST['amount'];

$amt = intval($amount);
 require 'login.php';

$qrue = "SELECT COUNT(*) FROM DONORS;";
$result = mysql_query($qrue);
$row = mysql_fetch_row($result);
$det = $row[0];
$det = intval($det) + 1;

$query = "INSERT INTO `u9746600_inits`.`Donors` VALUES($det, \"$last\", \"$first\", \"$phone\", \"$email\", \"$employer\", \"$rlshp\");";

$result = mysql_query($query);



echo "Success";












?>