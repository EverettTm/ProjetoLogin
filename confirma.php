<?php
$con = $mysqli = new mysqli('localhost', 'root', '', 'teste');

$h =$_GET['h'];
if(!empty($h)){
	$insert= "UPDATE tabela1 SET status='1' WHERE md5(id)='$h'";
	$rodar = mysqli_query($con, $insert);
	echo "Email confirmado com sucesso";
	header('Location: login.php');
}
?>