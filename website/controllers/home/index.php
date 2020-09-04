<?php 
	$title = 'Trang chủ';
	$option     = array(
		'order_by'  => 'Createdate DESC',
		'limit'     => 5,
		'offset'    => 0
	);
	$hotproduct = get_all('product', $option);
	$hotnew     = get_all('news', $option);

	$option_s  = array(
		'where'    => 'Status = 1',
	);
	$slideshow     = get_all('banner_slide', $option_s);

	// print_r($slideshow);
	// die();

	require('website/views/home/index.php');
?>
