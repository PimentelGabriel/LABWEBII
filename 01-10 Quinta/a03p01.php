<?php
function somar($n1, $n2){
    $total = $n1 + $n2;
    return $total;
}

//echo "1- TOTAL: ".total."<br><br>";

$soma = somar(16, 4);
echo "2- TOTAL: ".$soma."<br><br>";

$x = somar(1, 3);
$y = somar(5, 4);
$w = somar(x, y);

echo "2- TOTAL: ".$w."<br><br>";