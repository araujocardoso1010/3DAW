<?php
	if(isset($_GET['id'])){
		$filename = 'perguntas.txt';
		$arquivo = fopen($filename, 'r');
		$linha = fgets($arquivo);
		
		while(!feof($arquivo)){
			$linhas[] = fgets($arquivo);
		}
		fclose($arquivo);
		
		file_put_contents($filename, $linha);
		foreach($linhas as $linha){
			$colunas = explode(';', $linha);
			
			if($_GET['id'] != $colunas[0]){
				file_put_contents($filename, $linha, FILE_APPEND);
			}
		}
	}
	header('Location: listarPerguntas.php');