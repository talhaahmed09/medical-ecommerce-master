<?php
	$title         = 'hóa đơn đã xử lí';
	$option_status = array(
		'where'    => 'Status = 1',
	);
	$transaction         = get_all('transaction', $option_status);
	$status              = array(
		0   => 'Chưa xử lí' ,
		1   => 'Đã xử lí',
	);
	require('admin/views/transaction/index.php');
?>