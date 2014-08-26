<?php 
require 'login.php';
$query = $_POST["ent"];

echo $query;

$result = mysql_query($query);
if (!$result) die ("Database access failed: " . mysql_error()); $rows = mysql_num_rows($result);

echo "<table class=\"CSSTableGenerator\"><tr> <th value='DONORID' onclick='fun(\"DONORID\")' id=\"heada\">DONORID</th><th class=\"heada\" onclick='fun(\"LAST\")'>Last </th> <th class=\"heada\" onclick='fun(\"FIRST\")'>First</th> <th class=\"heada\" onclick='fun(\"EMAIL\")'>Email</th> <th class=\"heada\"  value='EMPLOYER' onclick='fun(\"EMPLOYER\")'>Employer</th> <th class=\"heada\" value='PHONE' onclick='fun(\"PHONE\")'>PHONE</th> <th>Relationship to EWB</th></tr>";
for ($j = 0 ; $j < $rows ; ++$j) {
$row = mysql_fetch_row($result);
echo "<tr>";
for ($k = 0 ; $k < 7 ; ++$k){ 
if($k==0){
echo "<td class='alter'> $row[$k]</td>";
}
else
echo "<td>$row[$k] &nbsp; &nbsp;</td>";


} echo "</tr>";
}
echo "</table>";?>
