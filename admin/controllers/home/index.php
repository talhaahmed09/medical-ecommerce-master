<?php
	$title   = 'Quản trị hệ thống';
	$options = array(
		'order_by' => 'Id ASC',
	);

	// Hiển thị 5 đơn đặt hàng mới nhất
	require('admin/models/home.php');
	$time = date('Y-m-d');
	$order         = load_transaction_of($time);
	$total_order   = count($order);

	$option        = array(
		'order_by'  => 'Id DESC',
	);
	$total_user    = get_total('product', $option);

	$option        = array(
		'order_by'  => 'Createtime DESC',
		'limit'     => 5,
	);
	$total_product = get_total('product', $option);


	require('admin/views/home/index.php');
	
?>