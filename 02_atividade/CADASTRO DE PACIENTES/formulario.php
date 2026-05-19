<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
    <title>Pacientes Form</title>
</head>
<body class="d-flex align-items-center justify-content-center" style="with:100vw; height: 100vh;">
    <div class=" d-flex flex-column p-5 shadow">
        <h1 class="mb-4">Cadastro de Pacientes</h1>
        <form action="cadastro.php" method="post" class="d-flex flex-column">

            <label class="form-label" for="nome" >Nome</label>
            <input class="form-control mb-3" type="text" name="nome" placeholder="nome do paciente">
            <label class="form-label" for="nome" >Telefone</label>
            <input class="form-control mb-3" type="text" name="telefone" placeholder="telefone do paciente">
            <label class="form-label" for="nome" >Cidade</label>
            <input class="form-control mb-3" type="text" name="cidade" placeholder="cidade residida">
            <label class="form-label" for="estado" >Estado</label>
            <select class="form-select" name="estado">
                <option value="notInformed">Selecione...</option>
                <option value="Acre">Acre</option>
                <option value="Alagoas">Alagoas</option>
                <option value="Amapá">Amapá</option>
                <option value="Amazonas">Amazonas</option>
                <option value="Bahia">Bahia</option>
                <option value="Ceará">Ceará</option>
                <option value="Distrito Federal">Distrito Federal</option>
                <option value="Espirito Santo">Espirito Santo</option>
                <option value="Goiás">Goiás</option>
                <option value="Maranhão">Maranhão</option>
                <option value="Mato Grosso do Sul">Mato Grosso do Sul</option>
                <option value="Mato Grosso">Mato Grosso</option>
                <option value="Minas Gerais">Minas Gerais</option>
                <option value="Pará">Pará</option>
                <option value="Paraíba">Paraíba</option>
                <option value="Paraná">Paraná</option>
                <option value="Pernambuco">Pernambuco</option>
                <option value="Piauí">Piauí</option>
                <option value="Rio de Janeiro">Rio de Janeiro</option>
                <option value="Rio Grande do Norte">Rio Grande do Norte</option>
                <option value="Rio Grande do Sul">Rio Grande do Sul</option>
                <option value="Rondônia">Rondônia</option>
                <option value="Roraima">Roraima</option>
                <option value="Santa Catarina">Santa Catarina</option>
                <option value="São Paulo">São Paulo</option>
                <option value="Sergipe">Sergipe</option>
                <option value="Tocantins">Tocantins</option>
            </select>

                <label class="form-label mt-1">Fumante?</label>
            <div>
                <input class="form-check-input" type="radio" name="opcao" value="sim">
                <label class="form-check-label" for="opcao">Sim</label>
                <br>
                <input class="form-check-input" type="radio" name="opcao" value="nao">
                <label class="form-check-label" for="opcao">Não</label>
            </div>

        <div class="mt-3">
            <button class="btn btn-primary text-white" type="submit">Enviar</button>
            <button class="btn btn-success text-white" type="reset">Limpar</button>
        </div>    
        </form>
    </div>

    <hr>
    <h2>Listagem de albúns</h2>
    <?php
    $arquivo = "pacientes.txt";
    $arquivo_aberto = fopen($arquivo, "r");
    $conteudo = fread($$arquivo_aberto , filesize($aqrquivo));
    echo $conteudo;
    fclose($arquivo_aberto);
    ?>

    /* fazer leitura de texto, pegano todo o arquivo.*/
    
</body>
</html>