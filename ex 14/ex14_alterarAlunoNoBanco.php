<?php
	if(isset($_POST['atualizar'])){
		$servidor = 'localhost';
		$usuario = 'root';
		$senha = '';
		$nomeBanco = 'faeterj3dawmanha2';
		$conn = mysqli_connect($servidor, $usuario, $senha, $nomeBanco) or die("conexão falhou: ".mysqli_error);
		$matricula = $_POST['matricula'];
		$nome = $_POST['nome'];
		$email = $_POST['email'];
		$cpf = $_POST['cpf'];
		$comandoSQL = "UPDATE alunos SET nome = '$nome', email = '$email', cpf = '$cpf'
						WHERE matricula = '$matricula'";
		
		mysqli_query($conn, $comandoSQL);
		mysqli_close($conn);
		
		header('Location: ex14_buscarAluno.php');
	}