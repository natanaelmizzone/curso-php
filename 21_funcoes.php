<?php
function escrever($texto){
    echo "{$texto} <br>";
}
//escrever();

function soma($n1, $n2){
    return $n1 + $n2;
}
// echo soma(12, 90);

function conta($n1, $n2, $taxa = 5){
    return ($n1 + $n2) * $taxa;
}
//echo conta(1,2);

function media($n1, $n2, $n3, $n4, $nota = 4){
    return($n1 + $n2 + $n3 + $n4) / $nota;
}
echo round( media(5,6,3,8));
?>
