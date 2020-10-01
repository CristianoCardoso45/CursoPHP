<?php
echo "<br>";
echo date("d/m/y");
echo "<br>";
echo date("d/m/Y");
echo "<br>";
echo date("d-m-y");
echo "<br>";
echo date("d.m.y H:i:s");
echo "<br>";

echo time(); 
echo "<br>";
//Timestamp

$ts = strtotime("2001-09-11"); //
$ts2 = strtotime("+1 week");
echo "<br>";
echo date("l, d/m/Y", $ts);
echo "<br>";
echo date("l, d/m/Y", $ts2);
?>