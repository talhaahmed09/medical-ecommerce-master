<?php
	
	$title    = 'Quản lý khách hàng';
	$options = array(
	    'order_by' => 'Id ASC'
	);
	$custommer  = get_all('user', $options);
	require('admin/views/custommer/index.php');
	
?>