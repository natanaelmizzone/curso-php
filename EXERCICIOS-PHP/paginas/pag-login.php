<?php include "inc-cabecalho.php" ?>

<div class="container d-flex flex-column align-items-center mt-5">
    <h1>LOGIN USUÁRIO</h1>

    <!-- IMPORTANTE: O action aponta para o arquivo de validação separado -->
    <form action="pag-validarlogin.php" method="post" class="w-100" style="max-width: 400px;">
        
        <div class="mb-3">
            <label for="email" class="form-label">E-mail:</label>
            <input type="email" id="email" name="email" required class="form-control">
        </div>
        
        <div class="mb-3">
            <label for="senha" class="form-label">Senha:</label>
            <input type="password" id="senha" name="senha" required class="form-control">
        </div>
        
        <div class="mt-3">
            <button type="submit" class="btn btn-primary me-2">Acessar</button> 
            <button type="reset" class="btn btn-secondary">Limpar</button>
        </div>
    </form>

    <?php
        // Exibe a mensagem de erro se ela vier na URL
        if (isset($_GET['mensagem'])) {
            echo '<div class="alert alert-danger mt-3 w-100" style="max-width: 400px;" role="alert">' . htmlspecialchars($_GET['mensagem']) . '</div>';
        }
    ?>
</div>

<?php include "inc-rodape.php" ?>


