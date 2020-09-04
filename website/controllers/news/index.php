<?php
	$tittle = 'tin tức';

// LOAD BANNER
	$option_B 	= array(
		'where'     => 'Status = 1',
	);
	$banner = get_all('banner', $option_B);
	
// LOAD PRODUCT DIFFERENT	
	$option_P 	= array(
		'order_by'  => 'Id ASC',
		'order_by'  => 'Createdate DESC',
		'limit'     => 5,
		'offset'    => 0
	);
	$product_slideVertical = get_all('product', $option_P);

// LOAD CATEGORY
	$option  = array(
		'order_by'  => 'Id ASC',
	);
	$category  	           = get_all('categories', $option);

// LOAD NEWS
	if (isset($_GET['page'])) $page = intval($_GET['page']);
	else $page = 1;
	$page = ($page > 0) ? $page : 1;
	$limit = 5;
	$offset = ($page - 1) * $limit;
	$url = 'index.php?controller=news';
	$options  = array(
		'order_by'  => 'Id ASC',
		'limit'     => $limit,
		'offset'    => $offset
	);
	$total_rows            = get_total('news', $options);
	$total                 = ceil($total_rows / $limit);
	$news                  = get_all('news', $options);	
	$pagination = pagination($url, $page, $total);

	require('website/views/news/index.php');
?>