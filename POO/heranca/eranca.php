<?php
class Pessoa{

	public $nome = "Rasmus Lerdorf"; //TODO MUNDO VE
	protected $idade = 48; //SOMENTE NA MESMA CLASSE E CLASSE COM ERENÇA
	private $senha = "123456";  // SOMENTE NA CLASSE

public function verDados(){
	echo $this->nome . "<br/>";
	echo $this->idade . "<br/>";
	echo $this->senha . "<br/>";

}


}
class Programador extends Pessoa{

//erda da classe PESSOA, entao vem com o metodo verDados, como se ja estivesse com o codigo aqui dentro. POREM O QUE E PRIVATE SO E VISTO DENTRO DA CLASSE PRINCIPAL.


}

$objeto = new Programador();

//echo $objeto->nome."<br/>";
$objeto->verDados();



?>