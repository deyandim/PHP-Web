<?php
$arr = explode(' ', readline());
$oddOcc = '';
$output = [];

foreach ($arr as $item) {
    if(!key_exists(strtolower($item), $output)){
        $output[strtolower($item)] = 1;
    } else {
        $output[strtolower($item)] += 1;
    }
}

foreach ($output as $key => $value) {
    if ($value % 2 !==0){
        $oddOcc .= ', ' . $key;
    }
}

$oddOcc = ltrim($oddOcc, ', ');
echo $oddOcc;