<?php

$nome = $_POST['nome'];
$idade = $_POST['idade'];
$telefone = $_POST['telefone'];
$endereco = $_POST['endereco'];
$cpf = $_POST['cpf'];
$email = $_POST['email'];
$senha = $_POST['senha'];

//echo "$nome - $idade - $telefone - $endereco - $cpf - $email - $senha";

$arquivo = fopen("valeretto_db.txt", "a");
fwrite($arquivo, "$nome \t $idade $telefone $endereco $cpf $email $senha\n");
fclose($arquivo);

?>