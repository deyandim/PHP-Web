<?php
$input = readline();

for($i = 0; $i < strlen($input); $i++){
    echo strtolower($input[$i]) . ' -> ' . (ord(strtolower($input[$i])) - 97) . PHP_EOL;
}