<?php
$input = readline();
$output = [];

for ($i = 0; $i < strlen($input); $i++){
    if (!key_exists($input[$i], $output)) {
        $output[$input[$i]] = 1;
    } else {
        $output[$input[$i]] += 1;
    }
}

foreach ($output as $letter => $counts) {
    echo $letter . ' -> ' . $counts . PHP_EOL;
}