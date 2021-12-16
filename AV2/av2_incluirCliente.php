<?php
	require_once 'av2_connect.php';
	
	$nome = mysqli_escape_string($connect, $_GET['nome']);
	$address = mysqli_escape_string($connect, $_GET['address']);
	$postalcode = mysqli_escape_string($connect, $_GET['postalcode']);
	$pais = mysqli_escape_string($connect, $_GET['pais']);
	$cpf = mysqli_escape_string($connect, $_GET['cpf']);
	$passaporte = mysqli_escape_string($connect, $_GET['passaporte']);
	$email = mysqli_escape_string($connect, $_GET['email']);
	$nascimento = mysqli_escape_string($connect, $_GET['nascimento']);
	$sql = "INSERT INTO clientes (nome, address, postalcode, pais, cpf, passaporte, email, nascimento)
		VALUES('$nome', '$address', $postalcode, '$pais', $cpf, $passaporte, '$email', 'nascimento')";
		
	
	if(mysqli_query($connect, $sql)){
		echo "Cadastro realizado";
	} else{
		echo "Não foi possível cadastrar";
	}