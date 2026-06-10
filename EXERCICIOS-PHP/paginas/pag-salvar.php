<?php

$nome     = $_POST['nome'] ?? '';
$cpf      = $_POST['cpf'] ?? '';
$endereco = $_POST['endereco'] ?? '';
$telefone = $_POST['telefone'] ?? '';
$email    = $_POST['email'] ?? '';
$senha    = $_POST['senha'] ?? '';

// Segurança 1: Criptografa a senha usando o algoritmo padrão e seguro do PHP (BCRYPT)
$senhaCriptografada = password_hash($senha, PASSWORD_DEFAULT);

include "inc-conexao.php";

$sql = "INSERT INTO tb_cliente (nome_cliente, cpf_cnpj_cliente, endereco, telefone, email, senha_usuario) 
        VALUES (?, ?, ?, ?, ?, ?)";

$stmt = mysqli_prepare($conexao, $sql);

if ($stmt) {
    // Passamos a $senhaCriptografada no lugar da senha em texto limpo
    mysqli_stmt_bind_param($stmt, "ssssss", $nome, $cpf, $endereco, $telefone, $email, $senhaCriptografada);

    $resultado = mysqli_stmt_execute($stmt);

    // Fechamos o statement ANTES de redirecionar ou encerrar o script
    mysqli_stmt_close($stmt);

    if ($resultado) {
        header("Location: pag-login.php?mensagem=Cadastro realizado com sucesso! Faça seu login.");
        exit();
    } else {
        header("Location: pag-cadastro.php?mensagem=Erro ao cadastrar. Verifique se o e-mail ou CPF já estão cadastrados.");
        exit();
    }
} else {
    // Em produção, mude isso para uma mensagem genérica para não expor detalhes do banco
    echo "Erro na preparação do banco de dados: " . mysqli_error($conexao);
}

mysqli_close($conexao);
?>
