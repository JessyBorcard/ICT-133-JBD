<?php

date_default_timezone_set('UTC');
$d = mktime(11,11,11,11,11,1111);
echo date("l d F Y ", $d );
echo "<br>";
$d = mktime(21,12,11,4,8,909890758);
echo date("M dS Y", $d);
echo "<br>";
$d = mktime(2,12,12,4,8,90);
echo date("d/N/y g:i A ", $d);
echo "<br>";
$d = mktime(214124,1241242,1421412,4,8,124120);
echo date("d M Y, H:i:s ", $d);
echo "<br>";
echo date("D, d M Y H:i:s P");


?>