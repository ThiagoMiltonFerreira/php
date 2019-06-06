<?php
sql_autoload_register(function($nameClass){ // carrega altomaticamente

	$dirClass = "class";
	$filename = $dirClass . DIRETORY_SEPARATOR . $nameClass . ".php"; //retorna true ou false
	// class/config.php
	// DIRETORY_SEPARATOR e a / evita o erro da barra pois no windowns e para um lado no mac e outro lado

	if(file_exists($filename))
	{
		require_once($filename);
	}

});

?>