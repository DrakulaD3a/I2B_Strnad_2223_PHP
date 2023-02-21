<?php
include_once "password.php";

$err = [];
if (isset($_POST)) {
	['username' => $username, 'password' => $password, 'passwordRepeat' => $passwordRepeat] = $_POST;

	if (!empty($username) && !empty($password) && !empty($passwordRepeat)) {
		if ($password != $passwordRepeat) {
			$err[] = 'Hesla se neshodují';
		} else {
			if (!is_password_valid($password)) {
				$err[] = 'Heslo neni validni';
			}
		}
	}
}
?>

<!DOCTYPE html>
<html lang=en>
	<head>
		<meta charset="UTF-8">
		<title>Login</title>
		<style>
			.flex {
				display: flex;
			}

			.flex-col {
				flex-direction: column;
			}

			.p-5 {
				padding: 5rem;
			}

			.w-50 {
				width: 50%;
			}

			.border-black {
				border: black solid 3px;
			}

			.border-green {
				border: green solid 3px;
			}

			.justify-content {
				justify-content: center;
			}

			.align-items {
				align-items: center;
			}

			.green {
				color: green;
			}

			.bg-grey {
				background: #cecece;
			}

			.bg-white {
				background: white;
			}

			.margin-bot-3 {
				margin-bottom: 3rem;
			}
		</style
	</head>
	<body class="bg-grey flex justify-content align-items" >

		<form method="post" class="bg-white flex flex-col w-50 p-5">

<?php
for ($i = 0; $i < sizeof($err); $i++) {
	printf('<p>Chyba: %s</p>', $err[$i]);
}
?>

			<label for="username" >Username</label>
			<input name="username" id="usernameid" class="border-black margin-bot-3" />

			<label for="password" >Heslo</label>
			<input type="password" name="password" id="passwordid" class="border-black margin-bot-3" />

			<label for="passwordRepeat" >Heslo znovu</label>
			<input type="password" name="passwordRepeat" id="passwordRepeatid" class="border-black margin-bot-3" />

			<button type="submit" id="submit" class="border-green green" >Sign up</button>
		</form>

	</body>
</html>
