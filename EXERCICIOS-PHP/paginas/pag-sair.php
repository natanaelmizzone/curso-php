<?php
session_start();

// Limpa todas as variáveis da sessão
$_SESSION = array();

// Destrói a sessão no servidor
session_destroy();

// Redireciona para a página de login com uma mensagem amigável
header("Location: pag-login.php?mensagem=Você saiu do sistema com segurança.");
exit();
?>