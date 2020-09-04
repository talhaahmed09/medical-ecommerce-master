<?php

	$title     =   'Quản lý admin';

	$option    = array(
		'order_by'  => 'Id DESC',
	);
	$listadmin = get_all('admin', $option);
	require('admin/views/auth/listadmin.php');
?>