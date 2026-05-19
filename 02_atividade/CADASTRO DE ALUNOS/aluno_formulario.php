<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro de Alunos</title>

</head>
<body>
    
    <h1>Cadastro de Alunos</h1>

    <form action="aluno_salvar.php" method="post">

    <label>RA</label>
    <input type="number" name="ra">

    <label>Nome</label>
    <input type="text" name="nome" >

    <label>idade</label>
    <input type="number" name="idade">

    <button type="submit">Enviar</button>
    <button type="reset">Limpar</button>

    </form>

    <?php
    $arquivo = fopen("aluno_db.txt", "r");
    while(!feof($arquivo)){
        $linha = fgets($arquivo);
        echo "$linha<br>";
        
    }
    fclose($arquivo);
    ?>
</body>
</html>