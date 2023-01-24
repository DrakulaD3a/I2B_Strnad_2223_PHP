<!DOCTYPE html>
<html lang="cs">
	<head>
		<meta charset="UTF-8" />
		<link rel="stylesheet" href="stylesheet.css" />
		<title>Malá násobilka</title>
	</head>
	<body>
		<table>
<?php
$rows = 10;
$columns = 10;

for ($i = 0; $i <= $rows; $i++) {

	echo '<tr>';
	echo "<th>$i</th>";

	for ($j = 1; $j <= $columns; $j++) {
		if ($i == 0) {
			echo "<th>$j</th>";
		} else {
			echo sprintf('<td>%d</td>', $i * $j);
		}
	}
	echo '</tr>';
}
?>
		</table>
	</body>
</html>
