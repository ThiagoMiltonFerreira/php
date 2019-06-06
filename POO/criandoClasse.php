<?php


class Pessoa{   //classe

	public $nome;  // atributo da classe pessoa
	
	public function falar(){

		return "O meu nome é ".$this->nome; //$this->nome referencia atributo de fora da classe

	}

}

$glaucio = new Pessoa();
$glaucio->nome = "Glaucio Daniel";
echo $glaucio->falar();

?>