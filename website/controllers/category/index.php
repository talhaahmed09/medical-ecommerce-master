<?php
$cid = intval($_GET['cid']);

// LOAD BANNER
	$option_B 	= array(
		'where'     => 'Status = 1',
	);
	$banner = get_all('banner', $option_B);

	$category = get_all('categories', array(
		'select' => 'Id, Name',
		'order_by' => 'Id ASC'
	));

if(isset($_GET['page'])) $page = intval($_GET['page']);
        else $page = 1;

$page = ($page>0) ? $page : 1;
$limit = 15;
$offset = ($page - 1) * $limit;

$options = array(
	'where' => 'CategoryId ='.$cid,
    'limit' => $limit,
    'offset' => $offset,
    'order_by' => 'Id DESC'
);

$url = 'category/'.$cid ;


$total_rows = get_total('product', $options);
$total = ceil($total_rows/$limit);

$product = get_all('product', $options);
$pagination = pagination($url, $page, $total);

//load view
require('website/views/category/index.php');