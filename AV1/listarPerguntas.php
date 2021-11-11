<!DOCTYPE html>
<html lang="pt-br">
	<head>
		<meta charset="utf-8">
		<title>Lista de Perguntas</title>
	</head>
	<body>
		<a href="criarPergunta.php">Criar Pergunta</a><br>
		<a href="listarPerguntas.php">Listar Perguntas</a><br>
		<a href="listarUmaPergunta.php">Procurar Pergunta</a>
		<h1>Lista de Perguntas</h1>
		<?php
			$filename = 'perguntas.txt';
			$arquivo = fopen($filename, 'r');
			$linha = fgets($arquivo);
			$colunas = explode(';', $linha);
			
			echo '<table>';
			echo '<tr>';
			foreach($colunas as $coluna){
				echo "<th>$coluna</th>";
			}
			echo '<th colspan=2>OPÇÕES</th>';
			echo '</tr>';
			
			while(!feof($arquivo)){
				$linha = fgets($arquivo);
				$colunas = explode(';', $linha);
				
				echo '<tr>';
				foreach($colunas as $coluna){
					echo "<td>$coluna</td>";
				}
				if($coluna){
					$urlname = "alterarPergunta.php?id=$colunas[0]";
					echo "<td><a href=$urlname>Alterar</a></td>";
					
					$urlname = "excluirPergunta.php?id=$colunas[0]";
					echo "<td><a href=$urlname>Excluir</a></td>";
				}
				echo '</tr>';
			}
			echo '</table>';
			
			fclose($arquivo);
		?>
	</body>
</html>