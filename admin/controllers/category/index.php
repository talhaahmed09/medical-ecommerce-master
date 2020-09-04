<?php
	$title    = 'Quản lí danh mục sản phẩm';
	$url      = 'admin.php?controller=category';
	$options = array(
	    'order_by' => 'Id ASC'
	);
	$category = get_all('categories', $options);
	require('admin/views/category/index.php');

?>