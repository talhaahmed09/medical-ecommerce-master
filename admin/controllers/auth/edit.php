<?php
if (!empty($_POST)) {
		$admin = array(
			'Id'            => intval($_POST['id']),
			'Name'          => escape($_POST['name']),
			'password'      => md5($_POST['pass'])
		);
		$lid        = save('admin', $admin);
		header('location: admin.php?controller=auth&action=listadmin');
	}
	if (isset($_GET['lid'])) $lid = intval($_GET['lid']); else $lid = 0;
	$title = 'Quản lý tài khoản quản trị';
	$admin = get_a_record('admin', $lid);
	require('admin/views/auth/edit.php');
?>