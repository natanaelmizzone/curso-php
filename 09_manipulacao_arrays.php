<?php
$carrinho = [
    0 => 'Macarrão',
    1 => 'Feijão',
    2 => 'Arroz',
    3 => 'Batata',
];

echo '<pre>';

arsort($carrinho);
var_dump($carrinho);

echo '<hr>';

asort($carrinho);
var_dump($carrinho);

echo '<hr>';

sort($carrinho);
var_dump($carrinho);

echo '<hr>';

echo '</pre>';
?>