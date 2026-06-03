<!DOCTYPE html>
<html lang="en">
  <?php include "inc-head.php" ?>
  <?php include "inc-menu.php" ?>
  <?php include "inc-carrousel.php" ?>
  <?php include "inc-categoria.php" ?>
  <main>
  <h1>login</h1>

  <!--- METHOD="post" defini como será utilizada as informções, seja POST, GET ou SET --->

    <form action="pag-validarlogin.php" method="post">

   <!--- Utiliza-se do type para definir qual vriave irei chamar --->
 
        
        <label>E-mail: </label>
        <input type="email" name="email"><br>
        <label>Senha:</label>
        <input type="password" name="senha"><br>
        <button type="submit">Acessar</button> 

        <button type="reset">Limpar</button>
    </form>
    <?php
        echo $_GET ['mensagem']??"";
        //Faz a chamada, ou seja o GET é a entrada de informação para a página caso de um erro ou um aviso nescessario//

    ?>
    </main>
    <?php include "inc-rodape.php" ?>
    </html>