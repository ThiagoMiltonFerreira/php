<?php

$conn = new PDO("mysql:bdname=dbphp7;host=localhost","root","");

$stmt = $conn->prepare("SELECT * FROM dbphp7.tb_usuarios ORDER BY idusuario");

$stmt->execute();

function update($idUsuario,$desLogin,$desSenha)
{
	$stmt = $conn->prepare("UPDATE tb_usuarios SET dessenha = '123456' WHERE idusuario = 1; ");

	$stmt->execute();
}

 
$results = $stmt->fetchAll(PDO::FETCH_ASSOC);// o retorno do stmt sera um array com os valores do banco // // PDO::FETCH_ASSOC me retorna um array com chave valor linha=>valor

//var_dump($results); 
///**


echo"<table border='1'>";
foreach ($results as $row) { //para cada elemento do array results insere o valor no $row

	foreach ($row as $key =>$value) { // para cada linha pega chave e valor 
		//echo "<strong>" . $key . ": </strong>" . $value . "<br/>";
		echo"
  		<tr>
    		<td bgcolor='red'><strong>" . strtoupper($key) . "</strong></td>
    		
    		<td><input type='text' name='usrname' value='". $value ."'></td>
    		<td> <input type='text' name='usrname'>  </td>

   		 	
  		</tr>
  		";


	}
	echo"<td> <input type='button' name='Alterar' value='Alterar'  >  </td><td> <input type='button' name='Inserir' value='Inserir'>  </td><td>  </td>";
	//echo "===================================================</br>";
}
//**/




?>