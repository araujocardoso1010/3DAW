<?php
	require_once 'av2_connect.php';
	
	$sql = "SELECT * FROM clientes";
	$resultado = mysqli_query($connect, $sql);
	
	$arrClientes = array();
	$x = 0;
	
	while($linha = mysqli_fetch_assoc($resultado)){
		$arrClientes[$x] = $linha;
		$x++;
	}
	
	$jClientes = json_encode($arrClientes, JSON_UNESCAPED_UNICODE);
	
	echo $jClientes;