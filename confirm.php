<?php

require 'login.php';

$obj = $_POST['roy'];


$json_a=json_decode($obj,true);
$FN = $json_a[First];
$LN = $json_a[Last];

$query = "SELECT * FROM DONORS WHERE FIRST=\"$FN\" && LAST=\"$LN\";";
$result = mysql_query($query);
if (!$result) die ("Database access failed: " . mysql_error()); 
$rows = mysql_num_rows($result);

if ($rows != 0){

echo "Bill";}
else echo "Lincon";

?>