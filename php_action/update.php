<?php 
	
	session_start();
	require_once 'db_connect.php';

	if(isset($_POST['btn_editar'])){

		$nome = mysqli_escape_string($connect, $_POST['nome']);
		$sobrenome = mysqli_escape_string($connect, $_POST['sobrenome']);
		$email = mysqli_escape_string($connect, $_POST['email']);
		$idade = mysqli_escape_string($connect, $_POST['idade']);		
		$id = mysqli_escape_string($connect, $_POST['id']);

		$sql = "update tbl_clientes set nome = '$nome', sobrenome = '$sobrenome', email = '$email', idade = '$idade' where cod_clientes = '$id'";

		if(mysqli_query($connect, $sql)){
			$_SESSION['mensagem'] = "Editado com sucesso!";
			header('location: ../index.php');
		}else{
			$_SESSION['mensagem'] = "Erro ao editar!";
			header('location: ../index.php');
		}
	}
 ?>