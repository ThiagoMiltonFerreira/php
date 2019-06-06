<?php
function teste($callback){

//processo lento

	$callback();

	for($i=0;$i<10;$i++)
	{
		echo $i;
		echo "<br>";
	}

}

teste(function(){ echo "Terminou o processo."; });




?>