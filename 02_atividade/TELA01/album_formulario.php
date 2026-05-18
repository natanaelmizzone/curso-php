<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro de Album</title>
</head>
<body>

    <h1>Cadastro de Album</h1>
    
    <form action="album_salvar.php" method="post">

        <label>Artista</label>
        <input type="text" name="artista"><br><br>

        <label>Nome do Album</label>
        <input type="text" name="nome"><br><br>

        <label>Ano de lançamento</label>
        <input type="number" name="lancamento"><br><br><br>

        <button type="submit">Enviar</button>
        <button type="reset">Limpar</button>

    </form>

    <hr>
    <h2>Listagem de albuns</h2>
    <?php 
    $arquivo = "album_db.txt";
    $arquivo_aberto = fopen($arquivo, "r");
    $conteudo = fread($arquivo_aberto , filesize($arquivo));
    echo $conteudo;
    fclose($arquivo_aberto);
    ?>
</body>
</html>