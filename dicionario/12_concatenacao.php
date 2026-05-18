<?php
$var1 = 'João';
$var2 = 'da Silva';

//echo $var1 .' '. $var2 . ' '. 21212 

//$var3 = $var1 .' '. $var2 . ' '. 21212;

//echo $var3;

/*Aqui estamos concatenando uma vareavel utilizando os PONTOS e dando espaço com ASPAS simples*/

$nome = 'Rubens Pereira';
$empresa = 'Senac Americana';

echo 'O '.$nome.' é fundador  da Empresa: '.$empresa;

echo '<br>';

//echo 'Juntamente do ' .$var1. ' '.'contendo o sobrenome'. ' '.$var2;

//echo '<br>';

echo " O {$nome} é fundador da Empresa: {$empresa}";

/* Utilização de colchetes ao invez de ponto, facilitando na interpretação do que está visivél*/
?>