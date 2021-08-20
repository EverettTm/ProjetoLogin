<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Primeiro teste</title>
</head>
<style>
/*Para centralizar a pagina */
  body.center-form {
    min-height: 100vh;
  }

  div.center-form {
    position: relative;
    min-height: 100vh;
  }

  div.center-form > form {
    position: absolute;
    top: 50%;
    left: 50%;
    transform: translateY(-50%) translateX(-50%);
    background-color: #d24dff;;
  }
  /*Para centralizar a pagina */
</style>
<body class="center-form">
<div class="center-form">
			<?php
$usu_id = $_GET['id'];
$usu_id = explode(" ", $usu_id);
echo $usu_id[1];
	?>
<form action="editar2.php?id=<?php echo $usu_id[0];?> " method="post">
	<b>Editando o usuario:
		<br>
		<br>
	<b>Usuario: 
	<input type="title" value="<?php echo $usu_id[1];?>" name="nome"placeholder="Editar nome">
	<br>
	<br>
	<b>E-mail:
	<input type="email" value="<?php echo $usu_id[2];?>"name="email"placeholder="Editar email">
	<br>
	<br>
	<b>Senha:
	<input type="password" value="<?php echo $usu_id[3];?>" name="senha"placeholder="Editar Senha">
	<br>
	<br>
	<input type="submit" submit="Enviar">
</form>

</body>
</html>