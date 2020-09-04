<?php
	$title = 'Nội dung tin tức';
	if (isset($_GET['nid'])) $nid = intval($_GET['nid']);
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
		$news    = get_a_record('news', $nid);
		require('website/views/detail-news/index.php'); 
?>