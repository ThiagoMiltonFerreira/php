<?php

$conn = new PDO("mysql:localhost; dbname=dbphp7" , "root", "");

$stmt = $conn->prepare("UPDATE dbphp7.tb_usuarios SET deslogin = :LOGIN ,dessenha = :PASSWORD WHERE idusuario = :ID"); //:LOGIN, :PASSWORD identifica o parametro


$login = "Silvana";
$password = "@rt89";
$id = "16";

//
$stmt->bindparam(":LOGIN", $login);  // identifica que :LOGIN vai receber a variavel $login que sera passada como valor no insert ou seja atribui valor ao login do parametro do stmt
$stmt->bindparam(":PASSWORD", $password);
$stmt->bindparam(":ID", $id);

$stmt->execute();

echo"Alterado com sucesso";

?>