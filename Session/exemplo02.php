<?php
session_start(); //Inicia a sessao
//session_unset($_SESSION["nome"]); //apaga a sessao
echo $_SESSION["nome"]; //Ultiliza a sessao nome criada no exemplo01.php
session_destroy($_SESSION["nome"]);

?>