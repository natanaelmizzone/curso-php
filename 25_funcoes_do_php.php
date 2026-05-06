<?php
$empresa = 'Senac Jaú';
echo "$empresa <br>";
$novaEmpresa = str_replace('Jaú', 'Americana', $empresa); /* o STR_REPLACE  sempre chama o proximo array, ou seja sempre o segundo. */
echo "$novaEmpresa <br>";
echo substr($novaEmpresa, 0, 4) . "<br>"; /* O SUBSTR faz com que o numero 0 puxa o valor da palavra e o 4 a quantidade de letras.*/
echo strlen($novaEmpresa); /* STRLEN é Quantidade de caracteres que tem dentro de uma variavel e o espaço também conta.*/
?>