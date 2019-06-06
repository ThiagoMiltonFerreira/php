<?php

$qualAsuaIdade = 70;

$idadeCrianca = 12;
$idadeMaior = 18;
$idadeMelhor = 65;

if($qualAsuaIdade < $idadeCrianca)
{

	echo "Criança";

}
else if($qualAsuaIdade < $idadeMaior)
{

	echo "Adolecente";

}
else if($qualAsuaIdade < $idadeMelhor)
{
	echo "Adulto";
}
else
{
	echo "Idoso";
}
echo "<br>";
echo ($qualAsuaIdade < $idadeMaior) ? "Menor de idade":"Maior de idade"; //caso a condiçao for veradeira menor de idade caso falsa maior de idade
?>