<?php 
	
	session_start();
	require_once 'db_connect.php';

	if(isset($_POST['btn_excluir'])){

		$id = mysqli_escape_string($connect, $_POST['id']);

		$sql = "delete from tbl_clientes where cod_clientes = '$id'";

		if(mysqli_query($connect, $sql)){
			$_SESSION['mensagem'] = "Excluído com sucesso!";
			header('location: ../index.php');
		}else{
			$_SESSION['mensagem'] = "Erro ao excluir!";
			header('location: ../index.php');
		}
	}
 ?>