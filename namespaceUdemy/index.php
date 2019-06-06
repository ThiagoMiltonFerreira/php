<?php

require_once("config.php");

$cad = new Cadastro();

$cad->setNome("Thiago Ferreira");
$cad->setEmail("thiago@gmail.com");
$cad->setSenha("123456");


echo $cad;



?>