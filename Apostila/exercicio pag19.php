<?php

$num1=5;
$num2=2;
$operacao="soma";
$calculo;
echo "Exercicio Pag19.<br>";
function Soma(){
	global $operacao;
	global $calculo,$num1,$num2;

	if($operacao=="soma")
	{
		
		$calculo = $num1+$num2;
		
	}
}
Soma();
echo "Soma é : " . $calculo;

?>