<?php
	if(isset($_POST['buscar'])):
		$arquivo = fopen('alunos.txt', 'r');
		$cabecalho = fgets($arquivo);
		for($i=0; !feof($arquivo); $i++):
			$linhas[$i] = fgets($arquivo);
		endfor;
		fclose($arquivo);
		file_put_contents('alunos.txt', $cabecalho);
		foreach($linhas as $linha):
			$colunas = explode(';', $linha);
			if($_POST['matricula'] != $colunas[0]):
				file_put_contents('alunos.txt', $linha, FILE_APPEND);
			endif;
		endforeach;
	endif;
	header('Location: ex13_listarAlunos.php');
?>