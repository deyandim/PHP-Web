<?php
$arr = explode(' ', readline());
$outputArr = [];

foreach ($arr as $num) {
    if(!key_exists($num, $outputArr)){
        $outputArr[$num] = 1;
    } else{
        $outputArr[$num] += 1;
    }
}

ksort($outputArr);

foreach ($outputArr as $key => $counts) {
    echo $key . ' -> ' . $counts . PHP_EOL;
}