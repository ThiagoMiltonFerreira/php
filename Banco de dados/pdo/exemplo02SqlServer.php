<?php

$conn = new PDO("sqlsrv:Database=dbphp7;server=localhost\SQLEXPRESS;ConnectionPooling=0","sa","root");

$stmt = $conn->prepare("SELECT * FROM dbphp7.tb_usuarios ORDER BY idusuario");

$stmt->execute();


 
$results = $stmt->fetchAll(PDO::FETCH_ASSOC);// o retorno do stmt sera um array com os valores do banco // // PDO::FETCH_ASSOC me retorna um array com chave valor linha=>valor

echo json_encode($results);





?>