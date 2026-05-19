<?php
$artista = $_POST['artista'];
$nome = $_POST['nome'];
$lancamento = $_POST['lancamento'];

$arquivo = fopen("album_db.txt","a");
fwrite($arquivo, "$artista \t $nome $lancamento \n ");
fclose($arquivo); 
header('location; album_formulario.php');   

?>
