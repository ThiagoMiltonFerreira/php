<?php
 
$n=array(3,5,8,2); // cria o array fixo

for($i=0;$i<50;$i++){ // adiciona mais posiçoes no array, pois no php o array e dinamico
	$n[]=$i; //adiciona o valor de i em uma nova posicao do array
}

print_r($n);

?>