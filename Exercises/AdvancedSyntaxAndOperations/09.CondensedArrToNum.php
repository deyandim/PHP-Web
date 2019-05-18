<?php
$input = explode(' ', readline());

if(count($input) === 1){
    $output = $input;
}
while (count($input) != 1){
    $output = [];
    for ($i = 1; $i < count($input); $i++){
        $output[] = $input[$i - 1] + $input[$i];
    }
    $input = $output;
}

echo $output[0];