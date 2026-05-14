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
       
        <form action="valeretto_salvar.php" method="post">
            <div class="campo_label">
            <label>Nome:</label>
            <input type="text" name="nome"><br><br>
            
            <label>Idade:</label>
            <input type="number" name="idade"><br><br>
            
            <label>Telefone:</label>
            <input type="text" name="telefone"><br><br>
            
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

    </div>
</body>
</html>