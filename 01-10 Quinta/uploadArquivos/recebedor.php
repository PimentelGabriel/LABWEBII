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
    $diff = "";
    $num = 0;
    $type = explode(".",$_FILES['arquivo']['name']);
    $type = $type[count($type)-1];

    $_FILES['arquivo']['name'] = $type[0];

    while(file_exists("arquivos/".$_FILES['arquivo']['name'] ."_". $diff .".". $type)){
        $num++; 
        echo $num;
        $diff = $num."";
        echo "arquivos/".$_FILES['arquivo']['name'] . $diff;
    }

    //$nome = md5(time().rand(0, 1000));
    move_uploaded_file($_FILES['arquivo']['tmp_name'], 'arquivos/'.$nome."as");    
    echo "<br><br>Arquivo Salvo com Sucesso!";
}else{
    echo "<br><br>Arquivo Não permitido!";
}