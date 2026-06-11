<?php
session_start();

// Trava de segurança: Se não estiver logado, manda para o login
if (!isset($_SESSION['id_cliente'])) {
    header("Location: pag-login.php?mensagem=Acesse sua conta para ver o perfil.");
    exit();
}

include "inc-conexao.php";

// Busca os dados do cliente logado para exibir nos campos
$id_cliente = $_SESSION['id_cliente'];
$sql = "SELECT * FROM tb_cliente WHERE id_cliente = ?";
$stmt = mysqli_prepare($conexao, $sql);

$nome = $cpf = $cep = $endereco = $telefone = $email = "";

if ($stmt) {
    mysqli_stmt_bind_param($stmt, "i", $id_cliente);
    mysqli_stmt_execute($stmt);
    $resultado = mysqli_stmt_get_result($stmt);
    $usuario = mysqli_fetch_assoc($resultado);
    mysqli_stmt_close($stmt);

    if ($usuario) {
        $nome     = $usuario['nome_cliente'];
        $cpf      = $usuario['cpf_cnpj_cliente'];
        $cep      = $usuario['cep'] ?? ''; 
        $endereco = $usuario['endereco'];
        $telefone = $usuario['telefone'];
        $email    = $usuario['email'];
    }
}
mysqli_close($conexao);

include "inc-cabecalho.php";
include "inc-menu.php";
?>

<main>

    <div class="d-flex flex-column text-center align-items-center mx-5 my-4 p-5 border rounded shadow bg-white">
        <div class="container d-flex flex-column align-items-center mt-2" style="max-width: 600px;">
            <h1 class="p-2 mb-4">PERFIL DO USUÁRIO</h1>

            <!-- Ajustado para POST e apontando para o arquivo que vai salvar as alterações -->
            <form action="pag-atualizarperfil.php" method="post" class="w-100">
                
                <div class="mb-3 text-start">
                    <label for="nome" class="form-labelfw-bold">Nome:</label>
                    <input type="text" id="nome" name="nome" value="<?php echo htmlspecialchars($nome); ?>" required class="form-control">
                </div>
                
                <div class="mb-3 text-start">
                    <label for="cpf" class="form-label fw-bold">CPF/CNPJ:</label>
                    <input type="text" id="cpf" name="cpf" value="<?php echo htmlspecialchars($cpf); ?>" required class="form-control" readonly style="background-color: #e9ecef;">
                    <small class="text-muted">O CPF/CNPJ não pode ser alterado.</small>
                </div>
                
                <div class="mb-3 text-start">
                    <label for="cep" class="form-label fw-bold">CEP:</label>
                    <input type="text" id="cep" name="cep" value="<?php echo htmlspecialchars($cep); ?>" class="form-control" placeholder="00000-000">
                </div>
                
                <div class="mb-3 text-start">
                    <label for="endereco" class="form-label fw-bold">Endereço:</label>
                    <input type="text" id="endereco" name="endereco" value="<?php echo htmlspecialchars($endereco); ?>" required class="form-control">
                </div>
                
                <div class="mb-3 text-start">
                    <label for="telefone" class="form-label fw-bold">Telefone:</label>
                    <input type="text" id="telefone" name="telefone" value="<?php echo htmlspecialchars($telefone); ?>" required class="form-control">
                </div>
                
                <div class="mb-3 text-start">
                    <label for="email" class="form-label fw-bold">Email:</label>
                    <input type="email" id="email" name="email" value="<?php echo htmlspecialchars($email); ?>" required class="form-control">
                </div>
                
                <hr class="my-4">
                <h5 class="text-start mb-3 text-secondary">Alterar Senha (Deixe em branco se não quiser mudar)</h5>
                
                <div class="mb-3 text-start">
                    <label for="senha" class="form-label fw-bold">Nova Senha:</label>
                    <input type="password" id="senha" name="senha" class="form-control">
                </div>
                
                <div class="mb-3 text-start">
                    <label for="confirmar_senha" class="form-label fw-bold">Confirmar Nova Senha:</label>
                    <input type="password" id="confirmar_senha" name="confirmar_senha" class="form-control">
                </div>
                
                <div class="d-flex justify-content-center mt-4">    
                    <button type="submit" class="btn btn-success me-2 px-4">Salvar Alterações</button>
                    <button type="reset" class="btn btn-danger px-4">Limpar</button>
                </div>
            </form>

            <?php
                if (isset($_GET['mensagem'])) {
                    echo '<div class="alert alert-info mt-3 w-100" role="alert">' . htmlspecialchars($_GET['mensagem']) . '</div>';
                }
            ?>

        </div>
    </div>
</main>
<script>
document.addEventListener("DOMContentLoaded", function () {
    const inputCep = document.getElementById("cep");
    const inputTelefone = document.getElementById("telefone");

    // Máscara de CEP (00000-000)
    if (inputCep) {
        inputCep.addEventListener("input", function (e) {
            let value = e.target.value.replace(/\D/g, "");
            if (value.length > 5) {
                value = value.substring(0, 5) + "-" + value.substring(5, 8);
            }
            e.target.value = value;
        });
    }

    // Máscara de Telefone ((00) 00000-0000 ou (00) 0000-0000)
    if (inputTelefone) {
        inputTelefone.addEventListener("input", function (e) {
            let value = e.target.value.replace(/\D/g, "");
            if (value.length > 0) {
                value = "(" + value;
            }
            if (value.length > 3) {
                value = value.substring(0, 3) + ") " + value.substring(3);
            }
            if (value.length > 10) {
                value = value.substring(0, 10) + "-" + value.substring(10, 14);
            } else if (value.length > 9) {
                value = value.substring(0, 9) + "-" + value.substring(9, 13);
            }
            e.target.value = value.substring(0, 15);
        });
    }
});
</script>

<?php include "inc-rodape.php" ?>
