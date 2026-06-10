

<main>
    <div>
        <h1>CADASTRO CLIENTE</h1>

        <!-- Envia os dados para a página pag-salvar.php -->
        <form action="pag-salvar.php" method="post">
     
            <label>Nome:</label>
            <input type="text" name="nome" required><br>
            
            <label>CPF/CNPJ:</label>
            <!-- Mudado para text para não sumir com o zero à esquerda -->
            <input type="text" name="cpf" required><br>
            
            <label>Endereço:</label>
            <input type="text" name="endereco" required><br>
            
            <label>Telefone:</label>
            <!-- Mudado para text para aceitar parênteses e traços -->
            <input type="text" name="telefone" required><br>
            
            <label>E-mail: </label>
            <input type="email" name="email" required><br>
            
            <label>Senha:</label>
            <input type="password" name="senha" required><br>
            
            <button type="submit" class="btn btn-success me-2">Enviar</button>
            <button type="reset" class="btn btn-danger me-2 mt-2">Limpar</button>
        </form>

        <?php
            // Exibe mensagens de sucesso ou erro vindas do arquivo pag-salvar.php
            if (isset($_GET['mensagem'])) {
                echo '<p style="color: blue; margin-top: 10px;">' . htmlspecialchars($_GET['mensagem']) . '</p>';
            }
        ?>
    </div>
</main>

