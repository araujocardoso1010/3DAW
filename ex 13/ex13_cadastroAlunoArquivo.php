<?php
	if($_SERVER['REQUEST_METHOD'] == 'POST'):
		$matricula = $_POST['matricula'];
		$nome = $_POST['nome'];
		$email = $_POST['email'];
		$dtNasc = $_POST['dtNasc'];
		$cpf = $_POST['cpf'];
		$tel = $_POST['tel'];
		$endereco = $_POST['endereco'];
		$cidade = $_POST['cidade'];
		$estado = $_POST['estado'];
		$cep = $_POST['cep'];
		if(!file_exists('alunos.txt')):
			$txt = "MATRICULA;NOME;EMAIL;NASCIMENTO;CPF;TEL;ENDEREÇO;CIDADE;ESTADO;CEP\r\n";
			file_put_contents('alunos.txt', $txt);
		endif;
		$txt = $matricula.";".$nome.";".$email.";".$dtNasc.";".$cpf.";".$tel.";".$endereco.";".$cidade.";".$estado.";".$cep."\r\n";
		file_put_contents('alunos.txt', $txt, FILE_APPEND);
	endif;
?>
<!DOCTYPE html>
<html lang="pt-br">
	<head>
		<meta charset="utf-8">
		<title>Cadastro</title>
	</head>
	<body>
		<a href="ex13_cadastroAlunoArquivo.php">Novo Aluno</a><br>
		<a href="ex13_buscarAluno.php?del=">Alterar Aluno</a><br>
		<a href="ex13_buscarAluno.php?del=1">Excluir Aluno</a><br>
		<a href="ex13_listarAlunos.php">Listar Alunos</a>
		<h1>Novo Aluno</h1>
		<form method="POST" action="<?php echo $_SERVER['PHP_SELF'];?>">
			Matrícula: <input type="text" name="matricula"><br>
			Nome: <input type="text" name="nome"><br>
			Email: <input type="text" name="email"><br>
			Nascimento: <input type="text" name="dtNasc"><br>
			CPF: <input type="text" name="cpf"><br>
			Telefone: <input type="text" name="tel"><br>
			Endereço: <input type="text" name="endereco"><br>
			Cidade: <input type="text" name="cidade"><br>
			Estado: <input type="text" name="estado"><br>
			CEP: <input type="text" name="cep">
			<br><br>
			<input type="submit" value="Enviar">
		</form>
	</body>
</html>
