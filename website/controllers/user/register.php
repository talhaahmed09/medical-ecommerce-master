<?php
	require_once 'website/models/user.php';

	if (isset($_POST['register'])) {
		$username    = $_POST['username'];
		$password    = $_POST['password'];
		$email       = $_POST['email'];
		$fullName    = $_POST['fullName'];
		$dateOfBirth = $_POST['dateOfBirth'];
		$address     = $_POST['address'];
		$phone       = $_POST['phone'];
		$gender      = $_POST['gender'];
		$Createtime  = date('Y-m-d');
		$user = new User('', $username, $password, $email, $fullName, $phone, $address, $dateOfBirth, $gender, $Createtime);
		if ($user->checkUsernameUser() == true) {
			echo "Đã tồn tại tài khoản";
		} else {
			$user = $user->saveUser();
			if ($user == false) {
				echo "error_register";
			} else {
				$_SESSION['user_login'] = $username;
				header('location: index.php');
			}
			
		}
	}

?>