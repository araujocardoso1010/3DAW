<?php 
	$x = '2.1';
	$y = 2.1;
?>
<!DOCTYPE html>
<html lang="pt-br">
	<head>
		<meta charset="utf-8">
		<title>Comparação de Variáveis</title>
	</head>
	<body>
		<h1>Comparar Valores</h1>
		<table border="1">
			<tr>
				<th>COMPARAÇÃO</th>
				<th>X</th>
				<th>Y</th>
			</tr>
			<tr>
				<th>VALORES</th>
				<td><?php echo $x; ?></td>
				<td><?php echo $y; ?></td>
			</tr>
			<tr>
				<th>IDÊNTICOS</th>
				<td colspan="2"><?php echo $x === $y? 'SIM': 'NÃO'; ?></td>
			</tr>
			<tr>
				<th>IGUAIS</th>
				<td colspan="2"><?php echo $x == $y? 'SIM': 'NÃO'; ?></td>
			</tr>
			<tr>
				<th>DIFERENTES</th>
				<td colspan="2"><?php echo $x != $y? 'SIM': 'NÃO'; ?></td>
			</tr>
			<tr>
				<th>[?] &ge; 5</th>
				<td><?php echo $x >= 5? 'SIM': 'NÃO'; ?></td>
				<td><?php echo $y >= 5? 'SIM': 'NÃO'; ?></td>
			</tr>
			<tr>
				<th>[?] &le; 6</th>
				<td><?php echo $x <= 6? 'SIM': 'NÃO'; ?></td>
				<td><?php echo $y <= 6? 'SIM': 'NÃO'; ?></td>
			</tr>
		</table>
	</body>
</html>