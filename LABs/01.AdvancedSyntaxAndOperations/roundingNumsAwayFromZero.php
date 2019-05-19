<?php
$arr = explode(' ', readline());

foreach ($arr as $num){
    echo $num . ' => ' . round($num , 0 ,PHP_ROUND_HALF_UP) . PHP_EOL;
}


