<!DOCTYPE html>
<html lang="cs">
<head>
	<meta charset="UTF-8"/>
	<title>01 hodina</title>
</head>
<body>
	<h1>1. hodina</h1>

<?php
	$a = 123;
	$b = 'Text';

	printf($a);
	echo $a;
	echo '<br>aaaaaaaaaa';

	$den = 'patek';
	echo "<h2>Dnes je $den</h2>";
?>

<?php
	if (strtolower($den) == 'patek') {
		echo 'o ano';
	} else {
		echo 'kezby byl patek';
	}

	$arr = ['Pondeli', 'Utery', 'Streda', 'Ctvrtek', 'Patek', 'Sobota'];
	echo '<br>';
	var_dump($arr);
	$arr[] = 'Nedele';
	echo '<br>';
	var_dump($arr);
	echo '<br>';
	echo 'Velikost pole je: ' . sizeof($arr) . '<br>';
	echo "Prvni prvek pole je $arr[0]<br>";
?>

	<br>

	<ul>
		<?php
			$size = count($arr);
			for ($i = 0; $i < $size; $i++) { ?>
				<li><?= $arr[$i] ?></li>
			<?php }
		?>
	</ul>

	<h2>Dnes je <?= $den ?></h2>
</body>
</html>
