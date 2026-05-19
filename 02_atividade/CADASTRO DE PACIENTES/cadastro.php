<?php
    $nome = $_POST["nome"];
    $telefone = $_POST["telefone"];
    $cidade = $_POST["cidade"];
    $estado = $_POST["estado"];
    $opcao = $_POST["opcao"];

    $arquivo = fopen("pacientes.txt","a");
    fwrite($arquivo, "$nome \t $telefone \t $cidade \t $estado \t $opcao \n");
    fclose($arquivo);
    header('location: formulario.php');
?>