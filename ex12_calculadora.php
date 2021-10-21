<?php
	$n1 = $n2 = 0;
	
	if(!empty($_POST['n1'])):
		$n1 = $_POST['n1'];
	endif;
	if(!empty($_POST['n2'])):
		$n2 = $_POST['n2'];
	endif;
	$resultado = 0;
	if($_SERVER['REQUEST_METHOD']=='POST'):
		$op = $_POST['op'];
		switch($op):
			case 'soma':
				$resultado = $n1 + $n2;
				break;
			case 'sub':
				$resultado = $n1 - $n2;
				break;
			case 'mult':
				$resultado = $n1 * $n2;
				break;
			case 'divide':
				if($n2 != 0):
					$resultado = $n1 / $n2;
				else:
					$resultado = NaN;
				endif;
				break;
			case 'pot':
				$resultado = $n1 ** $n2;
				break;
			case 'rquadrada':
				$resultado = sqrt($n1);
		endswitch;
	endif;
?>
<!DOCTYPE html>
<html lang="pt-br">
	<head>
		<meta charset="utf-8">
		<title>Calculadora</title>
	</head>
	<body>
		<h1>Calculadora</h1>
		<form method="POST" action="<?php echo $_SERVER['PHP_SELF'];?>">
			<input type="radio" name="op" value="soma" checked>Soma
			<input type="radio" name="op" value="sub">Subtração
			<input type="radio" name="op" value="mult">Multiplicação
			<br>
			<input type="radio" name="op" value="divide">Divisão
			<input type="radio" name="op" value="pot">Potência
			<input type="radio" name="op" value="rquadrada">Raíz Quadrada
			<br>
			<input type="number" name="n1" value="<?php echo $n1;?>">
			<br>
			<input type="number" name="n2" value="<?php echo $n2;?>">
			<br><br>
			<button type="submit" name="calcular">Calcular</button>
			<br><br>
			<input type="number" name="resultado" value="<?php echo $resultado;?>" disabled>
		</form>
	</body>
</html>