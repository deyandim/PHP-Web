<?php
$input = explode(' ', readline());

$currentSeq = 1;
$maxSequence = 1;
$currentArrSeq = [];
$outputSequence = [];

for ($i = 1; $i < count($input); $i++){
    if (count($currentArrSeq) == 0) {
        $currentArrSeq[] = $input[$i - 1];
    }
    if ($input[$i - 1] < $input[$i]){
        $currentSeq++;
        $currentArrSeq[] = $input[$i];
    } else {
        if (count($currentArrSeq) > count($outputSequence)){
            $outputSequence = $currentArrSeq;
            $currentArrSeq = [];
        } else {
            $currentArrSeq = [];
        }
    }
}

if (count($currentArrSeq) > count($outputSequence)){
    $outputSequence = $currentArrSeq;
}

foreach ($outputSequence as $item) {
    echo $item . " ";
}