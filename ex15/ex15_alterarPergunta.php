<?php
	require_once 'ex15_connect.php';
	
	if(isset($_POST['alterarPergunta'])){
		$id = mysqli_escape_string($connect, $_POST['id']);
		
		$pergunta = mysqli_escape_string($connect, $_POST['pergunta']);
		$pergunta = filter_var($pergunta, FILTER_SANITIZE_SPECIAL_CHARS);
		
		$dificuldade = mysqli_escape_string($connect, $_POST['dificuldade']);
		
		$pontos = mysqli_escape_string($connect, $_POST['pontos']);
		$pontos = filter_var($pontos, FILTER_SANITIZE_NUMBER_INT);
		
		if(filter_var($pontos, FILTER_VALIDATE_INT)){
			$sql = "UPDATE perguntas SET pergunta = '$pergunta', dificuldade = '$dificuldade', pontos = $pontos WHERE id = $id";
			
			mysqli_query($connect, $sql);
		}
		mysqli_close($connect);
		header('Location: ex15_listarPerguntas.php');
	}
	
	$id = mysqli_escape_string($connect, $_GET['id']);
	$sql = "SELECT * FROM perguntas WHERE id = $id";
	$resultado = mysqli_query($connect, $sql);
	$dados = mysqli_fetch_array($resultado);
	$pergunta = $dados['pergunta'];
	$pontos = $dados['pontos'];
	
	mysqli_close($connect);
?>
<!DOCTYPE html>
<html lang="pt-br">
	<head>
		<title>EX15: Alterar Pergunta</title>
		<meta charset="utf-8">
	</head>
	<body>
		<a href='ex15_novaPergunta.php'>Nova Pergunta</a><br>
		<a href='ex15_listarPerguntas.php'>Listar Perguntas</a><br>
		<a href='ex15_pesquisarPergunta.php'>Perquisar Pergunta</a><br>
		<h1>Alterar Pergunta</h1>
		<form method="POST" action="<?php echo $_SERVER['PHP_SELF'];?>">
			<input type="hidden" name="id" value="<?php echo $id;?>">
			Id: <input type="text" value="<?php echo $id;?>" disabled><br><br>
			Pergunta: <input type="text" name="pergunta" size="30" value="<?php echo $pergunta;?>" required><br><br>
			Pontos: <input type="text" name="pontos" value="<?php echo $pontos;?>" required><br><br>
			Dificuldade:<br>
			<input type="radio" name="dificuldade" value="Fácil" checked>Fácil<br>
			<input type="radio" name="dificuldade" value="Médio">Médio<br>
			<input type="radio" name="dificuldade" value="Difícil">Difícil<br><br>
			<button type="submit" name="alterarPergunta">Alterar Pergunta</button>
		</form>
	</body>
</html>