<?php
$conn = new mysqli("localhost","root","","dbphp7");

if($conn->connect_error)
{

	echo "Error: " . connect_error();


}

$result = $conn ->query("SELECT * FROM tb_usuarios ORDER BY deslogin");

$data = array();


while ($row = $result->fetch_array())
{
	array_push($data , $row); //adiciona mais um valor ao array
	//var_dump($row);
}


echo json_encode($data);


?>