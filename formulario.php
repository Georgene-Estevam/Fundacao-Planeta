<?php
	//session_start();
	include_once("config.php");

	if(isset($_POST['submit'])) {
		$nome = $_POST['name'];
		$email = $_POST['email'];
		$telefone = $_POST['phone'];
		$comentario = $_POST['comment'];

		$result = mysqli_query($conexao, "INSERT INTO usuarios(Nome, Email, Telefone, Comentario) VALUES ('$nome', '$email', '$telefone', '$comentario')");
	}
?>

