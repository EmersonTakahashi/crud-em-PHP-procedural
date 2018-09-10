<?php 
	
	session_start();
	require_once 'db_connect.php';

	if(isset($_POST['btn_cadastrar'])){

		$nome = mysqli_escape_string($connect, $_POST['nome']);
		$sobrenome = mysqli_escape_string($connect, $_POST['sobrenome']);
		$email = mysqli_escape_string($connect, $_POST['email']);
		$idade = mysqli_escape_string($connect, $_POST['idade']);

		$sql = "insert into tbl_clientes (nome, sobrenome, email, idade) values ('$nome', '$sobrenome', '$email', '$idade')";

		if(mysqli_query($connect, $sql)){
			$_SESSION['mensagem'] = "Cadastrado com sucesso!";
			header('location: ../index.php');
		}else{
			$_SESSION['mensagem'] = "Erro ao cadastrar!";
			header('location: ../index.php');
		}
	}
 ?>