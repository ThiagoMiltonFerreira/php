<?php
echo "TRANSAÇÃO BANCO DE DADOS - USADO PARA SE CASO FOR FAZER 2 UPDATE ALGUM DER ERRO VOLTE OS DOIS PARA ESTADO ANTERIOR";
$conn = new PDO("mysql:localhost; dbname=dbphp7" , "root", "");

$conn->beginTransaction(); // Inicia transacao commit ou voltar o sql

$id = 17;



$stmt = $conn->exec("DELETE FROM dbphp7.tb_usuarios WHERE idusuario = $id"); //:LOGIN, :PASSWORD identifica o parametro





//echo var_dump($stmt);

//$stmt->execute(array($id));



 
		if($stmt===0){ //o stmt retorna 0 ou 1  erro 0  - if o retorno do stmt for 0 ou seja nao tem linha alterada

			echo '<strong>Erro ao Deletar!</strong>';
            $conn->rollback(); //cancela o sql deletar
            
        
        }
        else
        {
          	echo '<strong>Sucesso!</strong>';
          	$conn->commit(); //confirma execuçao do sql 
          	//$conn->rollback();
        }


//$conn->rollback(); // cancela o sql de der errado
//$conn->commit(); //confirma execuçao do sql se der certo

//echo"<br> Excluido com sucesso";

?>