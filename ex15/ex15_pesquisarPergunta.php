<!DOCTYPE html>
<html lang="pt-br">
	<head>
		<title>EX15: Pesquisar Pergunta</title>
		<meta charset="utf-8">
	</head>
	<body>
		<a href='ex15_novaPergunta.php'>Nova Pergunta</a><br>
		<a href='ex15_listarPerguntas.php'>Listar Perguntas</a><br>
		<a href='ex15_pesquisarPergunta.php'>Perquisar Pergunta</a><br>
		<h1>Pesquisar Pergunta</h1>
		<form method="POST" action="<?php echo $_SERVER['PHP_SELF'];?>">
			ID: <input type="text" name="id" placeholder="Informe o ID da pergunta" required>
			<button type="submit" name="pesquisar">Procurar</button>
		</form>
		<?php
			if(isset($_POST['pesquisar'])):
				echo "<br><h2>Resultado</h2>";
				require_once 'ex15_connect.php';
				
				$id = mysqli_escape_string($connect, $_POST['id']);
				$id = filter_var($id, FILTER_SANITIZE_NUMBER_INT);
				
				$sql = "SELECT * FROM perguntas WHERE id = $id";
				$resultado = mysqli_query($connect, $sql);
				
				if($dados = mysqli_fetch_array($resultado)):
					$pergunta = $dados['pergunta'];
					$dificudade = $dados['dificuldade'];
					$pontos = $dados['pontos'];
		?>
		<table border='1px'>
			<tr>
				<th>ID</th>
				<th>PERGUNTA</th>
				<th>DIFICULDADE</th>
				<th>PONTOS</th>
				<th colspan='2'>OPÇÕES</th>
			</tr>
			<tr>
				<td><?php echo $dados['id'];?></td>
				<td><?php echo $dados['pergunta'];?></td>
				<td><?php echo $dados['dificuldade'];?></td>
				<td><?php echo $dados['pontos'];?></td>
				<td><a href="ex15_alterarPergunta.php?id=<?php echo $dados['id'];?>">alterar</a></td>
				<td><a href="ex15_excluirPergunta.php?id=<?php echo $dados['id'];?>">excluir</a></td>
			</tr>
		</table>
		<?php
				else:
					echo 'Pergunta não encontrada!';
				endif;
			endif;
		?>
	</body>
</html>