<?php

$dt = new DateTime(); //Instacia data
$periodo = new DateInterval("P30D"); //Adiciona 30 dias com base na data atual
echo "Data Atual: ".$dt->format("d/m/Y H:i:s"); //imprime e formata a data atual do date time
$dt->add($periodo); //Adiciona EFETIVAMENTE 30 dias com base na data atual
echo "<br>";
echo "Data Mais 30 Dias: ".$dt->format("d/m/Y H:i:s"); //Imprime a data com mais 30 dias

?>