<?php
	if (isset($_COOKIE['user_login'])) {
		$username = $_COOKIE['user_login'];
	} elseif (isset($_SESSION['user_login'])) {
		$username = $_SESSION['user_login'];
	} else {
		header("Location: index.php");
	}

	if (isset($_POST['edit_user'])) {
		$password = $_POST['password'];
		$email = $_POST['email'];
		$fullName = $_POST['fullName'];
		$dateOfBirth = $_POST['dateOfBirth'];
		$address = $_POST['address'];
		$phone = $_POST['phone'];
		$gender = $_POST['gender'];
		$user = array(
	        'password' => md5($password),
	        'email' => $email,
	        'full_name' => $fullName,
	        'phone' => $phone,
	        'address' => $address,
	        'date_of_birth' => date('Y-m-d', strtotime($date)),
	        'gender' => $this->gender
        );
		$id_user = save('user', $user);
		if ($user_edit == false) {
			$_SESSION['edit_user'] = "Cập nhật thông tin không thành công. Vui lòng thử lại";
		} else {
			$_SESSION['edit_user'] = "Cập nhật thông tin thành công.";
			header("Location: index.php?controller=user");
		}
	}
	header("Location: index.php?controller=user");

?>