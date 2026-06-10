<?php
// Inicia a sessão imediatamente antes de qualquer outra inclusão
session_start();

$email = $_POST['email'] ?? '';
$senha = $_POST['senha'] ?? '';

include "inc-conexao.php";

$sql = "SELECT * FROM tb_cliente WHERE email = ?";
$stmt = mysqli_prepare($conexao, $sql);

if ($stmt) {
    mysqli_stmt_bind_param($stmt, "s", $email);
    mysqli_stmt_execute($stmt);
    
    $resultado = mysqli_stmt_get_result($stmt);
    $usuario = mysqli_fetch_assoc($resultado);
    mysqli_stmt_close($stmt);

    // Se o usuário existe
    if ($usuario) {
        // Se a senha bate com a criptografia
        if (password_verify($senha, $usuario['senha_usuario'])) {
            
            // Grava o ID do cliente na sessão
            $_SESSION['id_cliente'] = $usuario['id_cliente']; 
            $_SESSION['nome_cliente'] = $usuario['nome_cliente']; // ADICIONE ESTA LINHA

            // Redireciona diretamente
            mysqli_close($conexao);
            header("Location: index.php");
            exit();
        }
    }
}

// Se o código chegar até aqui, significa que falhou de verdade
mysqli_close($conexao);
header("Location: pag-login.php?mensagem=Tente novamente, e-mail ou senha incorretos!");
exit();
?>
