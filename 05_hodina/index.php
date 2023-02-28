<?php
session_start();

if (!empty($_SESSION['user'])) {
	header('Location: dashboard.php');
}
?>

<!DOCTYPE html>
<html lang=cz>
	<head>
		<meta charset="UTF-8">
		<title>Login</title>
		<link rel="stylesheet" href="main.css" />
	</head>
	<body class="bg-grey flex justify-content align-items" >

		<form method="post" action="dashboard.php" class="bg-white flex flex-col w-50 p-5">

			<label for="username" >Username</label>
			<input name="username" id="usernameid" class="border-black margin-bot-3" />

			<label for="password" >Heslo</label>
			<input type="password" name="password" id="passwordid" class="border-black margin-bot-3" />

			<button type="submit" id="submit" class="border-green green" >Přihlásit se</button>
		</form>

	</body>
</html>
