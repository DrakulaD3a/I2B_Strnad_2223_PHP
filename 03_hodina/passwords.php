<?php

function is_password_valid(string $password): bool {
	$password_len = strlen($password);
	if ($password_len < 8) {
		return false;
	}

	$numbers = 0;
	$upper = 0;
	$lower = 0;
	for ($i = 0; $i < $password_len; $i++) {
		if (is_numeric($password[$i])) {
			$numbers++;
		} else if ($password[$i] == strtolower($password[$i])) {
			$lower++;
		} else if ($password[$i] == strtoupper($password[$i])) {
			$upper++;
		}

		if ($numbers >= 1 && $upper >= 3 && $lower >= 3) {
			return true;
		}
	}

	return false;
}

?>
