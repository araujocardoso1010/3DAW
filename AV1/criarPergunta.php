<?php
	if(isset($_POST['criar'])){
		$id = $_POST['id'];
		$pergunta = $_POST['pergunta'];
		$pontos = $_POST['pontos'];
		$dificuldade = $_POST['grau'];
		$arquivo = 'perguntas.txt';
		
		if(!file_exists($arquivo)){
			file_put_contents($arquivo, "ID;PERGUNTA;PONTOS;DIFICULDADE\r\n");
		}
		file_put_contents($arquivo, "$id;$pergunta;$pontos;$dificuldade\r\n", FILE_APPEND);
	}
?>
<!DOCTYPE html>
<html lang="pt-br">
	<head>
		<meta charset="utf-8">
		<title>Criar Pergunta</title>
	</head>
	<body>
		<a href="criarPergunta.php">Criar Pergunta</a><br>
		<a href="listarPerguntas.php">Listar Perguntas</a><br>
		<a href="listarUmaPergunta.php">Procurar Pergunta</a>
		<h1>Criar Pergunta</h1>
		<form method="POST" action="<?php echo $_SERVER['PHP_SELF'];?>">
			Id: <input type="text" name="id" required><br><br>
			Pergunta: <input type="text" name="pergunta" required><br><br>
			Pontos: <input type="text" name="pontos" placeholder="1 a 100" required><br><br>
			Grau de dificuldade:<br>
			<input type="radio" name="grau" value="facil">Fácil<br>
			<input type="radio" name="grau" value="medio" checked>Médio<br>
			<input type="radio" name="grau" value="dificil">Difícil<br><br>
			<button type="submit" name="criar">Criar Pergunta</button>
		</form>
	</body>
</html>
