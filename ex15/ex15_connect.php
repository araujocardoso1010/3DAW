<?php
	$servidor = 'localhost';
	$username = 'root';
	$senha = '';
	$nomeDB = 'jogoperguntas3daw';
	$connect = mysqli_connect($servidor, $username, $senha, $nomeDB);
	
	mysqli_set_charset($connect, 'utf8');