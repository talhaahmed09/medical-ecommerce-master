<?php
	
	$title    = 'Quản lí sản phẩm';
	$url      = 'admin.php?controller=product';
	$options = array(
	    'order_by' => 'Id ASC'
	);
	$product  = get_all('product', $options);
	require('admin/views/product/index.php');
	
?>