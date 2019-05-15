<?php
$input = explode(', ', readline());

$output = [];

foreach ($input as $el) {
    if (!key_exists($el, $output)) {
        $output[$el] = 1;
    } else {
        $output[$el] += 1;
    }
}
foreach ($output as $elem => $counts) {

    if($counts === 1){
        echo $elem . ' ';
    }
}
