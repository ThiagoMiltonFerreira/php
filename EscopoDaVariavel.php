<?php 

$nome = "Glaucio"; // variavel global

function teste()
{
	global $nome; // mostra que a variavel nome e a variavel de fora, vou ultilizar a variavel global
	echo $nome."<br>";
}

function teste2()
{
	global $nome;
	echo $nome." Agora no teste 2";

}

teste();
teste2();


?>