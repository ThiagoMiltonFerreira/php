<?php

class Documento{

	private $numero;

	public function getNumero(){
		return $this->numero;
	}
	public function setNumero($numero){
		
		$resultado = Documento::validarCPF($numero); // chama o validar cpf da classe documento e ja passa a variavel.

		if($resultado === false)
		{
			echo "<h1 align='center'> ERRO!</h1>";
			throw new Exception("O CPF informado nao e valido!", 1);
			
		}else
		{
			echo "<h1 align='center'> CPF Validado!</h1>";
			$this->numero = $numero;
		}	
	}



public static function validarCPF($cpf):bool{
	 if(empty($cpf)) {
	 	return false;
    
 	}
    $cpf = preg_replace('[^0-9]','', $cpf);

    $cpf = str_pad($cpf, 11, '0', STR_PAD_LEFT);
     
    
    if (strlen($cpf) != 11) {
        //echo "length";
        return false;
    }
    
    else if ($cpf == '00000000000' || 
        $cpf == '11111111111' || 
        $cpf == '22222222222' || 
        $cpf == '33333333333' || 
        $cpf == '44444444444' || 
        $cpf == '55555555555' || 
        $cpf == '66666666666' || 
        $cpf == '77777777777' || 
        $cpf == '88888888888' || 
        $cpf == '99999999999') {
        return false;

     } else {   
         
        for ($t = 9; $t < 11; $t++) {
             
            for ($d = 0, $c = 0; $c < $t; $c++) {
                $d += $cpf{$c} * (($t + 1) - $c);
            }
            $d = ((10 * $d) % 11) % 10;
            if ($cpf{$c} != $d) {
                return false;
            }
        }
 
        return true;
    }


}
}

$cpf = new Documento();
$cpf ->setNumero("12949969674");
var_dump($cpf->getNumero());

/**
var_dump(Documento::validarCPF("12949969674")); //chamar classe sem instaciar DOCUMENTO E NOME DA CLASSE PRINCIPAL , e o VALIDA CPF E UM METODO.
echo"<br>";
var_dump(Documento::setNumero("12949969674"));
**/
?>