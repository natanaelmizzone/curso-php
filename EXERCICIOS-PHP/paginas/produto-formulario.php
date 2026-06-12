<?php 
session_start();
// COLOCAR TRAVA PARA ADMINISTRADOR
include "inc-cabecalho.php";
include "inc-menu.php";
?>

<main class="container my-5">
    <div class="row justify-content-center">
        <div class="col-12 col-md-8 col-lg-6 bg-white p-5 rounded shadow-sm">
            <h1 class="text-center mb-4">Cadastrar Novo Produto</h1>

         
            <form action="produto-salvar.php" method="post" enctype="multipart/form-data"> //enctype permite o envio de Imagens
                
                <div class="mb-3">
                    <label for="nome" class="form-label fw-bold">Nome do Produto:</label>
                    <input type="text" id="nome" name="nome" required class="form-control" placeholder="Ex: Aquecedor">
                </div>

                <div class="mb-3">
                    <label for="descricao" class="form-label fw-bold">Descrição:</label>
                    <textarea id="descricao" name="descricao" required class="form-control" rows="4" placeholder="Detalhes sobre o tamanho, material, etc."></textarea>
                </div>

                <div class="mb-3">
                    <label for="preco" class="form-label fw-bold">Preço (R$):</label>
                    <!-- step="0.01" permite que o usuário digite centavos (ex: 29.90) -->
                    <input type="number" id="preco" name="preco" step="0.01" min="0" required class="form-control" placeholder="0.00">
                </div>

                <div class="mb-4">
                    <label for="imagem" class="form-label fw-bold">Imagem do Produto:</label>
                    <input type="file" id="imagem" name="imagem" accept="image/*" required class="form-control">
                    <small class="text-muted">Formatos aceitos: JPG, JPEG, PNG ou WEBP.</small>
                </div>

                <div class="d-grid gap-2">
                    <button type="submit" class="btn btn-success btn-lg">Cadastrar Produto</button>
                    <a href="index.php" class="btn btn-outline-secondary">Cancelar</a>
                </div>
            </form>

            <?php
                if (isset($_GET['mensagem'])) {
                    echo '<div class="alert alert-info mt-3 text-center" role="alert">' . htmlspecialchars($_GET['mensagem']) . '</div>';
                }
            ?>
        </div>
    </div>
</main>

<?php include "inc-rodape.php"; ?>
