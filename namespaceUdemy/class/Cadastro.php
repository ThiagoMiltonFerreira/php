<?php

class Cadastro{

	private $nome;
	private $email;
	private $senha;


	public function getNome():string // :string e conversao do retorno para string
	{
		return $this->nome;
	}

	public function getEmail():string // :string e conversao do retorno para string
	{
		return $this->email;
	}

	public function getSenha():string // :string e conversao do retorno para string
	{
		return $this->senha;
	}

	public function setNome($nome){
		$this->nome = $nome;
	}
	public function setEmail($email){
		$this->email = $nome;
	}
	public function setEmail($senha){
		$this->senha = $senha;
	}

	public function __toString(){

		return json_encode(array(
			"nome"=>$this->getNome(),
			"email"=>$this->getEmail(),
			"senha"=>$this->getSenha()
		));

	}





}




?>