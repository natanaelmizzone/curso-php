<?php
$carrinho = ['Arroz', 'Sabão', 'Feijão', 'Balinhas'];
    var_dump($carrinho);


    echo '<hr>';

array_pop($carrinho);/*POP remove o ultimo elemento do ARRAY*/
    var_dump($carrinho);

        echo '<hr>';

array_shift($carrinho);/*SHIFT remove o primeiro elemento do ARRAY*/
    var_dump($carrinho);

        echo '<hr>';

unset($carrinho[0]);/*UNSET ele remove da variavel ou um elemento da ARRAY*/
    var_dump($carrinho);

        echo '<hr>';

array_push($carrinho,'Tapete');/* PUSH ele adiciona.*/
array_push($carrinho, 'Rodo');
    var_dump($carrinho);

        echo '<hr>';

array_unshift($carrinho, 'Microondas'); /*UNSHIFT ele adiciona em primeiro, dando prioridade ao ultimo comando */
array_unshift($carrinho, 'Tapete');
    var_dump($carrinho);

        echo '<hr>';

$carrinho = array_unique($carrinho); /*Ele retira todos duplicados e deixa apenas um.*/
    var_dump($carrinho);
?>