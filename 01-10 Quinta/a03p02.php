<?php
phpinfo();

// $dizimo = function(int $valor){
//     $res = $valor * 0.1;
//     return $res;
// };

// echo "1- ANÔNIMA: ".$dizimo(90)."<br><br>";

// $dizimo2 = fn (int $valor) => $valor*0.1;

// echo "2- Flecha: ".$dizimo2(123)."<br><br>";

$somar = fn(int $n1, int $n2 = 0) => $n1 * $n2;
echo "3- SOMAR ".$somar(3, 6);