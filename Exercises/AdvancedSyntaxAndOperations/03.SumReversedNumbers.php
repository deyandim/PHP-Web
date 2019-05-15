<?php
$input = explode(' ', readline());

$sum = 0;

foreach ($input as $num) {
    $sum += intval(strrev($num));
}

echo $sum;