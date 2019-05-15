<?php
$input = explode(', ', readline());

$output = [];

for ($i = 1; $i < count($input); $i+=2){
    if(!key_exists($input[$i - 1], $output)){
        $output[$input[$i - 1]] = $input[$i];
    } else {
        $output[$input[$i - 1]] += $input[$i];
    }
}

foreach ($output as $city => $value) {
    echo $city . ' => ' . $value . PHP_EOL;
}