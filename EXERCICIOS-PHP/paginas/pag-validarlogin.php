<?php

$email = $_POST['email'];
$senha =  $_POST['senha'];

if($email == "adm@gmail.com" && $senha == "123456"
){
    header("location: index.php");
    //Aqui definini a localização para onde será direcionado a validação//
}else{
    //echo "bloqueado";
    header("location: pag-cadastrar.php?mensagem=Tente novamente, email ou senha incorreto!");
}

?>