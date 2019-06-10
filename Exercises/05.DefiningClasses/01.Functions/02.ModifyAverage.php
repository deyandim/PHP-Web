<?php
$num = readline();
$count = true;
while($count) {

    checkAvg($num, $count);
}
function checkAvg(&$n, &$c)
{
    if (sum($n) / strlen($n) > 5) {
        echo $n;
        $c = false;
        return $c;
    }
    addNine($n);
}
function addNine(&$n){
    $n .= '9';
    return $n;
}

function sum($n){
    $sum = 0;
    for($i = 0; $i < strlen($n); $i++){
        $sum += intval($n[$i]);
    }
    return $sum;
}


//echo checkAvg($num);