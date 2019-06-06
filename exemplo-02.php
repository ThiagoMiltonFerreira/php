
<?php
  $Nome1 = "Joao";
  $SobreNome = "Da Silva";

  //Concatenação
   echo "Nome:" . $Nome1 . " " . $SobreNome;

  // Para de radar o programa
   exit();

  // Limpa o valor da variavel $nome1 e $SobreNome
  unset($nome1, $SobreNome);

  //Verifica se a variavel existe ou se ja foi atribuido um valor ela, caso exista mostre na tela.
  if(isset($SobreNome))
  {
  
    echo "A variavel existe e ja foi atribuido um valor para ela : ";
    echo $SobreNome;
    
  }
  else
  {
  	echo "A variavel nao existe ou nao foi atribuido um valor para ela";
  }



?>