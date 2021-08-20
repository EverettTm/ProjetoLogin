<?php

if(!$_SESSION['email']){
	header('Location: loginerro.php');
	exit();
}


?>