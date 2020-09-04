<?php
	$title    = 'Quản lí danh mục sản phẩm';
	$url      = 'admin.php?controller=category-news';
	$options = array(
	    'order_by' => 'Id ASC'
	);
	$category = get_all('categorynews', $options);
	require('admin/views/category-news/index.php');
?>