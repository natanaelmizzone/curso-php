<?php
$carrinho = [
    0 => 'Macarrão',
    1 => 'Feijão',
    2 => 'Arroz',
    3 => 'Batata',
];

echo '<pre>';

arsort($carrinho);/* Defini os itens na ordem crescente e não altera os valores*/
var_dump($carrinho);

echo '<hr>';

asort($carrinho);/* Determina os itens na ordem crescente.*/
var_dump($carrinho);

echo '<hr>';

sort($carrinho); /* Determina os valores em ordem crescendo, ou seja os itens permanece alterando somente a ordem dos valores.*/
var_dump($carrinho);

echo '<hr>';

echo '</pre>';
?>