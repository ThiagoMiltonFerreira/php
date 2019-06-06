<?php

abstract class Automovel { // classe abstrata nao pode ser instaciada diretamente para utilizar os atributos dela deve se criar outra classe e dar um extends(herança) 

	public function acelerar($velocidade)
	{
		echo"O veiculo acelerou  ".$velocidade . "Km/h.";
	}

		public function frenar($velocidade)
	{
		echo"O veiculo frenou ate  ".$velocidade . "Km/h.";
	}

		public function trocarMarcha($marcha)
	{
		echo"O veiculo engatou a marcha  " . $marcha;
	}
}

class DelRay extends Automovel{ // para ultilizar a classe Automovel(abstrata) voce precisa receber herança dela atravez do extends

}







$carro = new DelRay();
$carro->acelerar(50);


?>