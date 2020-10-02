<?php

session_start();

//$_SESSION['message'] = "Hello";

$server = 'localhost';
$user = 'root';
$psw = '';
$dbase = 'loja';
$db = mysqli_connect($server, $user, $psw, $dbase);

$nome = "";
$descricao = "";
$id = 0;
$update = false;

if(isset($_POST['adiciona'])){
    $nome = $_POST['nome'];
    $desrcao = $_POST['descricao'];

    mysqli_query($db, "INSERT INTO produtos (nome, descricao) VALUES ('$nome', '$descricao')");

    $_SESSION['message'] = "Produto adicionado!";
    header('location: produtos.php');
}

if(isset($_POST['altera'])){
    $id = $_POST['id'];
    $nome = $_POST['nome'];
    $desrcao = $_POST['descricao'];

    mysqli_query($db, "UPDATE produtos SET nome ='$nome', descricao = '$descricao' WHERE id = '$id')");

    $_SESSION['message'] = "Produto Alterado!";
    header('location: produtos.php');
}

if(isset($_POST['del'])){
    $id = $_POST['del'];

    mysqli_query($db, "DELETE FROM produtos WHERE id = '$id')");

    $_SESSION['message'] = "Produto Removido!";
    header('location: produtos.php');
}
?>