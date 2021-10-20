<!DOCTYPE html>
<html lang="pt-br">
	<head>
		<meta charset="utf-8">
		<title>Lista de Alunos</title>
	</head>
	<body>
		<a href="ex13_cadastroAlunoArquivo.php">Novo Aluno</a><br>
		<a href="ex13_buscarAluno.php">Alterar Aluno</a><br>
		<a href="ex13_listarAlunos.php">Listar Alunos</a>
		<h1>Lista de Alunos</h1>
		<table>
			<tr>
				<?php
					$arquivo = fopen('alunos.txt', 'r') or die ('Não foi possível abrir o arquivo!');
					$linhas = fgets($arquivo);
					$colunas = explode(';', $linhas);
					foreach($colunas as $coluna):
						echo "<th>$coluna</th>";
					endforeach;
				?>
			</tr>
			<?php
				while(!feof($arquivo)):
					$linhas = fgets($arquivo);
					$colunas = explode(';', $linhas);
					echo "<tr>";
					foreach($colunas as $coluna):
						echo "<td>$coluna</td>";
					endforeach;
					echo "</tr>";
				endwhile;
				fclose($arquivo);
			?>
		</table>
	</body>
</html>
