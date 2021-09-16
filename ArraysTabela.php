<?php
	$nomes = array('Marcos Ferreira', 'Vitória Amaral', 'Rodrigo Silva', 'Marina Gonçalves');
	$idades = array(33, 42, 21, 35);
	$emails = array('m.ferreira@gmail.com', 'maravitoria@faeterj-rio.br', 'rod.silva44@hotmail.com', 'marinalves@gmail.com');
	$medias = array(7.5, 8.0, 9.0, 6.6);
?>
<!DOCTYPE html>
<html lang="pt-br">
	<head>
		<meta charset="utf-8">
		<title>Tabela de Arrays</title>
		<style>
			table, th, td{
				border: 1px solid;
			}
		</style>
	</head>
	<body>
		<table>
			<tr>
				<th>Nome</th>
				<th>Idade</th>
				<th>Email</th>
				<th>Média</th>
			</tr>
			<?php for($i=0; $i < 4; $i++): ?>
			<tr>
				<td><?php echo $nomes[$i]; ?></td>
				<td><?php echo $idades[$i]; ?></td>
				<td><?php echo $emails[$i]; ?></td>
				<td><?php echo $medias[$i]; ?></td>
			</tr>
			<?php endfor; ?>
		</table>
	</body>
</html>