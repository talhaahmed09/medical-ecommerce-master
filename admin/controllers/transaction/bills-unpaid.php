<?php
	$title   = 'Hóa đơn chưa xử lí';
	$option_status = array(
		'where'  => 'Status = 0'
	);
	$transaction         = get_all('transaction', $option_status);
	$status  = array(
		0    => 'Chưa xử lí' ,
		1    => 'Đã xử lí',
	);
	require('admin/views/transaction/index.php');
?>