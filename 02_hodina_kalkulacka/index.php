<!DOCTYPE html>
<html lang="cs">
	<head>
		<meta charset="UTF-8"/>
		<title>Kalkulačka</title>
	</head>
	<body>
		<form>
			<label for="n1id">Číslo jedna</label>
			<input type="number" name="n1name" id="n1id"/>

			<label for="n2id">Číslo dvě</label>
			<input type="number" name="n2name" id="n2id"/>

			<label for="operaceid">Operace</label>
			<input type="text" name="operacename" id="operaceid"/>

			<button type="submit">Odeslat</button>
		</form>

	<h4>
<?php
$num1 = $_GET['n1name'];
$num2 = $_GET['n2name'];
$operace = $_GET['operacename'];

switch ($operace) {
	case '+':
		echo sprintf('Vysledek: %d', $num1 + $num2);
		break;

	case '-':
		echo sprintf('Vysledek: %d', $num1 - $num2);
		break;

	case '*':
		echo sprintf('Vysledek: %d', $num1 * $num2);
		break;

	case '/':
		if ($num2 == 0) {
			echo 'Ne';
		} else {
			echo sprintf('Vysledek: %f', $num1 / $num2);
		}
		break;

	case '%':
		if ($num2 == 0) {
			echo 'Ne';
		} else {
			echo sprintf('Vysledek: %d', $num1 % $num2);
		}
		break;


	default:
		echo 'Nevalidni operace';
		break;
}
?>
	</h4>

	</body>
</html>
