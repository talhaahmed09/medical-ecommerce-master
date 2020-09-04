<?php
	$title   = 'Quản lý tin tức';
	$option  = array(
		'order_by'  => 'Id ASC',
	);
	$news    = get_all('news', $option);
	require('admin/views/news/index.php');

?>