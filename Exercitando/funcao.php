<?php
class GetSetUsuario{
	private $nome;
	public function SetaNome($nome){
		$this->nome = $nome;

	}
	public function getNome(){
		return $this->nome;

	}
	
}


class Calculo{
	public function Soma($n1,$n2){
		$soma = $n1+$n2;
		return $soma;
	}
	public function Multiplica($n1,$n2){
		$multiplica = $n1*$n2;
		return $multiplica ;
	}
	public function Divide($n1,$n2){
		$divide = $n1/$n2;
		return $divide;
	}

}


class VerificaSeUsuarioCadastrado{
	//private $nome;
	private $retorno0;
	private $retorno1;
	private $retorno2;
	public function Usuarios($verUsuario){
		$arrayUsuarios = array(

			$arrayUsuarios[0] = "Thiago",
			$arrayUsuarios[1] = "Milton",
			$arrayUsuarios[2] = "Ferreira"

		);

		for($i=0;$i<=2;$i++)
		{

			if($arrayUsuarios[$i]===$verUsuario)
			{
				//return "Usuario cadastrado: ".$arrayUsuarios[$i];
				 $this->retorno0 = $arrayUsuarios[$i];

			}	
		}
		
		if($this->retorno0==$verUsuario)
		{
			//echo"Verificou: É o Thiago.";
			$this->retorno1 = "Verificou: É o " . $verUsuario . "." ;
		}
		else
		{
			//echo"Não e o Thiago.";
			$this->retorno2 = "Não e o " . $verUsuario . ".";
		}

		return array($this->retorno0, $this->retorno1, $this->retorno2); // retorna um array

	}
}

	





$numero1 = 4;
$numero2 = 2;
$nomeUsuario = "Milton"; 



$usu1 = new GetSetUsuario();
$verificaUsuario = new VerificaSeUsuarioCadastrado();
$calcular = new Calculo();




$usu1->SetaNome($nomeUsuario);
$verificaUsuario->Usuarios($nomeUsuario);




echo "<br>";
echo "Usuario Atual : " . $usu1->getNome();
echo "<br>";
$arrayRetorno = $verificaUsuario->Usuarios($nomeUsuario); //joga o array de retorno para a variavel
echo"Usuario cadastrado: ".$arrayRetorno[0]; //imprime possicao do array que foi retornado da classe
echo "<br>";

//o if abaixo verifica qual valor de retorno imprimir
if($arrayRetorno[1]=="")
{
	echo $arrayRetorno[2];
}
else
{
	echo $arrayRetorno[1];
}	
echo "<br>";
echo "Soma: " . $calcular->Soma($numero1,$numero2);
echo "<br>";
echo "Multiplica: " . $calcular->Multiplica($numero1,$numero2);
echo "<br>";
echo "Divide: " . $calcular->Divide($numero1,$numero2);



?>