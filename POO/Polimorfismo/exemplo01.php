<?php

abstract class Animal{

	public function falar(){

		return "som";
	}
	public function mover(){

		return "Anda";
	}


}

class Cachorro extends Animal{

	public function falar(){ // metodo com mesmo nome que foi herdado da classe pai, como tem o mesmo nome e sobreposto.
		return "Late";

	}
}
class Gato extends Animal{

	public function falar(){
		return "Mia";

	}
}
class Passaro extends Animal{

	public function falar(){
		return "Canta";

	}
	public function mover(){
		return "voa e " . parent::mover(); //. parent::mover() chama da classe pai no caso a classe animal

	}
}





$pluto = new Cachorro();
$garfield = new Gato();

echo "------------------------"."<br>";
echo $pluto->falar()."<br>";
echo $pluto->mover()."<br>";
echo "------------------------"."<br>";
echo $garfield->falar()."<br>";
echo $garfield->mover()."<br>";
echo "------------------------"."<br>";
$ave = new Passaro();
echo $ave->falar()."<br>";
echo $ave->mover()."<br>";



?>