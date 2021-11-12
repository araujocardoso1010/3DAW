<!DOCTYPE html>
<html lang="pt-br">
	<head>
		<meta charset="utf-8">
		<title>Procurar Pergunta</title>
	</head>
	<body>
		<a href="criarPergunta.php">Criar Pergunta</a><br>
		<a href="listarPerguntas.php">Listar Perguntas</a><br>
		<a href="listarUmaPergunta.php">Procurar Pergunta</a>
		<h1>Procurar Pergunta</h1>
		<form method="POST" action="<?php echo $_SERVER['PHP_SELF'];?>">
			ID: <input type="text" name="id" placeholder="Informe o ID da pergunta" required>
			<button type="submit" name="procurar">Procurar</button>
		</form>
		<?php
			if(isset($_POST['procurar'])){
				$id = $_POST['id'];
				$filename = 'perguntas.txt';
				$arquivo = fopen($filename, 'r');
				$linha = fgets($arquivo);
				$colunas = explode(';', $linha);
				
				echo '<br><br><h1>Resultado</h1>';
				echo '<table>';
				echo '<tr>';
				foreach($colunas as $coluna){
					echo "<th>$coluna</th>";
				}
				echo '</tr>';
				
				while(!feof($arquivo)){
					$linha = fgets($arquivo);
					$colunas = explode(';', $linha);
					
					if($id == $colunas[0]){
						echo '<tr>';
						foreach($colunas as $coluna){
							echo "<td>$coluna</td>";
						}
						$urlname = "alterarPergunta.php?id=$colunas[0]";
						echo "<td><a href=$urlname>Alterar</a></td>";
						
						$urlname = "excluirPergunta.php?id=$colunas[0]";
						echo "<td><a href=$urlname>Excluir</a></td>";
						
						echo '</tr>';
					}
				}
				echo '</table>';
				
				fclose($arquivo);
			}
		?>
	</body>
</html>
