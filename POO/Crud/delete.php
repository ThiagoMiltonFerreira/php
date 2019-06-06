<?php

$conn = new PDO("mysql:localhost; dbname=dbphp7" , "root", "");

$stmt = $conn->prepare("DELETE FROM dbphp7.tb_usuarios WHERE idusuario = :ID"); //:LOGIN, :PASSWORD identifica o parametro



$id = 15;

$stmt->bindparam(":ID", $id);

$stmt->execute();

echo"Excluido com sucesso";

?>