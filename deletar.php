<?php
$usu_id = $_GET['id'];
$con = mysqli_connect('localhost', 'root', '', 'teste') or die('Nao foi possivel conectar');
$sql_delete = "DELETE FROM tabela1 WHERE id ='{$usu_id}'";
$sql_query = $con->query($sql_delete) or die($con->error);
if($sql_query){
	header('Location: painel.php');
}
else {echo 'Erro ao deletar';}
	?>
