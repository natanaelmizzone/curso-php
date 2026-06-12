<?php
// Inicia a sessão caso você queira usar o ID do usuário para um carrinho no futuro
session_start();

// Captura o ID do produto enviado via URL (GET)
$id_produto = $_GET['id'] ?? 0;

// Se não houver ID na URL ou for inválido, redireciona de volta para a index
if (empty($id_produto) || !is_numeric($id_produto)) {
    header("Location: index.php");
    exit();
}

include "inc-conexao.php";

// Busca os detalhes do produto específico de forma segura (Prepared Statements)
$sql = "SELECT * FROM tb_produto WHERE id_produto = ?";
$stmt = mysqli_prepare($conexao, $sql);

$produto_encontrado = false;

if ($stmt) {
    mysqli_stmt_bind_param($stmt, "i", $id_produto);
    mysqli_stmt_execute($stmt);
    
    $resultado = mysqli_stmt_get_result($stmt);
    $produto = mysqli_fetch_assoc($resultado);
    
    mysqli_stmt_close($stmt);

    if ($produto) {
        $produto_encontrado = true;
        $nome       = $produto['nome_produto'];
        $descricao  = $produto['descricao_produto'];
        $preco      = number_format($produto['preco_produto'], 2, ',', '.');
        $imagem     = $produto['imagem_produto'];
    }
}

mysqli_close($conexao);

include "inc-cabecalho.php";
include "inc-menu.php";
?>

<main class="container my-5">
    <?php if ($produto_encontrado): ?>
        <!-- Layout em duas colunas usando Bootstrap: Foto na esquerda, Informações na direita -->
        <div class="row bg-white p-4 rounded shadow-sm">
            
            <!-- Coluna da Imagem -->
            <div class="col-12 col-md-6 text-center d-flex align-items-center justify-content-center border-end">
                <img src="img/produtos/<?php echo htmlspecialchars($imagem); ?>" 
                     alt="<?php echo htmlspecialchars($nome); ?>" 
                     class="img-fluid p-3" 
                     style="max-height: 450px; object-fit: contain;">
            </div>

            <!-- Coluna dos Dados e Compra -->
            <div class="col-12 col-md-6 ps-md-5 d-flex flex-column justify-content-center mt-4 mt-md-0">
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb small">
                        <li class="breadcrumb-item"><a href="index.php" class="text-decoration-none">Home</a></li>
                        <li class="breadcrumb-item active" aria-current="page">Produtos</li>
                    </ol>
                </nav>

                <h1 class="display-5 text-dark fw-bold mb-3"><?php echo htmlspecialchars($nome); ?></h1>
                
                <h2 class="text-success display-6 fw-bold mb-4">R$ <?php echo $preco; ?></h2>
                
                <div class="mb-4">
                    <h5 class="text-secondary border-bottom pb-2 mb-2">Descrição do Produto</h5>
                    <p class="text-muted lh-base"><?php echo nl2br(htmlspecialchars($descricao)); ?></p>
                </div>

                <!-- Formulário para envio ao carrinho ou compra direta -->
                <form action="pag-carrinho.php" method="post" class="mt-3">
                    <input type="hidden" name="id_produto" value="<?php echo $id_produto; ?>">
                    
                    <div class="d-flex align-items-center mb-4" style="max-width: 200px;">
                        <label for="quantidade" class="form-label me-3 mb-0 fw-bold">Qtd:</label>
                        <input type="number" id="quantidade" name="quantidade" class="form-control text-center" value="1" min="1" max="10">
                    </div>

                    <div class="d-grid gap-2 d-md-flex">
                        <button type="submit" class="btn btn-primary btn-lg px-5 flex-grow-1">
                            <i class="bi bi-cart-plus me-2"></i> Adicionar ao Carrinho
                        </button>
                        <a href="index.php" class="btn btn-outline-secondary btn-lg px-4">
                            Voltar
                        </a>
                    </div>
                </form>
            </div>

        </div>
    <?php else: ?>
        <!-- Mensagem de erro amigável caso o ID do produto não exista no banco -->
        <div class="alert alert-warning text-center my-5 py-4" role="alert">
            <h4 class="alert-heading">Produto não encontrado!</h4>
            <p class="mb-0">O produto que você está procurando não existe ou foi removido do catálogo.</p>
            <a href="index.php" class="btn btn-primary mt-3">Voltar para a Loja</a>
        </div>
    <?php endif; ?>
</main>

<?php include "inc-rodape.php"; ?>
