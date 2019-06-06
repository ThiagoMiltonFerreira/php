<?php
class Pessoa{

	public $nome = "Rasmus Lerdorf";
	protected $idade = 48;
	private $senha = "123456"; 

public function verDados(){
	echo $this->nome . "<br/>";
	echo $this->idade . "<br/>";
	echo $this->senha . "<br/>";

}


}
class Programador extends Pessoa{

//erda da classe PESSOA, entao vem com o metodo verDados, como se ja estivesse com o codigo aqui dentro. 


}

$objeto = new Programador();

//echo $objeto->nome."<br/>";
$objeto->verDados();



?>