
<?php include "inc-cabecalho.php" ?>
<?php include "inc-menu.php" ?>
<?php include "inc-carrousel.php" ?>
<?php include "inc-categoria.php" ?>
<main>
    <div class=" d-flex flex-column text-center align-items-center mx-5 my-2 p-5 border-1 rounded-6 shadow">
    
    <div class="container d-flex flex-column align-items-center mt-2">
        <h1 class="p-2">CADASTRO CLIENTE</h1>

        <!-- Envia os dados para a página pag-salvar.php -->
        <form action="pag-salvar.php" method="post">
        <div class="d-flex fs-5 mb-3">
            <label>Nome:</label>
            <input type="text" name="nome" required class="form-control mx-2"><br>
        </div>
        <div class="d-flex fs-5 mb-3">
            <label>CPF/CNPJ:</label>
            <!-- Mudado para text para não sumir com o zero à esquerda -->
            <input type="text" name="cpf" required class="form-control mx-2"><br>
        </div>
        <div class="d-flex fs-5 mb-3">
            <label>Endereço:</label>
            <input type="text" name="endereco" required class="form-control mx-2"><br>
        </div>
        <div class="d-flex fs-5 mb-3">
            <label>Telefone:</label>
            <!-- Mudado para text para aceitar parênteses e traços -->
            <input type="text" name="telefone" required class="form-control mx-2"><br>
        </div>
        <div class="d-flex fs-5 mb-3">
            <label>Email:</label>
            <input type="email" name="email" required class="form-control mx-2"><br>
        </div>
        <div class="d-flex fs-5 mb-3">
            <label>Senha:</label>
            <input type="password" name="senha" required class="form-control mx-2"><br>
        </div>
        <div class="d-flex justify-content-center fs-5 mb-3 ">    
            <button type="submit" class="btn btn-success me-2">Enviar</button>
            <button type="reset" class="btn btn-danger">Limpar</button>
        </div>
        </form>

        <?php
            // Exibe mensagens de sucesso ou erro vindas do arquivo pag-salvar.php
            if (isset($_GET['mensagem'])) {
                echo '<p style="color: blue; margin-top: 10px;">' . htmlspecialchars($_GET['mensagem']) . '</p>';
            }
        ?>
    </div>
</div>

</div>
</main>
<?php include "inc-rodape.php" ?>
