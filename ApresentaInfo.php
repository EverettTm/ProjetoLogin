<?php

$con = mysqli_connect('localhost', 'root', '', 'teste') or die('Nao foi possivel conectar');
$sql = "SELECT id, user, email, senha FROM tabela1";
$result = $con->query($sql); 
?><?php
	while ($linha = $result->fetch_assoc()) {
		echo 'ID :',$linha['id'],'<br>';
		echo 'USER :',$linha['user'],'<br>';
		echo 'Email :',$linha['email'],'<br>';
		echo 'Senha :',$linha['senha'],'<br>';
		?>
		<a href="deletar.php?id=<?php echo $linha['id'];?>">Deletar</a>
		<a href="editar.php?id=<?php echo $linha['id'];?> <?php echo $linha['user'];?> <?php echo $linha['email'];?> <?php echo $linha['senha'];?>">Editar</a>
		<br><br><?php
	}



?>