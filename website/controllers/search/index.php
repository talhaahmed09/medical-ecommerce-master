<?php

// LOAD CATEGORY
	$option 	= array(
		'order_by' => 'Id ASC',
	);
	$category  	= get_all('categories', $option); 

// LOAD PRODUCT DIFFERENT
	$option_P 	= array(
		'order_by' => 'Id ASC',
		'order_by'  => 'Createdate DESC',
		'limit'     => 5,
		'offset'    => 0
	);
	$product_slideVertical = get_all('product', $option_P);

// LOAD BANNER
	$option_B   = array(
		'where'  => 'Status = 1'
	);
	$banner  =  get_all('banner', $option_B);

// LOAD PRODUCT SEARCH
		$keyword = $_GET['keyword'];
		if (isset($_GET['page'])) $page = intval($_GET['page']);
		else $page = 1;
		$page = ($page > 0) ? $page : 1;
		$limit = 9;
		$offset = ($page - 1) * $limit;
		$url = 'index.php?controller=search&keyword=' .$keyword;
		$string = 'Name regexp='.$keyword;
		$options = array(
			'where' => "Name REGEXP '" . ($keyword) . "'",
		    'limit' => $limit,
		    'offset' => $offset,
		    'order_by' => 'Id DESC'
		);
		$total_rows            = get_total('product', $options);
		$total                 = ceil($total_rows / $limit);
		$product   	= get_all('product', $options);
		$pagination = pagination($url, $page, $total);
		require ('website/views/search/index.php');
?>



