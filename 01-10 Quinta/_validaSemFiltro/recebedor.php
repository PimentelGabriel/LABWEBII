<?php

$nome = $_POST['nome'];
$idade = $_POST['idade'];
$email = $_POST['email'];

if($nome != null && $idade != null && $email != null){
    echo 'NOME: '.$nome."<br>";
    echo 'IDADE: '.$idade."<br>";
    echo 'E-MAIL: '.$email."<br>";
}else{
    header("Location: index.php");
}