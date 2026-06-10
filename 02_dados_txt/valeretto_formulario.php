<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro de Clientes</title>
    <link rel="stylesheet" href="/style.css">
</head>
<body>
    <div class="container">
    <h1 class="titulo_form">Cadastro de Clientes</h1>
       
        <form action="pag-salvar.php" method="post">
            <div class="campo_label">
            <label>Nome:</label>
            <input type="text" name="nome"><br><br>
            
            <label>Idade:</label>
            <input type="number" name="idade"><br><br>
            
            <label>Telefone:</label>
            <input type="number" name="telefone"><br><br>
            
            <label>Endereço:</label>
            <input type="text" name="endereco"><br><br>

            <label>CPF:</label>
            <input type="text" name="cpf"><br><br>
            
            <label>Email:</label>
            <input type="email" name="email"><br><br>
            
            <label>Senha:</label>
            <input type="password" name="senha"><br><br>
            <br>
            </div>
            <div class="botoes">
            <button type="submit">Salvar</button>
            <button type="reset">Limpar</button>
            </div>
        </form>
                        <?php 
                #abrir conexão
                include "inc-conexao.php";

                #consultar os dados
                $sql = "select * from tb_vallereto order by artista, ano";
                $resultado = mysqli_query($conexao, $sql);

                #listar os dados
                while($linha_resultado = mysqli_fetch_assoc($resultado)){
                    echo "<tr>";
                    echo "<td> {$linha_resultado['id']} </td>";
                    echo "<td> {$linha_resultado['artista']} </td>";

                    echo "<td> <a href='discografia-visualizar.php?id={$linha_resultado['id']}'> {$linha_resultado['nome']} </a> </td>";

                    echo "<td> {$linha_resultado['ano']} </td>";
                    echo "<td> {$linha_resultado['tipo']} </td>";
                    echo "<td> <a href='discografia-excluir.php?id={$linha_resultado['id']}'>Excluir</a> 

                                <a href='discografia-editar.php?id={$linha_resultado['id']}'>Editar</a>
                    </td>";

                    echo "</tr>";
                }

                #fechar conexão
                mysqli_close($conexao);
                ?>

    </div>
</body>
</html>