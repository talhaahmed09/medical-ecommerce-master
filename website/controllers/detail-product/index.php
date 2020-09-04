<?php
	$title = 'Chi tiết sản phẩm';
	if (isset($_GET['pid'])){

// LOAD BANNER
	$option_B 	= array(
		'where'     => 'Status = 1',
	);
	$banner = get_all('banner', $option_B);
	
// Lấy 5 sản phẩm mới nhất
		$option_P 	= array(
			'order_by' => 'Id ASC',
			'order_by'  => 'Createdate DESC',
			'limit'     => 5,
			'offset'    => 0
		);
		$product_slideVertical = get_all('product', $option_P);

// Liệt kê danh mục sản phẩm
		$option 	= array(
			'order_by' => 'Id ASC',
		);
		$category  	= get_all('categories', $option);

// Lấy chi tiết sản phẩm
		$pid = intval($_GET['pid']);
		$product   	= get_a_record('product', $pid);

// Lấy 5 sản phẩm cùng danh mục
		$catid      = $product['CategoryId'];
		$option_PD  = array(
			'where' => 'CategoryId = '.$catid,
		);
		$product_diffent  = get_all('product', $option_PD);
	}else{
		show_404();
	}
	require('website/views/detail-product/index.php');
?>