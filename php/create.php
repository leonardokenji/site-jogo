<?php

require_once 'db.php';

if(isset($_POST['btn-cadastrar'])):
	$nome = mysqli_escape_string($connect, $_POST['nome']);
	$email = mysqli_escape_string($connect, $_POST['email']);
	$CRM = mysqli_escape_string($connect, $_POST['CRM']);

	$sql = "INSERT INTO cadastro (nome, email, CRM) VALUES ('$nome','$email','$CRM')";

	if(mysqli_query($connect, $sql)):
		header('Location: ../pagethree.php?sucesso');
	else:
		header('Location: ../pagethree.php?erro');
	endif;
endif;
