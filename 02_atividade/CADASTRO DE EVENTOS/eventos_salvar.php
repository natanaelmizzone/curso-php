<?php
$nome = $_POST['nome'];
$tipo = $_POST['evento'];
$data = $_POST['data'];
$descricao = $_POST['descricao'];

$arquivo = fopen("eventos_db.txt","a");
fwrite($arquivo, "$nome \t $tipo $data $descricao \n ");
fclose($arquivo); 
header('location: eventos_formulario.php');

?>
