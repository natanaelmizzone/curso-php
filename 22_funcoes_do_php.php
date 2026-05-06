<?php
$name = 'Senac Americana - Cursos de TI';
echo strtoupper($name); /*escreve tudo em MAIUSCULO*/
echo '<hr>';
echo strtolower($name);/*escreve tudo em MINUSCULO*/
echo '<hr>';
echo ucfirst(strtolower($name));/*escreve somente a primeira letra em MAIUSCULO*/
echo '<hr>';
echo ucwords(strtolower($name));/*escreve SEMPRE a primeira letra em MAIUSCULO em todas as palavras*/
echo '<hr>';

?>
