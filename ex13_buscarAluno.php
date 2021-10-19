<!DOCTYPE html>
<html lang="pt-br">
	<head>
		<meta charset="utf-8">
		<title>Informe a matrícula</title>
	</head>
	<body>
		<a href="a13_cadastroAlunoArquivo.php">Novo Aluno</a><br>
		<a href="a13_buscarAluno.php">Alterar Aluno</a><br>
		<a href="a13_listarAlunos.php">Listar Alunos</a>
		<h1>Buscar Aluno</h1>
		<form method="POST" action="a13_atualizarAluno.php">
			Informe a matrícula do aluno:<br>
			<input type="text" name="matricula">
			<input type="submit" name="buscar" value="Buscar">
		</form>
	</body>
</html>