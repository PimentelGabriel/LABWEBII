<?php
$pnome ="TADS ";
$snome = "UEPA";
$idade = 10;

$nomeCompleto = $pnome.$snome;
echo '1 '.$nomeCompleto."<br>";

$tripla = $pnome.' '.$snome;
echo '1 '.$nomeCompleto."<br>";

$mensagem = "$pnome $snome tem $idade anos";
echo '3 '.$mensagem.'<br>';

$w = $x.$y;
echo '4 '.$w."<br>";

$w = $x.$y;
echo '5 '.$w."<br>";

$nomeCompleto3 = $pnome;
$nomeCompleto3 .= $snome; // adiciona ao que ja tinha
echo '6 ' . $nomeCompleto3 . "<br>";