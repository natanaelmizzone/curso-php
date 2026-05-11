<?php

$email = $_POST['email'];
$senha =  $_POST['senha'];

if($email == "adm@gmail.com" && $senha == "123456"
){
    header("location: tela-administrativo.php");
}else{
    //echo "bloqueado";
    header("location: formulario.php?mensagem=Tente novamente, email ou senha incorreto!");
}
?>