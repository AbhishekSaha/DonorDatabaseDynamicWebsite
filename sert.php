<?php

$donorid = $_POST['DONORID'];
$date = $_POST['ddate'];
$event = $_POST['event'];
$amount = $_POST['amount'];

$amt = intval($amount);
 require 'login.php';

$query = "INSERT INTO DONORHISTORY VALUES($donorid, \"$date\", \"$event\", $amount);";
$result = mysql_query($query);



echo $date;




?>