<?php
$host = "localhost";
$usuario = "root";
$senha ="";
$bd = "database";

$mysqli = new mysqli($host, $usuario, $senha, $bd);

if($mysqli -> connect_errno){
	echo "FALHA";
}
else{
	echo "Conectado";
}

?>