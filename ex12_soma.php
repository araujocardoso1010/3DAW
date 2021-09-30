<?php
	$n1 = $n2 = 0;
	
	if(!empty($_GET['n1'])):
		$n1 = $_GET['n1'];
	endif;
	if(!empty($_GET['n2'])):
		$n2 = $_GET['n2'];
	endif;
?>
<!DOCTYPE html>
<html lang="pt-br">
	<head>
		<meta charset="utf-8">
		<title>Soma</title>
	</head>
	<body>
		<h1>Soma</h1>
		<form method="GET" action="ex12_soma.php">
			<input type="number" name="n1" value="<?php echo $n1; ?>"> +
			<input type="number" name="n2" value="<?php echo $n2; ?>">
			<button type="submit">=</button>
			<input type="number" name="resultado" value="<?php echo $n1+$n2; ?>" disabled>
		</form>
	</body>
</html>