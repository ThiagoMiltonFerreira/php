<?php

setlocale(LC_ALL, "pt_BR", "pt_BR.utf-8","portuguese"); //Pegar localidade, setar para padrao brasileiro.
//echo "Hoje é: ".ucwords(strftime("%A %B<br>")); // %A mostra dia da semana - %B mostra o mes
date_default_timezone_set('America/Sao_Paulo');
echo "Hoje é: ".ucwords(strftime("%A")).", dia ".date('Y-m-d   -   ').date("H:i:s");



?>