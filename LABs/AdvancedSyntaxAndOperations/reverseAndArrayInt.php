<?php
$input = intval(readline());

$arr = [];

for($i = 0; $i < $input; $i++){
    $arr[] = intval(readline());
}

echo implode(' ', array_reverse($arr));