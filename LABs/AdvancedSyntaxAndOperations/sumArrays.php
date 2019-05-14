<?php
$arr1 = explode(' ', readline());
$arr2 = explode(' ', readline());

$len1 = count($arr1);
$len2 = count($arr2);

$output = [];

for ($i = 0; $i < max($len1, $len2); $i++){
    echo $arr1[$i % $len1] + $arr2[$i % $len2] . " ";
}