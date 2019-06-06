<?php

$conn = new PDO("mysql:localhost; dbname=dbphp7" , "root", "");

$stmt = $conn->prepare("INSERT INTO dbphp7.tb_usuarios (deslogin,dessenha) VALUES(:LOGIN, :PASSWORD)"); //:LOGIN, :PASSWORD identifica o parametro


$login = "Jose";
$password = "123456";

$stmt->bindparam(":LOGIN", $login);  // identifica que :LOGIN vai receber a variavel $login se sera passada como valor no insert
$stmt->bindparam(":PASSWORD", $password);

$stmt->execute();

echo"Inserido com sucesso";

?>