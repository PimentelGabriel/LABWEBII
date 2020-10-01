<?php
$tipo = 'texto';

if($tipo = 'foto'){
    echo 'Exibindo uma foto'."<br>";
}if($tipo = 'video'){
    echo 'Exibindo uma video'."<br>";
}if($tipo = 'texto'){
    echo 'Exibindo uma texto'."<br>";
}

switch ($tipo) {
    case 'foto':
        echo "Exibindo foto"."<br>";
        break;
    case 'video':
        echo "Exibindo video"."<br>";
        break;
    case 'texto':
        echo "Exibindo texto"."<br>";
        break;
}