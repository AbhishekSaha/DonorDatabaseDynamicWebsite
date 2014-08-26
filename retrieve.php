<?php

require 'login.php';

$ret = intval($_GET['ip']);

$query = "SELECT * from DONORHISTORY WHERE DONORID=$ret;";


$result = mysql_query($query);
if (!$result) die ("Database access failed: " . mysql_error()); $rows = mysql_num_rows($result);

echo "<button onclick='revert()'>Go back to previous page</button><table class=\"CSSTableGenerator\"><tr> <th>DONORID</th> <th>DATE</th> <th>EVENT</th> <th>Amount</th></tr>";
for ($j = 0 ; $j < $rows ; ++$j) {
$row = mysql_fetch_row($result);
echo "<tr>";
for ($k = 0 ; $k < 4 ; ++$k){ 
if($k==0){
echo "<td> $row[$k] </td>";
}
else
echo "<td>$row[$k] &nbsp; &nbsp;</td>";


} echo "</tr>";
}
echo "</table>";

?>
