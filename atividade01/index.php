<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>História da Programação</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <h4 class="tituloPrincipal">História da programação</h4>
    <h1 class="tituloSecundario">Mulheres que fizeram a diferença</h1>
    <hr>
    <?php
    // aqui criar o array de mulheres
    $arrMulheres = [
        ['Ada Lovelace', '../IMG/ada-lovelace.webp', 'Ada Lovelace foi uma matemática inglesa do século XIX, considerada a primeira programadora da história. Trabalhou na máquina analítica de Charles Babbage e criou o primeiro algoritmo. Sua visão antecipou o uso dos computadores além de cálculos, incluindo música e arte.'],
        ['Grace Hopper', '../IMG/grace-hopper.webp', 'Grace Hopper foi uma cientista da computação e almirante da Marinha dos EUA. Criou o primeiro compilador e ajudou no desenvolvimento do COBOL. Foi responsável por popularizar o termo “bug” na computação e revolucionou a programação moderna.'],
        ['Dorothy Vaughan', '../IMG/dorothy-vaughan.png', 'Dorothy Vaughan foi uma matemática e programadora da NASA, pioneira entre mulheres negras na tecnologia. Especialista em FORTRAN, liderou equipes no cálculo aeroespacial e contribuiu para missões espaciais importantes, quebrando barreiras raciais e de gênero.'],
        ['Marissa Mayer', '../IMG/marissa-mayer1.png', 'Marissa Mayer é uma engenheira e executiva de tecnologia, uma das primeiras funcionárias do Google. Teve papel importante no desenvolvimento de produtos como busca e Gmail, e depois atuou como CEO do Yahoo, influenciando estratégias digitais globais.'],
        ['Margareth Hamilton', '../IMG/margareth-hamilton.webp', 'Margaret Hamilton é uma cientista da computação que liderou o desenvolvimento do software de navegação do programa Apollo. Seu trabalho foi essencial para o pouso na Lua e ajudou a consolidar a engenharia de software como área.']
    ]
    ?>

    <div class="galeria">
        <div class="item">
            <img src="<?php echo $arrMulheres[0][1];?>"/> 
            <h3><?php echo $arrMulheres[0][0];?></h3>
            <p><?php echo $arrMulheres[0][2];?></p>
        </div>
        <div class="item">
            <img src="<?php echo $arrMulheres[1][1];?>"/> 
            <h3><?php echo $arrMulheres[1][0];?></h3>
            <p><?php echo $arrMulheres[1][2];?></p>
        </div>
        <div class="item">
            <img src="<?php echo $arrMulheres[2][1];?>"/> 
            <h3><?php echo $arrMulheres[2][0];?></h3>
            <p><?php echo $arrMulheres[2][2];?></p>
        </div>
        <div class="item">
            <img src="<?php echo $arrMulheres[3][1];?>"/> 
            <h3><?php echo $arrMulheres[3][0];?></h3>
            <p><?php echo $arrMulheres[3][2];?></p>
        </div>
        <div class="item">
            <img src="<?php echo $arrMulheres[4][1];?>"/> 
            <h3><?php echo $arrMulheres[4][0];?></h3>
            <p><?php echo $arrMulheres[4][2];?></p>
        </div>
        
    </div>

    
</body>
</html> 