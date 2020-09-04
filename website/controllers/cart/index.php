<?php
	$title = 'Giỏ hàng';
	$option  = array(
		'order_by'  => 'Id ASC',
	);
	// LOAD BANNER
	$option_B 	= array(
		'where'     => 'Status = 1',
	);
	$banner = get_all('banner', $option_B);
	
	$option_P 	= array(
		'order_by'  => 'Id ASC',
		'order_by'  => 'Createdate DESC',
		'limit'     => 5,
		'offset'    => 0
	);
	$category  	           = get_all('categories', $option); 
	$product_slideVertical = get_all('product', $option_P);
	if (isset($_SESSION['cart'])) {
		if (count($_SESSION['cart']) == 0) {
			unset($_SESSION['cart']);
		}
	}
	require('website/views/cart/index.php');
?>