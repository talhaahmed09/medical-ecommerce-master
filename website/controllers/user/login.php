<?php
	if ($_POST['username'] && $_POST['password']) {
		$username = $_POST['username'];
		$password = md5($_POST['password']);
		$options = array(
			"where" => "username='$username' AND password='$password'"
		);
        $user = Selecct_a_record('user', $options);
		if (isset($user)) {
			if (empty( $_POST['remember'])) {
					$_SESSION['user_login'] = $username;
					header('location:index.php');
				} else {
					$cookie_name = "user_login";
                    $cookie_value = $username;
                    $cookie_expiry = time() + (86400*30);
                    setcookie($cookie_name, $cookie_value, $cookie_expiry, '/');
				}
		} else {
			echo "error";
		}
	}
?>