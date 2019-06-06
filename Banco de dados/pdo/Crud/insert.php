<?php

$conn = new PDO("msql:localhost; dbname=dbphp7" , "root", "root");

$stmt = $conn->prepare("INSERT INTO tb_usuario (deslogin,dessenha) VALUES(:LOGIN, :PASSWORD)"); //:LOGIN, :PASSWORD identifica o parametro


$login = "Jose";
$password = "123456";

$stmt->bindparam(":LOGIN" , $login);  // identifica que :LOGIN vai receber a variavel $login
$stmt->bindparam(":PASSWORD" , $password);

$stmt->execute();

echo"Inserido com sucesso";

?>