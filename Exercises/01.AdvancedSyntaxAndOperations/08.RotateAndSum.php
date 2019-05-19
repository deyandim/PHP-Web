<?php
$inputArr = explode(' ', readline());
$n = intval(readline());
$matrix[]= [];
$result = [];

for ($i = 0; $i < $n; $i++){
    $el = array_pop($inputArr);
    array_unshift($inputArr, $el);
    $matrix[$i] = $inputArr;
}



foreach ($matrix as $key => $arr) {
    for ($i = 0; $i < count($arr); $i++){
        $result[$i] += $arr[$i];
    }
}

echo implode(' ', $result);