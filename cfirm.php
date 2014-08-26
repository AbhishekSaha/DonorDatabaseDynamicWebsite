<?php

require 'login.php';

$obj = $_POST['roy'];

$json_a=json_decode($obj,true);
$DONORID = $json_a[Jon];

$query = "SELECT * FROM DONORS WHERE DONORID=\"$DONORID\";";
$result = mysql_query($query);
if (!$result) die ("Database access failed: " . mysql_error()); 
$rows = mysql_num_rows($result);



echo $rows;

?>