<?php
echo date("d/m/Y"); //Dia mes e ano(Y maiusculo vem 4 digitos) 

echo date("<br>H:i:s<br>"); // Hora atual

echo time();
echo"<br>";

$timeStamp = strtotime("+1 day"); // Pega p proximo dia.
echo date("l, d/m/Y", $timeStamp); // a letra l e para mostrar o dia tipo "segunda feira" o fomrato d/m/Y mostra a data atual e a variavel timeStamp que pega data atual mais 1
echo"<br>";
$timeStamp = strtotime("now");
//echo "Data atual : " . $timeStamp;
echo date("l, d/m/Y", $timeStamp);
?>