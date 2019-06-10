<?php
$num = readline();
$arrOfActions = explode(', ', readline());

function divide(&$n){
    $n /= 2;
    return $n;
}

function dice(&$n){
    $n = sqrt($n);
    return $n;
}

function spice(&$n) {
    $n++;
    return $n;
}

function bake(&$n){
    $n *= 3;
    return $n;
}

function fillet(&$n){
    $n -= $n * 0.2;
    return $n;
}

foreach ($arrOfActions as $func){
    switch ($func){
        case 'chop':
            echo divide($num) . PHP_EOL;
            break;
        case 'dice':
            echo dice($num) . PHP_EOL;
            break;
        case 'spice':
           echo spice($num) . PHP_EOL;
        break;
        case 'bake':
            echo bake($num) . PHP_EOL;
            break;
        case 'fillet':
            echo fillet($num) . PHP_EOL;
            break;

    }
}