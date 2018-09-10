<?php 
	$servername = "localhost";
	$username = "root";
	$password = "794886588";
	$db_name = "bd_crudPHP";

	$connect = mysqli_connect($servername, $username, $password, $db_name);
	mysqli_set_charset($connect, "utf8");
	
	if(mysqli_connect_error()){
		echo "erro na conexao: " . mysqli_connect_error();
	}
 ?>