<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro de Discografia</title>
    <link rel="stylesheet" href="style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
</head>
<body>
<main>
<div class="container">
<h1>Cadastro de Discografia</h1>

    <form action="discografia-salvar.php" method="post">

    <label>Artista</label><br>
    <input type="text" name="artista"><br><br>

    <label>Nome do Álbum</label><br>
    <input type="text" name="nome"><br><br>
    
    <label>Ano de Lançamento</label><br>
    <input type="number" name="ano"><br><br>
    
    <label>Tipo</label><br>
        <select type="select" name="tipo">
        <option value="album">Álbum</option>
        <option value="single">Single</option>
    </select><br><br>

    <label>Foto</label><br>
    <input type="text" name="foto"><br><br>

    <button type="submit">Enviar</button>
    <button type="reset">Limpar</button>

</form>
</div>
</main>
<footer class="bg-dark p-3 text-center text-light pt-3">
    <p>Natanael Mizzone - natanmizzone@gmail.com</p>
</footer>
</body>
</html>