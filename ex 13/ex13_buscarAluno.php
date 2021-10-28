<?php
	if($_GET['del']):
		$action_link = 'ex13_excluirAluno.php';
	else:
		$action_link = 'ex13_atualizarAluno.php';
	endif;
?>
<!DOCTYPE html>
<html lang="pt-br">
	<head>
		<meta charset="utf-8">
		<title>Informe a matrícula</title>
	</head>
	<body>
		<a href="ex13_cadastroAlunoArquivo.php">Novo Aluno</a><br>
		<a href="ex13_buscarAluno.php?del=">Alterar Aluno</a><br>
		<a href="ex13_buscarAluno.php?del=1">Excluir Aluno</a><br>
		<a href="ex13_listarAlunos.php">Listar Alunos</a>
		<h1>Buscar Aluno</h1>
		<form method="POST" action="<?php echo $action_link;?>">
			Informe a matrícula do aluno:<br>
			<input type="text" name="matricula">
			<input type="submit" name="buscar" value="Buscar">
		</form>
	</body>
</html>
