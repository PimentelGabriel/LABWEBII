<?php
//Verifica cmpo string - se tiver vazio grava falçse
$nome = filter_input(INPUT_POST, 'nome');

$idade = filter_input(INPUT_POST, 'idade', FILTER_VALIDATE_INT);

$email = filter_input(INPUT_POST, 'email', FILTER_VALIDATE_EMAIL);

if($nome && $idade && $email){
    echo 'NOME: '.$nome."<br>";
    echo 'IDADE: '.$idade."<br>";
    echo 'E-MAIL: '.$email."<br>";
}else{
    header("Location: index.php");
    exit;
}