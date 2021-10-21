<?php
	if(isset($_POST['atualizar'])):
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
		$txt = $matricula.";".$nome.";".$email.";".$dtNasc.";".$cpf.";".$tel.";".$endereco.";".$cidade.";".$estado.";".$cep."\r\n";
		file_put_contents('alunos.txt', $txt, FILE_APPEND);
		header('location: ex13_listarAlunos.php');
	endif;
	if(isset($_POST['buscar'])):
		$arquivo = fopen('alunos.txt', 'r');
		$cabecalho = fgets($arquivo);
		for($i=0; !feof($arquivo); $i++):
			$linhas[$i] = fgets($arquivo);
		endfor;
		fclose($arquivo);
		file_put_contents('alunos.txt', $cabecalho); //inserir cabeçalho apagando os dados anteriores no arquivo
		foreach($linhas as $linha):
			$colunas = explode(';', $linha);
			if($colunas[0] != $_POST['matricula']):
				file_put_contents('alunos.txt', $linha, FILE_APPEND); //re-insere os arquivos que não são resultados da busca
			else:
				$resultado = explode(';', $linha);
			endif;
		endforeach;
?>
<!DOCTYPE html>
<html lang="pt-br">
	<head>
		<meta charset="utf-8">
		<title>Alterar Aluno</title>
	</head>
	<body>
		<a href="ex13_cadastroAlunoArquivo.php">Novo Aluno</a><br>
		<a href="ex13_buscarAluno.php">Alterar Aluno</a><br>
		<a href="ex13_listarAlunos.php">Listar Alunos</a>
		<h1>Atualizar Cadastro</h1>
		<form method="POST" action="<?php echo $_SERVER['PHP_SELF'];?>">
			Matrícula: <input type="text" name="matricula" value="<?php echo $resultado[0];?>"><br>
			Nome: <input type="text" name="nome" value="<?php echo $resultado[1];?>"><br>
			Email: <input type="text" name="email" value="<?php echo $resultado[2];?>"><br>
			Nascimento: <input type="text" name="dtNasc" value="<?php echo $resultado[3];?>"><br>
			CPF: <input type="text" name="cpf" value="<?php echo $resultado[4];?>"><br>
			Telefone: <input type="text" name="tel" value="<?php echo $resultado[5];?>"><br>
			Endereço: <input type="text" name="endereco" value="<?php echo $resultado[6];?>"><br>
			Cidade: <input type="text" name="cidade" value="<?php echo $resultado[7];?>"><br>
			Estado: <input type="text" name="estado" value="<?php echo $resultado[8];?>"><br>
			CEP: <input type="text" name="cep" value="<?php echo $resultado[9];?>">
			<br><br>
			<input type="submit" name="atualizar" value="Atualizar">
		</form>
	</body>
</html>
<?php
	endif; //fechando o primeiro if (o formulário só aparecerá se houver $_POST['busca'])
?>