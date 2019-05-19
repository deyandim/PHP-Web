<?php
$input = explode(' ', readline());
$maxFrequent = 0;
$outputNum;
$output = [];

foreach ($input as $num) {
    if (!key_exists($num, $output)){
        $output[$num] = 1;
    } else {
        $output[$num] += 1;
    }
}

foreach ($output as $num => $freq){
    if ($freq > $maxFrequent){
        $maxFrequent = $freq;
        $outputNum = $num;
    }
}

echo $outputNum;