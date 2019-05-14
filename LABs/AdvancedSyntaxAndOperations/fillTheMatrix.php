<?php
$input = explode(', ', readline());

$num = $input[0];
$type = $input[1];

$matrix[] = [];
if($type === 'A'){
    for ($i = 0; $i < $num; $i++){
        for ($j = 1; $j < $num * $num; $j+= $num){
            echo $i + $j . ' ';
        }
        echo PHP_EOL;
    }
}

if($type === 'B'){
    for ($i = 0; $i < $num; $i++){
        for ($j = 1; $j <= $num; $j++){
            $matrix[$i][] = $j + $num * $i;
        }
        if($i % 2 !== 0 ){
            $matrix[$i] = array_reverse($matrix[$i]);
        }
    }

    for ($i = 0; $i < count($matrix); $i++){
        for ($j = 0; $j < count($matrix); $j++){
            echo $matrix[$j][$i] . ' ';
        }
        echo PHP_EOL;
    }
}


