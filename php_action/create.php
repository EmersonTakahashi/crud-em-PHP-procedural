<?php 
	
	session_start();
	require_once 'db_connect.php';

	function clear ($input){
		global $connect;
		// sql
		$var = mysqli_escape_string($connect, $input);
		//xss
		$var = htmlspecialchars($var);

		return $var;
	}

	if(isset($_POST['btn_cadastrar'])){

		$nome = clear($_POST['nome']);
		$sobrenome = clear($_POST['sobrenome']);
		$email = clear($_POST['email']);
		$idade = clear($_POST['idade']);

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
