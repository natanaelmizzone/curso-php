<?php
$estado = 'São Paulo/SP';
$arrayEstado = explode('/', $estado); /* Explode o "/" transformando em duas varieaveis.*/
echo "<pre>";
print_r($arrayEstado);
//var-dump($arrayInfo);


$info = 'São Paulo/SP/Brasil/Terra';
$arrayInfo = explode('/', $info);
print_r($arrayInfo);
//var_dump($arrayInfo);
?>