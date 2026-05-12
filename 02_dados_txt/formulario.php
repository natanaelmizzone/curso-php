<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Cadastro de Clientes</h1>
    <form action="cadastro.php" method="post"></form>
        <label> Nome:</label>
        <input type="text" name="nome_usuario"><br><br>
        <label>Idade:</label>
        <input type="number" name="idade"><br><br>
        <label>Telefone:</label>
        <input type="text" name="telefone"><br><br>
        <label>Endereço:</label>
        <input type="text" name="endereco"><br><br>
        <label>CPF:</label>
        <input type="int" name="cpf"><br><br>
        <label>Usuario:</label>
        <input type="email" name="email"><br><br>
        <label>Senha:</label>
        <input type="password" name="senha"><br><br>
              
         <br>
        <button type="submit">Salvar</button>
        <button type="reset">Limpar</button>
    </form>
</body>
</html>