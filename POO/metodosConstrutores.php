<?php

class Endereco {

	private $logradouro;
	private $numero;
	private $cidade;



	//public function__construct($a,$b,$c){
	public function __construct($a, $b, $c){

		$this->logradouro = $a;
		$this->numero = $b;
		$this->cidade = $c;
	
	}
	
    
}

$meuEndereco = new Endereco("Rua Aimores 1001","123","Santos"); // METODO CONSTRUTOR PASSA O VALOR NA HORA DE INSTACIAR O OBJETO
var_dump($meuEndereco);



?>