<?php
$idade = 20;

if($idade < 18){
    echo "Menor de didade<br>";
}else{
    echo "Maior de idade<br>"
}

echo (($idade < 18) ? "Menor de didade" : "Maior de idade")."<br>";

$menorDeIdade = ($idade<18) ? true : false;
echo ($menorDeIdade);

if ($menorDeIdade) {
    echo "MENOR";
} else {
    echo "MAIOR";
}


