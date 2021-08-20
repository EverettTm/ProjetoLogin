<?php
		$nome = $_POST['nome'];
		echo $nome;
		$email = $_POST['email'];
		echo "  $email";
		$senha = $_POST['senha'];
		echo "  $senha";
		//$senha = md5($senha);

		$con = $mysqli = new mysqli('localhost', 'root', '', 'teste');
		$insertConec= "INSERT INTO tabela1 (user, email, senha) VALUES ('$nome', '$email', '$senha')";
		
		$rodar = mysqli_query($con, $insertConec);
		$id = $mysqli->insert_id;
		$md5 = md5($id);
		$assunto = "Confirmar e-mail";
		$link = "http://localhost/projetofinal/confirma.php?h=".$md5;
		$msg = "Clique aqui para confirmar o cadastro: ".$link;

		require_once('src/PHPMailer.php');
		require_once('src/SMTP.php');
		require_once('src/Exception.php');
		
		use PHPMailer\PHPMailer\PHPMailer;
		use PHPMailer\PHPMailer\SMTP;
		use PHPMailer\PHPMailer\Exception;
		$mail=new PHPMailer(true); 

		try{
			//Configuracoes nescessarias para enviar o email
			$mail->SMTPDebug = SMTP::DEBUG_SERVER;
			$mail->isSMTP();
			$mail->Host='smtp.gmail.com';
			$mail->SMTPAuth= true;
			$mail->Username='enviar4124124@gmail.com';
			$mail->Password ='Eertsa41!' ;
			$mail->Port = 587;

			$mail->setFrom('enviar4124124@gmail.com');
			$mail->addAddress($email);
			$mail->isHTML(true);
			$mail->Subject ='Confirme seu email';
			$mail->Body = $msg;
			if ($mail->send()) {
				echo "Mensagem Enviada!";
				header('Location: login.php');
			}else{echo"Erro ao enviar";}
		}catch (Exception $e){echo "erro ao enviar mensagem";}

?>