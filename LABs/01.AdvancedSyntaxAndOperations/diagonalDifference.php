<?php
$row = intval(readline());

$primaryDiagonal = 0;
$secondaryDiagonal = 0;

$matrix = [];

for ($i = 0; $i < $row; $i++) {
    $matrix[] = explode(' ', readline());
}

for ($j = 0; $j < count($matrix); $j++) {
    $primaryDiagonal += $matrix[$j][$j];
}
for ($j = 0; $j < count($matrix); $j++) {
    $secondaryDiagonal += $matrix[$j][count($matrix) - $j - 1];
}
echo abs($secondaryDiagonal - $primaryDiagonal);