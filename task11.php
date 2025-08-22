<?php
$str = $_GET["s"];  

$str_kicik = strtolower($str);
echo "Kiçik herfle: " . $str_kicik . "<br>";
echo "Uzunluq: " . strlen($str) . "<br>";
echo "3-cü simvolu: " . $str[2];
?>