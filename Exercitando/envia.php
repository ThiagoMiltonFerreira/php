<?php
require_once "sessao.php";

$email = $_GET['email'];
$senha = $_GET['senha'];

//session_id('l83qdb016lfqf9tvvdh4iqo0tm');
if($sessaoAtiva=="thiago")
	{
		echo "e false<br><br>";
	}	

//echo var_dump($sessaoAtiva);

if(empty($email) && empty($senha))
{

	echo "Erro ao Enviar Email ou Senha";

}
else if($email==="thiagomilton.f@gmail.com" && $senha =="123")
{
	echo "logado com sucesso!"."<br>";
	echo "Sessao Atual: " . $sessaoIdEnvia."<br><br>";
	echo "<h1> Gerando o JSON</h1><br>";

	$alunoNota = array('Thiago',15 ,
		'Milton' ,16 ,
		'Ferreira',18);
	echo json_encode($alunoNota)."<br>"; //imprimi o JSON
	echo var_dump($alunoNota); // Imprimi tecnicamente o JOSON

	echo "<br><br><br>";
	echo "<h1> Gerando Codigo Apartir Do JSON</h1><br>";
	var_dump(json_decode('["Thiago",15,"Milton",16,"Ferreira",18]'));

echo "<h1>Funcoes Pre definidas. <br><br></h1>";
	//Verifica se a variavel e inteira
	$verifica ="";
	if (is_int($verifica)) {
		echo "Inteiro"."<br><br>";
	}
	//Verifica se a variavel esta vazia
	if (empty($verifica)){
		echo "Vazio"."<br><br>";
	}

}
else
{	
	echo "login e/ou senha incorreto / Sessao inativa!";

}

//echo $_GET['email'];
//echo $_GET['senha'];





?>