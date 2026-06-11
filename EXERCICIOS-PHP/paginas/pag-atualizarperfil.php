<?php
ob_start();
session_start();

// Trava de segurança: impede acessos diretos sem estar logado
if (!isset($_SESSION['id_cliente'])) {
    header("Location: pag-login.php");
    exit();
}

include "inc-conexao.php";

$id_cliente      = $_SESSION['id_cliente'];
$nome            = $_POST['nome'] ?? '';
$cep             = $_POST['cep'] ?? '';
$endereco        = $_POST['endereco'] ?? '';
$telefone        = $_POST['telefone'] ?? '';
$email           = $_POST['email'] ?? '';
$senha           = $_POST['senha'] ?? '';
$confirmar_senha = $_POST['confirmar_senha'] ?? '';

// 1. Validação de Senha (se o usuário digitou alguma coisa no campo)
$alterar_senha = false;
if (!empty($senha) || !empty($confirmar_senha)) {
    if ($senha !== $confirmar_senha) {
        ob_end_clean();
        header("Location: pag-perfil.php?mensagem=Erro: A nova senha e a confirmação não são iguais!");
        exit();
    }
    // Criptografa a nova senha antes de salvar
    $senhaCriptografada = password_hash($senha, PASSWORD_DEFAULT);
    $alterar_senha = true;
}

// 2. Monta a Query SQL dinamicamente baseada na mudança de senha
if ($alterar_senha) {
    $sql = "UPDATE tb_cliente 
            SET nome_cliente = ?, cep = ?, endereco = ?, telefone = ?, email = ?, senha_usuario = ? 
            WHERE id_cliente = ?";
} else {
    $sql = "UPDATE tb_cliente 
            SET nome_cliente = ?, cep = ?, endereco = ?, telefone = ?, email = ? 
            WHERE id_cliente = ?";
}

$stmt = mysqli_prepare($conexao, $sql);

if ($stmt) {
    // Vincula as variáveis ao SQL correspondente
    if ($alterar_senha) {
        mysqli_stmt_bind_param($stmt, "ssssssi", $nome, $cep, $endereco, $telefone, $email, $senhaCriptografada, $id_cliente);
    } else {
        mysqli_stmt_bind_param($stmt, "sssssi", $nome, $cep, $endereco, $telefone, $email, $id_cliente);
    }

    $resultado = mysqli_stmt_execute($stmt);
    mysqli_stmt_close($stmt);

    if ($resultado) {
        // Atualiza o nome na sessão caso o usuário tenha mudado no perfil
        $_SESSION['nome_cliente'] = $nome;

        ob_end_clean();
        header("Location: pag-perfil.php?mensagem=Perfil atualizado com sucesso!");
        exit();
    } else {
        ob_end_clean();
        header("Location: pag-perfil.php?mensagem=Erro ao atualizar os dados no banco de dados.");
        exit();
    }
} else {
    echo "Erro na preparação: " . mysqli_error($conexao);
}

mysqli_close($conexao);
ob_end_clean();
?>
