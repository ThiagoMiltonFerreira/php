<?php

//namespace sempre que tiver uma classe com mesmo nome para nao dar conflito ultiliza namespace 
require 'classes/produto.php'; //incluindo a classe no projeto (pasta classe/nomedaclasse.php)
require 'models/produto.php';

$produtoClasses = new \classe\produto(); //(\classe\ se refere ao nome do namespace que esta na classe produto dentro da pasta models) instanciado a classe produto da pasta classes que tem dentro dela uma classe produto com namespace(namespace classes;) que identifica esta classe produto, pois tem 2 classes com mesmo nome chamado produto o nomespace identifica qual e qual como se fosse um caminho.
$produtoClasses->mostrarDetalhes(); //metodo da classe  classe(nomespace) produto


$produtoModels = new \models\produto();
$produtoModels->mostrarDetalhes();
?>