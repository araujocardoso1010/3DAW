<?php
	if(isset($_POST['novaPergunta'])){
		require_once 'ex15_connect.php';
		
		$pergunta = mysqli_escape_string($connect, $_POST['pergunta']);
		$pergunta = filter_var($pergunta, FILTER_SANITIZE_SPECIAL_CHARS);
		
		$dificuldade = mysqli_escape_string($connect, $_POST['dificuldade']);
		
		$pontos = mysqli_escape_string($connect, $_POST['pontos']);
		$pontos = filter_var($pontos, FILTER_SANITIZE_NUMBER_INT);
		
		if(filter_var($pontos, FILTER_VALIDATE_INT)){
			$sql = "INSERT INTO perguntas (pergunta, dificuldade, pontos)
				VALUES ('$pergunta', '$dificuldade', $pontos)";
			
			mysqli_query($connect, $sql);
			mysqli_close($connect);
			header('Location: ex15_listarPerguntas.php');			
		} else{
			echo "O campo 'Pontos' deve ser um inteiro!<hr><br>";
		}
	}
?>
<!DOCTYPE html>
<html lang="pt-br">
	<head>
		<title>EX15: Nova Pergunta</title>
		<meta charset="utf-8">
	</head>
	<body>
		<a href='ex15_novaPergunta.php'>Nova Pergunta</a><br>
		<a href='ex15_listarPerguntas.php'>Listar Perguntas</a><br>
		<a href='ex15_pesquisarPergunta.php'>Perquisar Pergunta</a><br>
		<h1>Nova Pergunta</h1>
		<form method="POST" action="<?php echo $_SERVER['PHP_SELF'];?>">
			Pergunta: <input type="text" name="pergunta" required><br><br>
			Pontos: <input type="text" name="pontos" placeholder="1 a 100" required><br><br>
			Dificuldade:<br>
			<input type="radio" name="dificuldade" value="Fácil" checked>Fácil<br>
			<input type="radio" name="dificuldade" value="Médio">Médio<br>
			<input type="radio" name="dificuldade" value="Difícil">Difícil<br><br>
			<button type="submit" name="novaPergunta">Criar Pergunta</button>
		</form>
	</body>
</html>
