<?php
$input = explode(' ', readline());
$len = 1;
$bestSeq = '';
$bestLen = 0;

for ($i = 0; $i < count($input) - 1; $i++){
    if ($input[$i] == $input[$i + 1]){
        $len++;

    } else {
        if ($len > $bestLen){
            $bestLen = $len;
            $len = 1;
            $bestSeq = $input[$i];
        } elseif ($len === $bestLen){
            $len = 1;
        }
    }
    if($len === count($input)){
        $bestLen = $len;
        $bestSeq = $input[$i];
    }
}

for ($i = 0; $i < $bestLen; $i++){
    echo $bestSeq . ' ';
}
