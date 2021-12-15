<!DOCTYPE html>
<html lang="pt-br">
	<head>
		<title>EX15: Lista de Perguntas</title>
		<meta charset="utf-8">
	</head>
	<body>
		<a href='ex15_novaPergunta.php'>Nova Pergunta</a><br>
		<a href='ex15_listarPerguntas.php'>Listar Perguntas</a><br>
		<a href='ex15_pesquisarPergunta.php'>Perquisar Pergunta</a><br>
		<h1>Lista de Perguntas</h1>
		<table border="1px">
			<tr>
				<th>ID</th>
				<th>PERGUNTA</th>
				<th>DIFICULDADE</th>
				<th>PONTOS</th>
				<th colspan='2'>OPÇÕES</th>
			</tr>
			<?php
				include_once 'ex15_connect.php';
				
				$sql = "SELECT * FROM perguntas";
				$resultado = mysqli_query($connect, $sql);
				
				while($dados = mysqli_fetch_array($resultado)):
			?>
			<tr>
				<td><?php echo $dados['id'];?></td>
				<td><?php echo $dados['pergunta'];?></td>
				<td><?php echo $dados['dificuldade'];?></td>
				<td><?php echo $dados['pontos'];?></td>
				<td><a href="ex15_alterarPergunta.php?id=<?php echo $dados['id'];?>">alterar</a></td>
				<td><a href="ex15_excluirPergunta.php?id=<?php echo $dados['id'];?>">excluir</a></td>
			</tr>
			<?php
				endwhile;
				mysqli_close($connect);
			?>
		</table>
	</body>
</html>