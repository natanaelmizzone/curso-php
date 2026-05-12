<?php

$email = $_POST['email'];
$senha =  $_POST['senha'];

if($email == "adm@gmail.com" && $senha == "123456"
){
    header("location: tela-administrativo.php");
    //Aqui definini a localização para onde será direcionado a validação//
}else{
    //echo "bloqueado";
    header("location: formulario.php?mensagem=Tente novamente, email ou senha incorreto!");
}
?>