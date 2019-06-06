<?php

//include "include01.php";  // tenta funcionar msm que esteja com erro
require "include01.php"; // da erro fatal caso de erro,é melhor pq exige que o arquivo exista e esteja funcionando bem.
require_once "include01.php"; // so vai incluir uma vez, se por acaso dentro de um includ tiver tiver chamando o includ01 por exemplo nao vai dar erro pois vai chamar so uma vez e evitar o "loop"
$resultado = somar(25,25);

echo $resultado;



?>