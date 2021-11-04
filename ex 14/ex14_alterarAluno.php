<!DOCTYPE html>
<html lang="pt-br">
	<head>
		<meta charset="utf-8">
	</head>
	<body>
		<?php
			if(isset($_GET['matricula'])):
				$servidor = 'localhost';
				$usuario = 'root';
				$senha = '';
				$nomeBanco = 'faeterj3dawmanha2';
				$conn = mysqli_connect($servidor, $usuario, $senha, $nomeBanco) or die("conexão falhou: ".mysqli_error);
				
				$matricula = $_GET['matricula'];
				$comandoSQL = "SELECT * FROM alunos WHERE matricula='$matricula'";
				$result = mysqli_query($conn, $comandoSQL);
				$linha = mysqli_fetch_array($result);
				
				mysqli_close($conn);
		?>
		<form method="POST" action="ex14_alterarAlunoNoBanco.php">
			<input type="hidden" name="matricula" value="<?php echo $linha['matricula'];?>">
			Nome: <input type="text" name="nome" value="<?php echo $linha['nome'];?>"><br>
			email: <input type="text" name="email" value="<?php echo $linha['email'];?>"><br>
			cpf: <input type="text" name="cpf" value="<?php echo $linha['cpf'];?>"><br><br>
			<input type="submit" name="atualizar" value="Atualizar">
		</form>
		<?php
			endif;
		?>
	</body>
</html>
	
	
	
	