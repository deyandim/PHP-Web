<?php
$input = explode(', ', readline());

$row = $input[0];

$max = PHP_INT_MIN;
$min = PHP_INT_MAX;

$matrix = [];

for ($i = 0; $i < $row; $i++){
    $matrix[$i] = explode(', ', readline());
}

foreach ($matrix as $key => $value){
   foreach ($value as $num){
       if($num > $max){
           $max = intval($num);
       }
       if($num < $min){
           $min = intval($num);
       }
   }
}

echo 'Min: ' . $min . PHP_EOL;
echo 'Max: ' . $max . PHP_EOL;