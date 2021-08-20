<?php
session_start();
		$email = $_POST['email'];
		echo "  $email";
		$senha = $_POST['senha'];
		//$senha = md5($senha);
		echo "  $senha";
if (empty($email) || empty($senha)) {
	header('Location: login.php');
	exit();
}
$con = mysqli_connect('localhost', 'root', '', 'teste') or die('Nao foi possivel conectar');
$sql = "SELECT * FROM tabela1 WHERE email ='{$email}' AND senha='{$senha}' AND status='1'";
$result = mysqli_query($con, $sql);
$row = mysqli_num_rows($result);
echo $row;
if($row == 1){
	$_SESSION['email']=$email;
	$_SESSION['senha']=$senha;
	header('Location: painel.php');
	exit();
}else{
header('Location: loginerro.php');
	exit();
}
?>