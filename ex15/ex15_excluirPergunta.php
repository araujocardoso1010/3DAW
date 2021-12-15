<?php
	require_once 'ex15_connect.php';
	
	$id = mysqli_escape_string($connect, $_GET['id']);
	$sql = "DELETE FROM perguntas WHERE id = $id";
	
	mysqli_query($connect, $sql);
	mysqli_close($connect);
	header('Location: ex15_listarPerguntas.php');
	