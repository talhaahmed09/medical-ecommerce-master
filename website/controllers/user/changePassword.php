<?php
		$username = $_SESSION['user_login'];
		require_once 'website/models/User.php';
		$user = new User('', $username, '', '', '', '', '', '', '');
		$user = $user->getUser();
		if (isset($_POST['edit_password_user'])) {
		$password = $_POST['password'];
		$id = $_POST['id'];
		$oldPassword = md5($_POST['old_password']);
		$newPassword = $_POST['new_password'];
		if ($oldPassword !== $password) {
			$_SESSION['change_password_user'] = "Mật khẩu hiện tại không đúng. Vui lòng thử lại.";
		} else {
			$userCP = new User($id, $username, md5($newPassword), '', '', '', '', '', '');
			$userCP = $userCP->changePassword();
			if ($userCP == false) {
				$_SESSION['change_password_user'] = "Không thay đổi được mật khẩu. Vui lòng thử lại.";
			} else {
				$_SESSION['change_password_user'] = "Thay đổi mật khẩu thành công.";
			}
		}
	}

	require_once 'website/views/user/change-password.php';

?>