<?php
$nome = $_POST['nome'];
$tipo = $_POST['evento'];
$data = $_POST['data'];
$descricao = $_POST['descricao'];

$arquivo = fopen("album_db.txt","a");
fwrite($arquivo, "$nome \t $tipo $data $descricao \n ");
fclose($arquivo); 

?>
