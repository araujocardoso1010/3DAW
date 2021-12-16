<?php
	require_once 'ex15_connect.php';
	
	$sql = "SELECT * FROM perguntas";
	$resultado = mysqli_query($connect, $sql);
	$arrPerguntas = array();
	$i = 0;
	
	while($dados = mysqli_fetch_assoc($resultado)){
		$arrPerguntas[$i] = $dados;
		$i++;
	}
	
	mysqli_close($connect);
	
	$jPergunta = json_encode($arrPerguntas, JSON_UNESCAPED_UNICODE);
	
	echo $jPergunta;