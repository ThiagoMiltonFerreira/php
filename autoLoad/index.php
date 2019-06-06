<?php

//include_once("class/autor.php"); // inclui a classe autor nesta pagina
//require_once("class/Artigo.php");
//AUTO LOAD faz include smp que e instanciada uma classe, dispensando o includ 

function __autoload($documentoPhp){ 
//toda vez que uma classe for instanciada o autoload e chamado passando o nome da classe (new Artigo()) por exemplo, pega o artigo e passa como parametro do autoload que e nome da classa do outro arquivo exemplo artigo.php.

	include_once("class/".$documentoPhp.".php"); // inclui a classe artigo nesta pagina
}

$artigo = new Artigo();	// manda o  nome da classe como parametro para o autoload
$artigo->setTitulo("Aprendendo Sobre AutoLoad");


echo $artigo->getTitulo();

$nome = new autor();// manda o  nome da classe como parametro para o autoload
$nome->setNome("Thiago Ferreira");

echo "<br><br>" . $nome->getNome();

?>