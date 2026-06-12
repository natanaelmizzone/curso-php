<?php

$nome     = $_POST['nome'] ?? '';
$cpf      = $_POST['cpf'] ?? '';
$endereco = $_POST['endereco'] ?? '';
$telefone = $_POST['telefone'] ?? '';
$email    = $_POST['email'] ?? '';
$senha    = $_POST['senha'] ?? '';

$senhaCriptografada = password_hash($senha, PASSWORD_DEFAULT);

include "inc-conexao.php";

$sql = "INSERT INTO tb_cliente (nome_cliente, cpf_cnpj_cliente, endereco, telefone, email, senha_usuario) 
        VALUES (?, ?, ?, ?, ?, ?)";

$stmt = mysqli_prepare($conexao, $sql);

if ($stmt) {

    mysqli_stmt_bind_param($stmt, "ssssss", $nome, $cpf, $endereco, $telefone, $email, $senhaCriptografada);

    $resultado = mysqli_stmt_execute($stmt);


    mysqli_stmt_close($stmt);

    if ($resultado) {
        header("Location: pag-login.php?mensagem=Cadastro realizado com sucesso! Faça seu login.");
        exit();
    } else {
        header("Location: pag-cadastro.php?mensagem=Erro ao cadastrar. Verifique se o e-mail ou CPF já estão cadastrados.");
        exit();
    }
} else {

    echo "Erro na preparação do banco de dados: " . mysqli_error($conexao);
}

mysqli_close($conexao);
?>
