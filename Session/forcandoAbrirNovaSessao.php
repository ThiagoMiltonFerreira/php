<?php
session_start(); //Inicia a sessao

session_regenerate_id(); //Gera um novo ID
echo session_id();
var_dump($_SESSION);
?>