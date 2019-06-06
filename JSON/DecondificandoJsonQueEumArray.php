<?php
//Este e um exemplo de um JSON que e um array entao ele faz a decodificação de JSON para o codigo php original..JA TENHO O JASON QUERO QUE VOLTE A SER UM ARRAY
// Faz a decodificação do JSON
//atribuindo o jason para uma variavel
$meses ='[    
  "Janeiro",
  "Fevereiro",
  "Março"
] ';

$json = json_decode($meses,true); // passar o true se nao colocar o true ele joga o array como objeto nao como array que e o correto
var_dump($json);
?>