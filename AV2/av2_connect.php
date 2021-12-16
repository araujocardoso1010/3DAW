<?php
	$servername = 'localhost';
	$username = 'root';
	$senha = '';
	$nomeDB = 'av2_3daw';
	$connect = mysqli_connect($servername, $username, $senha, $nomeDB);
	
	mysqli_set_charset($connect, 'utf8');
