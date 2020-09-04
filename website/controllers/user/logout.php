<?php
	if($_COOKIE['user_login']) {
		$res = setcookie('user_login', '', time() - 3600,'/');
	} elseif ($_SESSION['user_login']) {
		unset($_SESSION['user_login']);
		if (isset($_SESSION['cart'])) {	
			unset($_SESSION['cart']);
		}
	}
	header('Location: index.php');
?>