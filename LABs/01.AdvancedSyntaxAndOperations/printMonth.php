<?php
$months = ['January', 'February', 'March', 'April', 'May', 'June', 'July', 'August', 'September', 'October', 'November', 'December'];
$input = intval(readline());

if($input < 1 || $input > 12){
    echo 'Invalid Month!' . PHP_EOL;
}else{
    echo $months[$input - 1] . PHP_EOL;
}