<?php
	$new_name = $_POST['nome'];
	$new_email = $_POST['email'];
	$new_senha = $_POST['senha'];
	$usu_id = $_GET['id'];

	$con = mysqli_connect('localhost', 'root', '', 'teste') or die('Nao foi possivel conectar');
    $sql_edit= "UPDATE tabela1 SET email='$new_email', user='$new_name', senha='$new_senha' WHERE id='$usu_id'";
    $sql_query = $con->query($sql_edit) or die($con->error);
    
    if($sql_query){
	header('Location: painel.php');
}
else {echo 'Erro ao deletar';}
?>