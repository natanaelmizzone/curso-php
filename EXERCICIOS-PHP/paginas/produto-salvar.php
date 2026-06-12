<?php
ob_start();
session_start();

$nome      = $_POST['nome'] ?? '';
$descricao = $_POST['descricao'] ?? '';
$preco     = $_POST['preco'] ?? 0;
$imagem    = $_FILES['imagem'] ?? null;

// Validação básica de campos textuais
if (empty($nome) || empty($descricao) || empty($preco) || !$imagem) {
    header("Location: pag-cadastrarproduto.php?mensagem=Preencha todos os campos obrigatórios!");
    exit();
}

include "inc-conexao.php";

// ---- PROCESSO DE UPLOAD DA IMAGEM ----
$nomeImagemSalvar = "sem-foto.jpg"; // Nome padrão caso falhe

if ($imagem && $imagem['error'] === UPLOAD_ERR_OK) {
    
    // Define a pasta onde as fotos físicas ficarão guardadas
    $diretorioDestino = "src/img/";

    // Se a pasta não existir no seu projeto, o PHP cria ela automaticamente
    if (!is_dir($diretorioDestino)) {
        mkdir($diretorioDestino, 0755, true);
    }

    // Pega a extensão original do arquivo (ex: .png, .jpg)
    $extensao = strtolower(pathinfo($imagem['name'], PATHINFO_EXTENSION));
    
    // Extensões permitidas por segurança
    $extesoesPermitidas = ["jpg", "jpeg", "png", "webp"];

    if (in_array($extensao, $extesoesPermitidas)) {
        // Gera um nome único criptografado (ex: 5f39a1c...png) para nunca duplicar arquivos
        $nomeImagemSalvar = uniqid() . "." . $extensao;
        $caminhoFinal = $diretorioDestino . $nomeImagemSalvar;

        // Move o arquivo temporário do servidor para a pasta definitiva do seu projeto
        if (!move_uploaded_file($imagem['tmp_name'], $caminhoFinal)) {
            ob_end_clean();
            header("Location: pag-cadastrarproduto.php?mensagem=Erro ao mover a imagem para a pasta do servidor.");
            exit();
        }
    } else {
        ob_end_clean();
        header("Location: pag-cadastrarproduto.php?mensagem=Formato de imagem inválido! Use JPG, PNG ou WEBP.");
        exit();
    }
}

// ---- GRAVAÇÃO NO BANCO DE DADOS ----
$sql = "INSERT INTO tb_produto (nome_produto, descricao_produto, preco_produto, imagem_produto) 
        VALUES (?, ?, ?, ?)";

$stmt = mysqli_prepare($conexao, $sql);

if ($stmt) {
    // "ssds" significa: string (nome), string (descrição), double/float (preço), string (imagem)
    mysqli_stmt_bind_param($stmt, "ssds", $nome, $descricao, $preco, $nomeImagemSalvar);
    
    $resultado = mysqli_stmt_execute($stmt);
    mysqli_stmt_close($stmt);

    if ($resultado) {
        ob_end_clean();
        header("Location: index.php?mensagem=Produto cadastrado com sucesso!");
        exit();
    } else {
        ob_end_clean();
        header("Location: pag-cadastrarproduto.php?mensagem=Erro ao salvar o produto no banco de dados.");
        exit();
    }
} else {
    echo "Erro na preparação da query: " . mysqli_error($conexao);
}

mysqli_close($conexao);
ob_end_clean();
?>
