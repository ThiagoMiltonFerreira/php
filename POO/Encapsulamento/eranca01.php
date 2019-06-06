<?php
class Documento{

	private $numero;


	public function getNumero()
	{
		return $this->numero;
	}

	public function setNumero($n)
	{
		$this->numero = $n;
	}

}


class CPF extends Documento{

	public function validar():bool
	{
		$numeroDoCpf = $this->getNumero();

		return true;
	}

}

$doc = new CPF();
$doc->setNumero("111112223333");
$doc->validar();
echo $doc->getNumero();
?>