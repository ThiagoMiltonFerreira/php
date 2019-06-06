<?php

function ola()
{

	$argumentos=func_get_args(); // pega argumento passado em forma de array
	//echo var_dump($argumentos);
	echo $argumentos[1];
	//return $argumentos;

}

ola("Bom dia",10); // passa parametro sem variavel



?>