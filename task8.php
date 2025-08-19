<?php
$meyveler = ["alma", "armud", "banan"];
$meyveler[] = "heyva";

rsort($meyveler);  

foreach ($meyveler as $m) {
    echo $m . "\n";
}
?>