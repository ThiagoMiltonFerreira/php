<?php


class Carro{

	private $modelo;
	private $motor;
	private $ano;

	public function getModelo(){ //pega o modelo da variavel modelo

		return $this->modelo;
	}

	public function setModelo($modelo){

		$this->modelo = $modelo;

	}

	public function getMotor():float{ //pega o modelo da variavel modelo. converte o retorno Retorno inteiro


		return $this->motor;
	}

	public function setMotor($motor){

		$this->motor = $motor;

	}

	public function getAno():int{ //pega o modelo da variavel modelo.converte o retorno Retorno inteiro

		return $this->ano;
	}

	public function setAno($ano){

		$this->ano = $ano;
 
	}


	public function exibir(){
		/**
		return $d array(
			"modelo"=>$this->getModelo(),
			"motor"=>$this->getMotor(),
			"ano"=>$this->getAno()

		);
		**/
		$d = array(
			"modelo"=>$this->getModelo(),
			"motor"=>$this->getMotor(),
			"ano"=>$this->getAno()

		);


	}

}
$gol = new Carro();
$gol->setModelo("GOL"); 
$gol->setMotor("1.6");
$gol->setAno("2017");

foreach ($variable as $key => $value) {
	# code...
}

//var_dump($gol->exibir());
//print_r($gol->exibir()); //print_r — Imprime informação sobre uma variável de forma legível, imprime igual esta abaixo:
/**Array
(
    [modelo] => GOL
    [motor] => 1.6
    [ano] => 2017
)

**/

 ?>