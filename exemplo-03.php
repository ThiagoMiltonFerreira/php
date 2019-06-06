<?php
	// Tipos de variaveis
	$nome = "Hcode"; //texto
	$site = "www.hcode.com.br";

	$ano = 1990; //Inteiro
	$salario = 5000.99; //Double
	$bloqueado = false; //Bollean

	/////////////////////////////////////////////
	//Tipos composto

	$frutas = array("abacaxi","laranja","manga");
	echo "Array posição 0: " . $frutas[0]."<br>";
	echo "Array posição 1: " . $frutas[1]."<br>";
	echo "Array posição 2: " . $frutas[2]."<br>";

	////////////////////////////////////////////
	//Exemplo de Orientação a Objeto
	$nascimento = new DateTime();
	//Mostra detalhes sobre a variavel
	//var_dump($nascimento);

	////////////////////////////////////////////
	//Tipos Especiais
	$arquivo = fopen("exemplo-03.php","r");
	//Mostra detalhes da variavel 
	//Resultado:
	// resource(3) of type (stream)
	//var_dump($arquivo);
	$nulo = null;
?>