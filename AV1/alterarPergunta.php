<?php
	if(isset($_POST['alterar'])){
		$id = $_POST['id'];
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
			if($id == $colunas[0]){
				$pergunta = $_POST['pergunta'];
				$pontos = $_POST['pontos'];
				$dificuldade = $_POST['grau'];
				
				file_put_contents($filename, "$id;$pergunta;$pontos;$dificuldade\r\n", FILE_APPEND);
			} else{
				file_put_contents($filename, $linha, FILE_APPEND);
			}
		}
		
		header('Location: listarPerguntas.php');
	}
?>
<!DOCTYPE html>
<html lang="pt-br">
	<head>
		<meta charset="utf-8">
		<title>Alterar Pergunta</title>
	</head>
	<body>
		<a href="criarPergunta.php">Criar Pergunta</a><br>
		<a href="listarPerguntas.php">Listar Perguntas</a><br>
		<a href="listarUmaPergunta.php">Procurar Pergunta</a>
		<h1>Alterar Pergunta</h1>
		<?php
			if(isset($_GET['id'])):
				$id = $_GET['id'];
				$filename = 'perguntas.txt';
				$arquivo = fopen($filename, 'r');
				$linha = fgets($arquivo);
				
				while(!feof($arquivo)){
					$linha = fgets($arquivo);
					$colunas = explode(';', $linha);
					
					if($id == $colunas[0]){
						$pergunta = $colunas[1];
						$pontos = $colunas[2];
						$dificuldade = $colunas[3];
					}
				}
		?>
		<form method="POST" action="<?php echo $_SERVER['PHP_SELF'];?>">
			<input type="hidden" name="id" value="<?php echo $id;?>">
			Id: <input type="text" value="<?php echo $id;?>" disabled><br><br>
			Pergunta: <input type="text" name="pergunta" value="<?php echo $pergunta;?>" required><br><br>
			Pontos: <input type="text" name="pontos" value="<?php echo $pontos;?>" required><br><br>
			Grau de dificuldade:<br>
			<input type="radio" name="grau" value="facil" required>Fácil<br>
			<input type="radio" name="grau" value="medio" required>Médio<br>
			<input type="radio" name="grau" value="dificil" required>Difícil<br><br>
			<button type="submit" name="alterar">Alterar Pergunta</button>
		</form>
		<?php
			endif;
		?>
	</body>
</html>