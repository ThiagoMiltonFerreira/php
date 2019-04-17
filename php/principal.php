<?php
function __autoload($class){
  require_once( $class.".php");
}

$query = new sqls();

	$login = $_POST['nome'];
	$senha = $_POST['senha'];
	
	$criptoSenha = md5($senha); //criptografa pelo metodo hash a senha digitada pelo usuario


	/**

	$criptografa = md5('teste2'); //crptografa o texto
	var_dump(password_verify('teste2',$criptografa)); //verifica se o texto corresponde ao valor criptografado RETORNA TRUE OU FALSE

	**/	
	//$dadosSelect = $query->BuscaNoBanco("SELECT * FROM bdcarteiraweb.tb_usuarios");
	
	$dadosSelect = $query->BuscaNoBanco("SELECT * FROM bdcarteiraweb.tb_usuarios WHERE nome = '$login' AND senha = '$criptoSenha'");
	

	if(empty($dadosSelect))
	{
		echo "Tabela Vazia! Verifique o seu usuario/senha. <br>";
	}
	else
	{


	foreach ($dadosSelect as $linha)  
	{

			foreach ($linha as $chave => $valor) 
			{

						echo $chave . " - " . $valor."\n";

					

			}
		}
	}




/**
//Insere
$dadosInsert = $query->InsereNoBanco("INSERT INTO bdcarteiraweb.tb_usuarios (nome,email,senha,perg_Secreta,resp_perg_secreta) VALUES(
'Edson','edsonbh@gmail.com','123','Qual Nome do seu cachorro?','meu toto')");

if ($dadosInsert===true) 
{
	echo "Dados inseridos com sucesso!";

}
else
{
	echo "Erro ao inserir dados!";
}
**/

/**
//Excluir
$dadosExcluir = $query->Excluir("DELETE FROM bdcarteiraweb.tb_usuarios WHERE id_usuarios =12");

if ($dadosExcluir===true) 
{
	echo "Dados Excluidos com sucesso!";

}
else
{
	echo "Erro ao Excluir dados!";
}
**/

/**
//Buscar
$dadosSelect = $query->BuscaNoBanco("SELECT * FROM bdcarteiraweb.tb_usuarios");
if(empty($dadosSelect))
{
	echo "Tabela Vazia! <br>";
}
else
{
//echo json_encode($dadosSelect);
//var_dump($dadosSelect);

foreach ($dadosSelect as $linha)  //do array  dadosSelect pega a linha
{
	foreach ($linha as $chave => $valor) // da linha pega chave e valor
	{

		echo $chave . " - " . $valor ."\n";



	}
	
}

}
**/


//echo "<meta HTTP-EQUIV='refresh' CONTENT='5;URL=principal.php'>"; // atualiza a pagina a cada 5 segundos

?>