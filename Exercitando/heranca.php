<?php
class Veiculo{

	private $tipo;
	private $modelo;
	private $chassi;

	public function getTipo()
	{
		return $this->tipo;
		
	}
	public function setTipo($tipoVeiculo)
	{
		return $this->tipo = $tipoVeiculo;
	}


	public function getModelo()
	{
		return $this->modelo;
	}
	public function setModelo($modeloVeiculo)
	{
		return $this->modelo = $modeloVeiculo;
		

	}


	public function getChassi()
	{
		return $this->chassi;
		
	}
	public function setChassi($chassiVeiculo)
	{
		return $this->chassi = $chassiVeiculo;
	}
}

class Carro extends Veiculo{
	
	public static function verificaModelo($m){

		if($m==="uno")
		{
			echo "e Uno";
		}else
		{
			echo "nao e Uno";
		}

	

	}
}

/**
	public function uno(){

		$this->velocidade = 100;
		$this->veiculoatual = "uno";


	}
	public function fusca(){

		$this->velocidade = 150;
		$this->veiculoatual = "fusca";


	}

**/
	public function velocidadeAtual()
	{

		
	


	}



$qualVeiculo = new Carro();
$carro = "uno";
$qualVeiculo->setModelo($carro);
echo "Tipo do modelo e : " . $qualVeiculo->getModelo();
echo "<br>";
Carro::verificaModelo($qualVeiculo->getModelo());
$qualVeiculo->velocidadeAtual();


//$carroModelo->fusca();
//$carroModelo->velocidadeAtual();





?>