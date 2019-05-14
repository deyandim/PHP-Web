<?php
$arr = explode(' ', readline());
$check = false;


for($i = 0; $i < count($arr); $i++){
    for($j = $i + 1; $j < count($arr); $j++){
        for($k = 0; $k < count($arr); $k++){
            $sum = $arr[$i] + $arr[$j];
            if($sum == $arr[$k]){
                echo $arr[$i] . ' + ' . $arr[$j] . ' == ' . $arr[$k] . PHP_EOL;
                $check = true;
            }
        }

    }
}
if(!$check){
    echo 'No';
}