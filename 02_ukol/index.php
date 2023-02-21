<!DOCTYPE html>
<html lang=en>
	<head>
		<meta charset="UTF-8">
		<title>Domek</title>
		<style>
			
			html {
				padding: 0;
				margin: 0;
				font-family: monospace;
				color-scheme: dark;
				color: white;
			} 

			body {
				font-size: 2rem;
			}

			form {
				display: flex;
				justify-content: center;
				align-items: left;
				flex-direction: column;
				gap: 1rem;
				margin-bottom: 5rem;
			}

			button {
				border-radius: 10px;
				margin-top: 2rem;
				height: 3.5rem;
				width: 20rem;
			}

			input {
				border-radius: 10px;
				height: 2.5rem;
				width: 35rem;
			}

		</style>
	</head>
	<body>

		<form>
			<label for="width">Zadejte šířku domku: </label>
			<input type="number" name="width" id="widthid" />

			<label for="height">Zadejte výšku domku: </label>
			<input type="number" name="height" id="heightid" />

			<label for="height">Zadejte výšku plotu: </label>
			<input type="number" name="fenceHeight" id="fenceHeightid" />

			<button type="submit">Submit</button>
		</form>

<br>

<?php

$width = $_GET['width'];
$height = $_GET['height'];
$fenceHeight = $_GET['fenceHeight'];
$roofHeight = ($width / 2) - 1;

if ($width % 2 == 0)
	echo "<h3>Pouze lichá čísla pro šířku domku<h3>";
elseif ($fenceHeight >= $height)
	echo "<h3>Plot nemůže být vyšší než dům<h3>";
elseif ($height < 2 || $width < 3)
	echo "<h3>Dům musí být nenulové velikosti<h3>";
else {

	// Roof
	for ($i = 0; $i < $roofHeight; $i++) {
		for ($j = 0; $j < $roofHeight - $i; $j++) {
			print('&nbsp;');
		}
		print('X');
		for ($j = 0; $j < $i; $j++) {
			printf('&nbsp;%s', $j == $i - 1?'X':'&nbsp;');
		}
		print('<br>');
	}


	// Body
	for ($i = 0; $i < $width; $i++) {
		print('X');
	}?>
	<br>
	<?php
	for ($i = 1; $i < $height - 1; $i++) {
		print('X');
		for ($j = 1; $j < $width - 1; $j++) {
			printf('%s', ($j+$i)%2?'*':'o');
		}
		print('X');
		if ($height - $i == $fenceHeight) {
			print('-|-|-|');
		} elseif ($height - $i < $fenceHeight) {
			print(' | | |');
		}
		print('<br>');
	}
	for ($i = 0; $i < $width; $i++) {
		print('X');
	}
	print('-|-|-|');

}

?>

	</body>
</html>
