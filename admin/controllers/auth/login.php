<?php
		if (isset($_COOKIE['user_admin']) || isset($_SESSION['user_admin'])) {
			header("Location: admin.php");
		} else {
				require('admin/models/auth.php');
			
				if (isset($_POST['login'])) {
				if (empty($_POST['username']) || empty($_POST['password'])) {
					if (isset($_POST['username'])) {
						$_SESSION['username'] = $_POST['username'];
					}
					$_SESSION['error'] = "Tên đăng nhập và mật khẩu không được để trống";
					header("Location: admin.php?controller=auth&action=login");
				} else {
						$username = $_POST['username'];
						$password = $_POST['password'];
						if (empty( $_POST['remember'])) {
							$remember = false;
						} else {
							$remember =  $_POST['remember'];
						}
						$user = new Admin('', $username, $password, '');
						if ($user->checkAdmin($remember) == 1) {
							header("Location: admin.php");
						} else {
							$_SESSION['error'] = "Tài khoản hoặc mật khẩu không đúng";
							header("Location: admin.php?controller=auth&action=login");
						}
					}
			}
		}
		require ('admin/views/auth/index.php');
?>
