<?php
 $nome = 'Carlos Ferreira';

 if (isset($nome)){ /*ISSET irá validar se a variável $nome acima existe*/
    echo $nome;
 }else{
    echo 'Não existe!';
 }

echo '<hr>';

 unset($nome); /*UNSET ele ira fazer ao contrario do ISSET, remover uma variável da memória.*/
 if(isset($nome)){
    echo $nome;
 }else{
    echo 'Não existe!';
 }
?>