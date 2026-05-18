<?php
$idades = [12, 14, 18, 20, 44, 50, 98, 78, 56];

//echo $idades[count($idades)-1]; 
/* Seleciona o penultima array.*/

//echo end($idades); 
/* Seleciona o ultimo array.*/

$idadesFiltradas = array_filter($idades, function($idade){
        return $idade >= 18;
}); /* (ARRAY_FILTER)Filtra maior que 18 anos de idade.*/

var_dump($idadesFiltradas);
?>