<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>login</h1>
    <form action="validar_login.php" method="post">
        
        <label>E-mail: </label>
        <input type="email" name="email"><br>
        <label>Senha:</label>
        <input type="password" name="senha"><br>
        <button type="submit">Acessar</button>
        <button type="reset">Limpar</button>
    </form>
    <?php
        echo $_GET ['mensagem']??"";
    ?>
</body>
</html>