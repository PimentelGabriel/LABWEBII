<form method="POST" action="index.php">
    <label>
        <br>
        <input type="text" name="nome"/>
    </label>
    <input type="submit" value="Adicionar"/>
</form>

<h2>Lita de Nomes</h2>

<?php
    //RECEBENDO O CAMPO NOME DO FOMULÁRIO
    $nome = filter_input(INPUT_POST, 'nome', FILTER_SANITIZE_SPECIAL_CHARS);
    $texto = file_get_contents('listanomes.txt');

    //phpinfo();
    if($nome) {
        $texto .= "\n".$nome;
        file_put_contents('listanomes.txt', $texto);
    }

    $texto = file_get_contents('listanomes.txt');
    $linhas = explode("\n", $texto);

?>
<ul>
<?php
    for ($i=0; $i < count($linhas); $i++){
        echo "<li>".$linhas[$i]."</li>";        
    }
?>
</ul>