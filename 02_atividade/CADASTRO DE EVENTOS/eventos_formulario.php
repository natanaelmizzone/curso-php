<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

<h1>Cadastro de Eventos</h1>

    <form action="eventos_salvar.php" method="post">

    <label>Nome</label>
    <input type="text" name="nome">

    <label>Tipo</label>
        <select name="evento">
        <option value="show">Show</option>
        <option value="formatura">Formatura</option>
    </select>

    <label>Data</label>
    <input type="date" name="data">

    <label>Descrição</label>
    <input type="text-box" name="descricao">

    <button type="submit">Enviar</button>
    <button type="reset">Limpar</button>

</form>

    <?php
    $arquivo = fopen("eventos_db.txt", "r");
    while(!feof($arquivo)){
        $linha = fgets($arquivo);
        echo "$linha<br>";
        
    }
    fclose($arquivo);
    ?>

</body>
</html>