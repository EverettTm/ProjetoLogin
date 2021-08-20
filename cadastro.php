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
<form action="cadastro2.php" method="post">
	<b>Usuario: 
	<input type="title" name="nome"placeholder="Nome">
	<br>
	<br>
	<b>E-mail:
	<input type="email" name="email"placeholder="Email">
	<br>
	<br>
	<b>Senha:
	<input type="password" name="senha"placeholder="Senha">
	<br>
	<br>
	<input type="submit" submit="Enviar">
</form>

</body>
</html>