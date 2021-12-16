<?php
	$pergunta = $_GET['pergunta'];
	$pontos = $_GET['pontos'];
	$dificuldade = $_GET['dificuldade'];
	$sql = "INSERT INTO perguntas (pergunta, dificuldade, pontos)
		VALUES('$pergunta', '$dificuldade', $pontos)";
		
	require_once 'ex15_connect.php';
	
	mysqli_query($connect, $sql);
	
	echo "Pergunta criada";
	
	mysqli_close($connect);
	