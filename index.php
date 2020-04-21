<?php
include "function/Count.php";

$arr = [1, 1, 1, 8, 8, 55, 55, 55, 55, 88, 69];
$num = 8;

echo "<pre>";
print_r($arr);
echo "</pre>";
echo "<br>";

echo "Trong mảng trên, số $num xuất hiện " . countElement($arr, $num) . " lần";