<?php
	if (isset($_COOKIE['user_login'])) {
		$username = $_COOKIE['user_login'];
	} elseif (isset($_SESSION['user_login'])) {
		$username = $_SESSION['user_login'];
	} else {
		header("Location: index.php");
	}
	$options = array(
		"where" => "username='$username'"
	);
    $user = Selecct_a_record('user', $options);
	require_once 'website/views/user/index.php';
?>