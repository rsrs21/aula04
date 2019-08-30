<?php
#ARQUIVO RESPONSAVEL POR RESGATAR OS DADOS VINDO DO FURMULARIO DE CADASTRO DE PRODUTO

/*$nome = $_POST['txtNome'];
$preco = $_POST['txtQtd'];
$quantidade = $_POST['txtPreco'];
$imagem = $_POST['flImg'];*/

if($_SERVER['REQUEST_METHOD'] === 'POST'){
$nome = filter_input(INPUT_POST, "txtNome") ?? "";
$preco = filter_input(INPUT_POST, "txtPreco");
$quantidade = filter_input(INPUT_POST, "txtQtd");
$imagem = filter_input(INPUT_POST, "flImg");

echo "$nome<br>$quantidade<br>$preco<br>$imagem<br>";
} else {

    # REDIRECIONAMENTO DE PAGINA
    
    header('Location: cadastrar.php');


}

