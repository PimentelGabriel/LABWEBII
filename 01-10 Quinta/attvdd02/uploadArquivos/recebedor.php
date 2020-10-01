<?php
    
// <?php
// Array(
//     [arquivo] => Array(
//         [nome]=>
//         [type]=>
//         [tp_name]=>
//         [erro]=>
//         [size]=>
//     )
// )
//$_FILES;

print_r($_FILES);

$nome = $_FILES['arquivo']['name'];
move_uploaded_file($_FILES['arquivo']['tmp_name'], 'arquivos/'.$nome);

$permitidos = ['image/jpeg', 'image/jpeg', 'image/png'];

if(in_array($_FILES['arquivo']['type'], $permitidos)){
    move_uploaded_file($_FILES['arquivo']['tmp_name'], 'arquivos/'.$nome."as");    
    echo "<br><br>Arquivo Salvo com Sucesso!";
}else{
    echo "<br><br>Arquivo Não permitido!";
}