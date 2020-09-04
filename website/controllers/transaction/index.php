<?php
	if (isset($_COOKIE['user_login'])) {
		$username = $_COOKIE['user_login'];
	} elseif (isset($_SESSION['user_login'])) {
		$username = $_SESSION['user_login'];
	} else {
		$username = null;
	}

	// LOAD BANNER
	$option_B 	= array(
		'where'     => 'Status = 1',
	);
	$banner = get_all('banner', $option_B);
	
	$options = array(
		"where" => "username='$username'"
	);
    $user = Selecct_a_record('user', $options);
	require ('website/views/transaction/index.php');
?>