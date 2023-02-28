<?php

const USERNAME = 'fresh';
const PASSWORD = 'ABCabc123';

session_start();

if (!isset($_COOKIE['count'])) {
	setcookie('count', 0, time() + 3600 * 24 * 30, '/');
} 

if (isset($_POST['username']) && isset($_POST['password'])) {

	$username = $_POST['username'];
	$password = $_POST['password'];

	function login(string $username, string $password): bool {
		return ($username == USERNAME && $password == PASSWORD);
	}

	if (login($username, $password)) {
		echo 'Zadali jste správné údaje';
		$_SESSION['user'] = $username;
		$_SESSION['count'] = 0;
	} else {
		header('Location: index.php');
		die();
	}
}

if (empty($_SESSION['user'])) {
	header('Location: index.php');
	die();
}

$_SESSION['count']++;
setcookie('count', $_COOKIE['count'] + 1, time() + 3600 * 24 * 30, '/');

?>

<h1>Vítej, <?=$_SESSION['user'] ?></h1>
<p>Na této stránce jste za tuto relaci byl celkem <?=$_SESSION['count'] ?>x</p>
<p>Na této stránce jste za tuto relaci byl celkem <?=$_COOKIE['count'] ?>x</p>
<a href="logout.php">Odhlásit se</a>
